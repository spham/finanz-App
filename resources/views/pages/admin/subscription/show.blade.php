{{-- Show page --}}
@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Details de l'abonnement</h1>
    </div>

    <!-- Subscription Details not table use these attributes
                        'userId',
                        'planId',
                        'period',
                        'startDate',
                        'endDate',
                        'amount',
                        'paymentStatus',
                        'status',
                        'sessionId',
                        'cardCount',
                        'pockectCount',
                        'transactionCount'-->
    <div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
        <div class="flex flex-col">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col">
                    <div class="flex flex-row">
                        <span class="font-semibold">Prenom & Nom:</span>
                        <span class="ml-2">{{ $subscription->subscriber->firstName }}
                            {{ $subscription->subscriber->lastName }}</span>
                    </div>
                    <div class="flex flex-row">
                        <span class="font-semibold">Type d'abonnement:</span>
                        <span class="ml-2">{{ $subscription->plan->name }}</span>
                    </div>
                    <div class="flex flex-row">
                        <span class="font-semibold">Debut:</span>
                        <span class="ml-2">{{ $subscription->startDate }}</span>
                    </div>
                    <div class="flex flex-row">
                        <span class="font-semibold">Fin:</span>
                        <span class="ml-2">{{ $subscription->endDate }}</span>
                    </div>
                    <div class="flex flex-row">
                        <span class="font-semibold">Status du paiement:</span>
                        <span class="ml-2">{{ $subscription->paymentStatus }}</span>
                    </div>
                    <div class="flex flex-row">
                        <span class="font-semibold">Status:</span>
                        <span class="ml-2">{{ $subscription->status }}</span>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-row">
                        <span class="font-semibold">Nombre de carte ajoute :</span>
                        <span class="ml-2">{{ $subscription->cardCount }}</span>
                    </div>
                    <div class="flex flex-row">
                        <span class="font-semibold">Nombre de poches cree:</span>
                        <span class="ml-2">{{ $subscription->pockectCount }}</span>
                    </div>
                    <div class="flex flex-row">
                        <span class="font-semibold">Nombre de transaction effectue:</span>
                        <span class="ml-2">{{ $subscription->transactionCount }}</span>
                    </div>
                    <div class="flex flex-row">
                        <span class="font-semibold">Montant:</span>
                        <span class="ml-2">{{ $subscription->amount }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
