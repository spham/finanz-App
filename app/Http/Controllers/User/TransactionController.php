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
        return view('pages.users.transaction.index', ['transactions' => $this->user->transactions()->get()]);
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

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreTransactionRequest $request)
    // {
    //     // dd($request->validated(), $request->source_type, $request->destination_type, $request->all());

    //     // A refacto

    //     if ($request->source_type === 'card') {
    //         $source = Card::find($request->source_id);

    //         if (!$source && $request->source_id) {
    //             return back()->with('error', 'Erreur source non disponible');
    //         }
    //     } else if ($request->source_type === 'pocket') {
    //         $source = Pocket::find($request->source_id);

    //         if (!$source && $request->source_id) {
    //             return back()->with('error', 'Erreur source non disponible');
    //         }
    //     } else {
    //         $source = null;
    //     }

    //     // A refacto
    //     if ($request->destination_type === 'card') {
    //         $destination = Card::find($request->destination_id);

    //         if (!$destination && $request->destination_id) {
    //             return back()->with('error', 'Erreur source non disponible');
    //         }
    //     } else if ($request->destination_type === 'pocket') {
    //         $destination = Pocket::find($request->destination_id);

    //         if (!$destination && $request->destination_id) {
    //             return back()->with('error', 'Erreur source non disponible');
    //         }
    //     } else {
    //         $destination = null;
    //     }

    //     DB::transaction(function () use ($request, $source, $destination) {

    //         $this->user->transactions()->create([
    //             'type' => $request->type,
    //             'source_id' => $source ? $source->id : null,
    //             'destination_id' => $destination ? $destination->id : null,
    //             'description' => $request->description,
    //             'amount' => $request->amount
    //         ]);

    //         if ($source) {
    //             $source->balance -= $request->amount;

    // if ($request->destination_type === 'pocket') {
    //     $destination->calculateProgression();
    // }

    //             $source->update();
    //         }

    //         if ($destination) {
    //             $destination->balance += $request->amount;

    //             if ($request->destination_type === 'pocket') {
    //                 $destination->calculateProgression();
    //             }

    //             $destination->update();
    //         }

    //         $this->user->activeSubscription()->increment('transactionCount');
    //     });

    //     return to_route('transaction.index')->with('success', 'Transaction ajoute avec succes');

    // }

    // public function store(StoreTransactionRequest $request)
    // {
    //     // Obtenez les entités source et destination
    //     $source = $this->getEntity($request->source_type, $request->source_id, 'source');
    //     $destination = $this->getEntity($request->destination_type, $request->destination_id, 'destination');

    //     DB::transaction(function () use ($request, $source, $destination) {
    //         // Créer la transaction
    //         $this->user->transactions()->create([
    //             'type' => $request->type,
    //             'source_id' => $source?->id,
    //             'source_type' => $source ? get_class($source) : null,
    //             'destination_id' => $destination?->id,
    //             'destination_type' => $destination ? get_class($destination) : null,
    //             'description' => $request->description,
    //             'amount' => $request->amount
    //         ]);

    //         // Mettre à jour le solde de la source
    //         if ($source) {
    //             $source->balance -= $request->amount;

    //             if ($request->destination_type === 'pocket') {
    //                 $destination->calculateProgression();
    //             }

    //             $source->update();
    //         }

    //         // Mettre à jour le solde de la destination
    //         if ($destination) {
    //             $destination->balance += $request->amount;

    //             // Calculer la progression pour les poches si nécessaire
    //             if ($request->destination_type === 'pocket') {
    //                 $destination->calculateProgression();
    //             }

    //             $destination->update();
    //         }

    //         // Incrémenter le compteur de transactions de l'utilisateur
    //         $this->user->activeSubscription()->increment('transactionCount');
    //     });

    //     return to_route('transaction.index')->with('success', 'Transaction ajoutée avec succès');
    // }

    /**
     * Obtenir une entité Card ou Pocket en fonction du type et de l'ID.
     */
    // private function getEntity(?string $type, ?int $id, string $field)
    // {
    //     if (!$id) {
    //         return null;
    //     }

    //     $entity = null;
    //     if ($type === 'card') {
    //         $entity = Card::find($id);
    //     } elseif ($type === 'pocket') {
    //         $entity = Pocket::find($id);
    //     }

    //     if (!$entity) {
    //         abort(400, "Erreur: " . $field . " non disponible ou invalide.");
    //     }

    //     return $entity;
    // }

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
    private function getEntity(?string $type, ?int $id)
    {
        if (!$id || !$type) {
            return null;
        }

        // Utiliser un switch pour rendre plus extensible si vous avez plusieurs types
        switch ($type) {
            case 'card':
                return Card::find($id);
            case 'pocket':
                return Pocket::find($id);
            default:
                abort(400, "Erreur: Entité non valide.");
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
