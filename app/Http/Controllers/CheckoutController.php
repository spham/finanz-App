<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Stripe\StripeClient;
use Throwable;

class CheckoutController extends Controller
{
    public function __construct(private StripeClient $stripeClient)
    {
        $this->stripeClient = new StripeClient(env('STRIPE_SECRET'));
    }

    public function checkout(Plan $plan, Request $request)
    {
        //on refacto
        $request->validate(['period' => ['required', 'in:monthly,yearly']]);
        $period = $request->query('period');

        $user = Auth::user();

        //on refacto
        $totalAmount = $this->calculateTotalAmount($plan, $period);

        $startDate = now();
        //on refacto
        $endDate = $period === 'monthly' ? $startDate->copy()->addMonth() : $startDate->copy()->addYear();

        try {
            $checkoutSession = $this->stripeClient->checkout->sessions->create([
                'payment_method_types' => ['card'],// to add
                'customer_email' => $user->email, // to add
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => $plan->name,
                            ],
                            'unit_amount' => $totalAmount,
                        ],
                        'quantity' => 1,
                    ]
                ],
                'mode' => 'payment',
                'success_url' => route('plan.checkout.succes') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('plan.checkout.cancel'),
            ]);

            Subscription::create([
                'userId' => $user->id,
                'planId' => $plan->id,
                'period' => $period,
                'startDate' => $startDate,
                'endDate' => $endDate,
                'amount' => ($totalAmount / 100),
                'paymentStatus' => Subscription::STATUS_PENDING,
                'status' => Subscription::STATUS_PENDING,
                'sessionId' => $checkoutSession->id
            ]);

        } catch (Throwable $e) {
            Log::error('Stripe Error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Une erreure est survenu ' . $e->getMessage());
        }

        return redirect($checkoutSession->url);
    }

    private function calculateTotalAmount(Plan $plan, string $period)
    {
        return $period === 'monthly' ? $plan->price * 100 : $plan->price * 100 * 12;
    }

    public function success(Request $request)
    {
        $sessionId = $request->query('session_id');
        $checkoutSession = $this->stripeClient->checkout->sessions->retrieve($sessionId);

        if ($checkoutSession->payment_status == 'paid') {
            $subscription = Subscription::where('sessionId', $sessionId)->first();

            $activeSubscription = Subscription::where('userId', $subscription->userId)
                ->where('status', Subscription::STATUS_ACTIVE)
                ->first();

            if ($activeSubscription) {
                $activeSubscription->update([
                    'status' => Subscription::STATUS_DISABLED,
                    'endDate' => now(), // Fin immédiate de l'ancien abonnement
                ]);
            }

            $subscription->update([
                'paymentStatus' => Subscription::PAYMENT_STATUS_PAID,
                'status' => Subscription::STATUS_ACTIVE
            ]);
        }
        return view('pages.checkout.success', ['status' => $checkoutSession->payment_status]);
    }

    public function cancel()
    {
        return view('pages.checkout.cancel');
    }
}
