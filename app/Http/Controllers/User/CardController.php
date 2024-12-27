<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Card\StoreCardRequest;
use App\Http\Requests\Card\UpdateCardRequest;
use App\Models\Card;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
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
        //pour date
        // $cards = $this->user->cards()->get()->map(function ($card) {
        //     $card->formatted_expiry_date = \Carbon\Carbon::parse($card->expiry_date)->format('m/y');
        //     return $card;
        // });.

        $activeSubscription = Subscription::where('userId', $this->user->id)
            ->where('status', Subscription::STATUS_ACTIVE)
            ->first();

        // Si l'abonnement est actif, calcule le nombre de cartes restantes // la condition n'est pas necessaire
        if ($activeSubscription) {
            $remainingCards = $activeSubscription->plan->maxCards - $this->user->cards->count();
        } else {
            $remainingCards = 0;
        }

        // Retourne à la vue avec les données nécessaires
        return view('pages.users.cards.index', [
            'cards' => $this->user->cards()->get(),
            'remainingCards' => $remainingCards
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activeSubscription = Subscription::where('userId', $this->user->id)
            ->where('status', Subscription::STATUS_ACTIVE)
            ->first();

        if (!$activeSubscription->canAddMoreCards()) {
            return back()->with('error', 'Impossible d\'ajouter une carte. Limite atteinte.');
        }

        return view('pages.users.cards.edit', ['cardTypes' => Card::getCardTypes()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCardRequest $request)
    {

        // $this->user->cards()->create($request->validated());

        DB::transaction(function () use ($request) {
            $this->user->cards()->create($request->validated());

            Subscription::where('userId', $this->user->id)
                ->where('status', Subscription::STATUS_ACTIVE)
                ->increment('cardCount');
        });

        return to_route('card.index')->with('success', 'Carte ajoute avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        return view('pages.users.cards.edit', ['card' => $card, 'cardTypes' => Card::getCardTypes()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        $card->update($request->validated());

        return to_route('card.index')->with('success', 'Carte modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        $card->delete();

        return back()->with('success', 'Carte supprime avec succes');
    }
}
