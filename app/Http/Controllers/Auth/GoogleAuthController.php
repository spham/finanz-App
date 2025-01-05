<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Throwable;
use Illuminate\Support\Str;


class GoogleAuthController extends Controller
{
    /**
     * Redirect the user to Google’s OAuth page.
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google.
     */
    public function callback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (Throwable $e) {
            return redirect('/')->with('error', 'Echec de connexion avec google');
        }

        //Check if the user already exists in the DB
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Get that user logged
            Auth::login($existingUser);
        } else {
            // dd($user->user);
            // Otherwise create a new user
            $newUser = User::updateOrCreate(
                ['email' => $user->email],
                [
                    'firstName' => $user->user['given_name'],
                    'lastName' => $user->user['family_name'],
                    // 'image' => $user->$user->getAvatar(),
                    'password' => bcrypt(Str::random(8)),
                    'email_verified_at' => now()
                ]
            );

            //Refacto this by creating a service
            $startDate = now();
            $endDate = $startDate->copy()->addYear();

            //did after
            $freePlan = Plan::where('duration', '=', Plan::FREE_ACCESS)->first();
            Subscription::create([
                'userId' => $newUser->id,
                'planId' => $freePlan->id,
                'period' => Plan::YEARLY_DURATION,
                'startDate' => now(),
                'endDate' => $endDate,
                'amount' => $freePlan->price,
                'paymentStatus' => Subscription::PAYMENT_STATUS_NO_PAYMENT_REQUIRED,
                'status' => Subscription::STATUS_ACTIVE,
            ]);

            Auth::login($newUser);

        }

        if (Auth::user()->role == 'admin') {
            return to_route('admin.home');
        }

        // Redirect the user to the dashboard or any other secure page
        return redirect('/dashboard');
    }
}
