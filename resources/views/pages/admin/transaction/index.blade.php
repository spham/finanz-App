@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Gestion des transaction</h1>
    </div>

    <!-- Subscription Table -->
    <div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">

        {{-- table --}}
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Date
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Prenom & Nom
                    </th>

                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Nom Transaction
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Type
                    </th>
                    <th
                        class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Montant
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
                            {{ $transaction->user->firstName }} {{ $transaction->user->lastName }}
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            <span class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700">
                                {{ $transaction->description }}
                            </span>
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            <span class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700">
                                {{ $transaction->type }}
                            </span>
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            ${{ $transaction->amount }}
                        </td>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
