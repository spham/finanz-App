@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Gestion des Abonements</h1>
    </div>

    <!-- Subscription Table -->
    <div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
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
                <!-- Transaction Row 1 -->
                @foreach ($subscriptions as $subscription)
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
                        <td class="flex items-center border-b border-gray-200 px-6 py-4 text-sm">
                            <a href="{{ route('admin.subscription.show', $subscription) }}"
                                class="rounded-full bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700">
                                👁️ Voir
                            </a>
                            {{-- si inactif debloquer sinon bloquer --}}
                            @if ($subscription->status == 'ACTIF')
                                <a href="{{ route('admin.subscription.disable', $subscription) }}"
                                    class="ml-2 rounded-full bg-red-200 px-2 py-1 text-xs font-semibold text-red-700">
                                    🚫 Bloquer
                                </a>
                            @else
                                <a href="{{ route('admin.subscription.enable', $subscription) }}"
                                    class="ml-2 rounded-full bg-green-200 px-2 py-1 text-xs font-semibold text-green-700">
                                    🟢 Debloquer
                                </a>
                            @endif

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
