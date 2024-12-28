@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Transactions</h1>
        <a href="{{ route('transaction.create') }}"
            class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
            Ajouter une transaction
        </a>
    </div>

    @session('success')
        <div class="w-full bg-green-400 p-3 text-center text-white">{{ session('success') }}</div>
    @endsession

    <!-- Transactions Table -->
    <div class="overflow-x-auto rounded-lg bg-white shadow-md">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Date
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Description
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Source
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Destination
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Monant
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600">
                            {{ $transaction->created_at }}
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600">
                            {{ $transaction->description }}
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            @if ($transaction->source)
                                <span class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700">
                                    {{ $transaction->source->name }}
                                </span>
                            @else
                                Pas de compte
                            @endif
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            @if ($transaction->destination)
                                <span class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700">
                                    {{ $transaction->destination->name }}
                                </span>
                            @endif
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600">
                            {{ $transaction->amount }}
                        </td>

                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            <button class="rounded-full bg-green-200 px-3 py-1 text-sm font-semibold text-green-700"
                                onclick="openViewPopup()">
                                👁️
                            </button>
                            <button class="rounded-full bg-blue-200 px-3 py-1 text-sm font-semibold text-green-700">
                                📝
                            </button>
                            <button class="rounded-full bg-red-200 px-3 py-1 text-sm font-semibold text-green-700">
                                🗑️
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
