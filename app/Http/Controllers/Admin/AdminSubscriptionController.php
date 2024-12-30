<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;

class AdminSubscriptionController extends Controller
{
    public function index()
    {
        return view('pages.admin.subscription.index', [
            'subscriptions' => Subscription::orderByDesc('created_at')->get()
        ]);
    }

    public function show(Subscription $subscription)
    {
        return view('pages.admin.subscription.show', [
            'subscription' => $subscription
        ]);
    }

    public function disable(Subscription $subscription)
    {
        //ici  on doit verifier si l'abonnement actif est gratuit si oui on le desctive, si non on le met en attente et une fois fait on reactive l'abonnement gratuit si ca existe sinon on en cree un autre gratuit
        if ($subscription->plan->duration === Plan::FREE_ACCESS) {
            $subscription->status = Subscription::STATUS_DISABLED;
            $subscription->save();
        } else {
            $subscription->status = Subscription::STATUS_PENDING;
            $subscription->save();

            //une fois fait on reactive l'abonnement gratuit de ce user si ca existe sinon on en cree un autre gratuit
            $freeSubscription = Subscription::where('userId', $subscription->userId)
                ->where('planId', Plan::where('duration', Plan::FREE_ACCESS)->first()->id)
                ->first();

            if ($freeSubscription) {
                $freeSubscription->status = Subscription::STATUS_ACTIVE;
                $freeSubscription->save();
            } else {
                Subscription::create([
                    'userId' => $subscription->userId,
                    'planId' => Plan::where('duration', Plan::FREE_ACCESS)->first()->id,
                    'period' => Plan::FREE_ACCESS,
                    'startDate' => now(),
                    'endDate' => now()->addYear(),
                    'amount' => 0,
                    'paymentStatus' => Subscription::PAYMENT_STATUS_NO_PAYMENT_REQUIRED,
                    'status' => Subscription::STATUS_ACTIVE
                ]);
            }
        }

        return redirect()->route('admin.subscription')->with('success', 'Abonnement desactive avec succes');
    }

    public function enable(Subscription $subscription)
    {
        //refactor le code il doit pas y avoir de duplication d'abonnements actifs, si un abonnement est active on verifit s'il y'a un ancien abonnement actif on le desactive
        $activeSubscription = Subscription::where('userId', $subscription->userId)
            ->where('status', Subscription::STATUS_ACTIVE)
            ->first();

        if ($activeSubscription) {
            $activeSubscription->status = Subscription::STATUS_DISABLED;
            $activeSubscription->save();
        }

        $subscription->status = Subscription::STATUS_ACTIVE;
        $subscription->save();

        return redirect()->route('admin.subscription')->with('success', 'Abonnement active avec succes');
    }
}
