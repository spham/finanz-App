@extends('layouts.app')

@section('contents')
    <div class="mb-6 grid grid-cols-1 gap-4 lg:grid-cols-3">
        <!-- Balance Card -->
        <div class="rounded-lg bg-white p-4 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-500">Nombre total d'utilisateurs</h3>
                <span class="rounded-full bg-yellow-100 p-2">💰</span>
            </div>
            <p class="mt-2 text-3xl font-semibold">
                {{ number_format($totalUsers, 0, '', ',') }}
            </p>

        </div>

        <!-- Income Card -->
        <div class="rounded-lg bg-white p-4 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-500">Nombre total de transaction</h3>
                <span class="rounded-full bg-green-100 p-2">📈</span>
            </div>
            <p class="mt-2 text-3xl font-semibold">{{ number_format($totalTransactions, 0, '', ',') }}</p>
        </div>

        <div class="rounded-lg bg-white p-4 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-500">Revenu Total</h3>
                <span class="rounded-full bg-red-100 p-2">📉</span>
            </div>
            <p class="mt-2 text-3xl font-semibold">${{ number_format($totalRevenue, 2, '.', ',') }}</p>

        </div>

        <div class="rounded-lg bg-white p-4 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-500">Nombre total d'abonnement</h3>
                <span class="rounded-full bg-red-100 p-2">👤</span>
            </div>
            <p class="mt-2 text-3xl font-semibold">{{ number_format($totalSubscriptions, 0, '', ',') }}</p>
        </div>

        <div class="rounded-lg bg-white p-4 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-500">Nombre total d'abonnes gratuits</h3>
                <span class="rounded-full bg-red-100 p-2">👤</span>
            </div>
            <p class="mt-2 text-3xl font-semibold">{{ number_format($activeSubscriptions, 0, '', ',') }}</p>
        </div>

        <div class="rounded-lg bg-white p-4 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-500">Revenu de ce moi</h3>
                <span class="rounded-full bg-red-100 p-2">📈</span>
            </div>
            <p class="mt-2 text-3xl font-semibold">${{ number_format($cuurentMonthRevenue, 0, '', ',') }}</p>
        </div>
    </div>

    <!-- Subscription Table -->
    <div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
        <h3 class="my-2 text-lg font-bold">Nouvelles inscriptions</h3>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Prenom & Nom
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Type d'abonnement
                    </th>

                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Debut
                    </th>

                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Fin
                    </th>

                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Status du paiement
                    </th>

                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Status
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- Transaction Row  -->
                @foreach ($latestSubscriptions as $subscription)
                    <tr>

                        <td class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600">
                            {{ $subscription->subscriber->firstName }} {{ $subscription->subscriber->lastName }}
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            <span class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700">
                                {{ $subscription->plan->name }}
                            </span>
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600">
                            {{ $subscription->startDate }}
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600">
                            {{ $subscription->endDate }}
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            <span class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-700">
                                {{ $subscription->paymentStatus }}
                            </span>
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            <span class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-700">
                                {{ $subscription->status }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
