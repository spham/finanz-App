@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Gestion des transaction</h1>
    </div>

    <!-- Subscription Table -->
    <div class="bg-white shadow-md rounded-lg overflow-x-auto p-2">
        <table class="min-w-full bg-white">
        <thead>
            <tr>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Date
            </th>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Abonnement
            </th>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Prenom & Nom
            </th>

            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Nom Transaction
            </th>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Type
            </th>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Montant
            </th>

            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Status
            </th>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            ></th>
            </tr>
        </thead>
        <tbody>
            <!-- Transaction Row 1 -->
            <tr>
            <td
                class="px-6 py-4 border-b border-gray-200 text-sm text-gray-600"
            >
                03/15/2024
            </td>
            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                <span
                class="px-3 py-1 text-xs font-semibold text-blue-700 bg-blue-200 rounded-md"
                >
                Premium
                </span>
            </td>
            <td
                class="px-6 py-4 border-b border-gray-200 text-sm text-gray-600"
            >
                Diam Diallo
            </td>
            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                <span
                class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-md"
                >
                Achat Bike
                </span>
            </td>
            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                <span
                class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-md"
                >
                Revenu
                </span>
            </td>
            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                $2000
            </td>
            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                <span
                class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-full"
                >
                Complet
                </span>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
@endsection