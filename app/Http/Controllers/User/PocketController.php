<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pocket\StorePocketRequest;
use App\Http\Requests\Pocket\UpdatePocketRequest;
use App\Models\Pocket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PocketController extends Controller
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

        return view('pages.users.pocket.index', ['pockets' => $this->user->pockets()->get(), 'remainingCards' => $activeSubscription->plan->maxPocket - $this->user->pockets()->count()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!$this->user->activeSubscription()?->canAddMorePockets()) {
            return back()->with('error', 'Impossible d\'ajouter une poche. Limite atteinte.');
        }

        return view('pages.users.pocket.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePocketRequest $request)
    {
        DB::transaction(function () use ($request) {
            $this->user->pockets()->create($request->all());

            $this->user->activeSubscription()->increment('pockectCount');

        });

        return to_route('pocket.index')->with('success', 'Poche ajoutee avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pocket $pocket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pocket $pocket)
    {
        return view('pages.users.pocket.edit', ['pocket' => $pocket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePocketRequest $request, Pocket $pocket)
    {
        $pocket->update($request->validated());

        $pocket->calculateProgression();
        $pocket->save();

        return to_route('pocket.index')->with('success', 'Poche modifiee avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pocket $pocket)
    {
        $pocket->delete();

        return back()->with('success', 'Poche suprimee avec succes');
    }
}
