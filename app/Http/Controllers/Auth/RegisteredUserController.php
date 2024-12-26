<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $startDate = now();
        $endDate = $startDate->copy()->addYear();

        //did after
        $freePlan = Plan::where('duration', Plan::FREE_ACCESS)->first();
        Subscription::create([
            'userId' => $user->id,
            'planId' => $freePlan->id,
            'period' => Plan::YEARLY_DURATION,
            'startDate' => now(),
            'endDate' => $endDate,
            'amount' => $freePlan->price,
            'paymentStatus' => Subscription::PAYMENT_STATUS_NO_PAYMENT_REQUIRED,
            'status' => Subscription::STATUS_ACTIVE,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('users.home', absolute: false));
    }
}
