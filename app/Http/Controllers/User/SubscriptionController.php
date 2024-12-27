<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function __construct(private ?User $user)
    {
        $this->user = Auth::user();
    }

    public function subscriptions()
    {
        $subscriptions = $this->user->subscriptions()->orderByDesc('id')->getResults();

        return view('pages.users.subscription', ['subscriptions' => $subscriptions]);
    }
}
