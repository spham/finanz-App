@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div
        class="flex flex-col lg:flex-row justify-between items-center mb-6"
    >
        <h1 class="text-2xl font-bold">Gestion des Plans d'abonnement</h1>

        <a
        href="{{ route('plan.create') }}"
        class="rounded-full bg-gray-700 text-white font-bold py-2 px-4 hover:bg-gray-600"
        >
        Ajouter un plan
        </a>
    </div>

    @session('success')
        <div class="w-full text-center p-3 bg-green-400 text-white">{{ session('success') }}</div>
    @endsession

    <!-- Subscription Table -->
    <div class="bg-white shadow-md rounded-lg overflow-x-auto p-2">
        <table class="min-w-full bg-white">
        <thead>
            <tr>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Nom du plan
            </th>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Duree
            </th>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Nombre Cartes Autorise
            </th>

            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Nombre Poches Autorise
            </th>

            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Nombre Transactions Autorise
            </th>

            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Montant
            </th>

            <th
                  class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            ></th>
            </tr>
        </thead>
        <tbody>
            @if ($plans != null)
                @foreach ($plans as $plan)
                    <tr>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm">
                            <span
                            class="px-3 py-1 text-xs font-semibold text-blue-700 bg-blue-200 rounded-md"
                            >
                            {{ $plan->name }}
                            </span>
                        </td>

                        <td class="px-6 py-4 border-b border-gray-200 text-sm">
                            <span
                            class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-md"
                            >
                            {{ $plan->duration }}
                            </span>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm">
                            <span
                            class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-md"
                            >
                            {{ $plan->maxCards }}
                            </span>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm">
                            <span
                            class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-md"
                            >
                            {{ $plan->maxPocket }}
                            </span>
                        </td>

                        <td class="px-6 py-4 border-b border-gray-200 text-sm">
                            <span
                            class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-md"
                            >
                            {{ $plan->maxTransaction }}
                            </span>
                        </td>

                        <td class="px-6 py-4 border-b border-gray-200 text-sm">${{ $plan->price }}</td>

                        <td class="px-6 py-4 border-b border-gray-200 text-sm flex items-center">
                            <a href="{{ route('plan.edit', $plan) }}"
                                class="px-3 py-1 text-sm font-semibold text-green-700 bg-blue-200 rounded-full"
                            >
                                📝
                            </a>
                            <form method="POST" action="{{ route('plan.destroy', $plan) }}">
                                @csrf
                                @method('DELETE')

                                <button
                                    class="px-3 py-1 text-sm font-semibold text-green-700 bg-red-200 rounded-full" type="submit"
                                >
                                    🗑️
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        </table>
    </div>
@endsection