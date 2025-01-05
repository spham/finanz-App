<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Transaction\StoreTransactionRequest;
use App\Http\Requests\Transaction\UpdateTransactionRequest;
use App\Models\Card;
use App\Models\Pocket;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function __construct(private ?User $user)
    {
        $this->user = Auth::user();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeSubscription = $this->user->activeSubscription();

        return view('pages.users.transaction.index', [
            'transactions' => $this->user->transactions()->get(),
            'remainingTransactions' => $activeSubscription->plan->maxTransaction - $this->user->transactions()->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.transaction.edit', [
            'types' => Transaction::getTypes(),
            'cards' => $this->user->cards()->where('balance', '>', 0)->get(),
            'sourcePockets' => $this->user->pockets()->where('isBlocked', '!=', 1)->where('balance', '>', 0)->get(),
            'destPockets' => $this->user->pockets()->get()
        ]);
    }


    public function store(StoreTransactionRequest $request)
    {
        // Obtenez les entités source et destination via la méthode polymorphe
        $source = $this->getEntity($request->source_type, $request->source_id);
        $destination = $this->getEntity($request->destination_type, $request->destination_id);

        DB::transaction(function () use ($request, $source, $destination) {
            // Créer la transaction
            $transaction = $this->user->transactions()->create([
                'type' => $request->type,
                'description' => $request->description,
                'amount' => $request->amount,
            ]);

            // Lier les entités source et destination à la transaction
            //TODO Refactor there with 225th line of code
            if ($source) {
                $transaction->source()->associate($source);
            }

            if ($destination) {
                $transaction->destination()->associate($destination);
            }

            // Enregistrez la transaction
            $transaction->save(); // Sauvegarder la transaction après l'association

            // Mettre à jour le solde de la source, si elle existe
            if ($source) {
                $source->balance -= $request->amount;

                if ($request->source_type === 'pocket') {
                    $source->calculateProgression();
                }

                $source->save(); // Sauvegarder après modification
            }

            // Mettre à jour le solde de la destination, si elle existe
            if ($destination) {
                $destination->balance += $request->amount;

                if ($request->destination_type === 'pocket') {
                    $destination->calculateProgression();
                }
                $destination->save(); // Sauvegarder après modification
            }

            // Incrémenter le compteur de transactions de l'utilisateur
            $this->user->activeSubscription()->increment('transactionCount');
        });

        return to_route('transaction.index')->with('success', 'Transaction ajoutée avec succès');
    }

    /**
     * Obtenir une entité Card ou Pocket en fonction du type et de l'ID.
     */
    // private function getEntity(?string $type, ?int $id)
    // {
    //     if (!$id || !$type) {
    //         return null;
    //     }

    //     // Utiliser un switch pour rendre plus extensible si vous avez plusieurs types
    //     switch ($type) {
    //         case 'card':
    //             return Card::find($id);
    //         case 'pocket':
    //             return Pocket::find($id);
    //         default:
    //             abort(400, "Erreur: Entité non valide.");
    //     }
    // }

    /**
     * Récupère une entité (Card ou Pocket) en fonction de son type et de son ID.
     */
    private function getEntity(?string $type, ?int $id): ?object
    {
        if (!$type || !$id) {
            return null;
        }

        return match ($type) {
            'card' => Card::findOrFail($id),
            'pocket' => Pocket::findOrFail($id),
            default => throw new \InvalidArgumentException("Type d'entité non valide : $type"),
        };
    }



    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        return view('pages.users.transaction.edit', [
            'types' => Transaction::getTypes(),
            'cards' => $this->user->cards()->where('balance', '>', 0)->get(),
            'sourcePockets' => $this->user->pockets()->where('isBlocked', '!=', '1')->where('balance', '>', 0)->get(),
            'destPockets' => $this->user->pockets()->get(),
            'transaction' => $transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        // Obtenez les entités source et destination via la méthode polymorphe
        $source = $this->getEntity($request->source_type, $request->source_id);
        $destination = $this->getEntity($request->destination_type, $request->destination_id);

        DB::transaction(function () use ($request, $source, $destination, $transaction) {
            // Créer la transaction
            $transaction->fill([
                'type' => $request->type,
                'description' => $request->description,
                'amount' => $request->amount,
            ]);

            // Lier les entités source et destination à la transaction
            //TODO Refactor there with the 326th line
            if ($source) {
                $transaction->source()->associate($source);
            }

            if ($destination) {
                $transaction->destination()->associate($destination);
            }

            // Enregistrez la transaction
            $transaction->update(); // Sauvegarder la transaction après l'association

            // Mettre à jour le solde de la source, si elle existe
            if ($source) {
                $source->balance -= $request->amount;

                if ($request->source_type === 'pocket') {
                    $source->calculateProgression();
                }

                $source->save(); // Sauvegarder après modification
            }

            // Mettre à jour le solde de la destination, si elle existe
            if ($destination) {
                $destination->balance += $request->amount;

                if ($request->destination_type === 'pocket') {
                    $destination->calculateProgression();
                }
                $destination->save(); // Sauvegarder après modification
            }

            // Incrémenter le compteur de transactions de l'utilisateur
            $this->user->activeSubscription()->increment('transactionCount');
        });

        return to_route('transaction.index')->with('success', 'Transaction ajoutée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        DB::transaction(function () use ($transaction) {
            // Mettre à jour le solde de la source, si elle existe
            if ($transaction->source) {
                $transaction->source->balance += $transaction->amount;

                if ($transaction->source_type === 'pocket') {
                    $transaction->source->calculateProgression();
                }

                $transaction->source->save(); // Sauvegarder après modification
            }

            // Mettre à jour le solde de la destination, si elle existe
            if ($transaction->destination) {
                $transaction->destination->balance -= $transaction->amount;

                if ($transaction->destination_type === 'pocket') {
                    $transaction->destination->calculateProgression();
                }
                $transaction->destination->save(); // Sauvegarder après modification
            }

            // Supprimer la transaction
            $transaction->delete();

            // Décrémenter le compteur de transactions de l'utilisateur
            $this->user->activeSubscription()->decrement('transactionCount');

        });

        return back()->with('success', 'Transaction supprimée avec succès');
    }
}
