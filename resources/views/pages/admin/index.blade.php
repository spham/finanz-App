@extends('layouts.app')

@section('contents')
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
        <!-- Balance Card -->
        <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Nombre total d'utilisateurs</h3>
            <span class="bg-yellow-100 p-2 rounded-full">💰</span>
        </div>
        <p class="text-3xl font-semibold mt-2">12000</p>
        <!--<p class="text-green-500 text-sm">+12% comparee au mois dernier</p>-->
        </div>

        <!-- Income Card -->
        <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Nombre total de transaction</h3>
            <span class="bg-green-100 p-2 rounded-full">📈</span>
        </div>
        <p class="text-3xl font-semibold mt-2">49768</p>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Revenu Total</h3>
            <span class="bg-red-100 p-2 rounded-full">📉</span>
        </div>
        <p class="text-3xl font-semibold mt-2">24,679.852</p>
        <!--<p class="text-red-500 text-sm">-12% comparee au mois dernier</p>-->
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Nombre de souscriptions</h3>
            <span class="bg-red-100 p-2 rounded-full">👤</span>
        </div>
        <p class="text-3xl font-semibold mt-2">24679</p>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Nombre non souscrit</h3>
            <span class="bg-red-100 p-2 rounded-full">👤</span>
        </div>
        <p class="text-3xl font-semibold mt-2">24679</p>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Revenu par moi</h3>
            <span class="bg-red-100 p-2 rounded-full">📈</span>
        </div>
        <p class="text-3xl font-semibold mt-2">24,679.99</p>
        <p class="text-green-500 text-sm">+12% comparee au mois dernier</p>
        </div>
    </div>

    <!-- Subscription Table -->
    <div class="bg-white shadow-md rounded-lg overflow-x-auto p-2">
        <h3 class="text-lg font-bold my-2">Nouvelles inscriptions</h3>
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
                Prenom & Nom
            </th>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Souscription
            </th>
            <th
                class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Type de souscription
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
            <td
                class="px-6 py-4 border-b border-gray-200 text-sm text-gray-600"
            >
                Diam Diallo
            </td>
            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                <span
                class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-md"
                >
                Oui
                </span>
            </td>
            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                <span
                class="px-3 py-1 text-xs font-semibold text-blue-700 bg-blue-200 rounded-md"
                >
                Premium
                </span>
            </td>
            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                <span
                class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-full"
                >
                Complet
                </span>
            </td>
            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                <button
                class="px-3 py-1 text-sm font-semibold text-green-700 bg-green-200 rounded-full"
                onclick="openViewPopup()"
                >
                👁️
                </button>
                <button
                class="px-3 py-1 text-sm font-semibold text-green-700 bg-blue-200 rounded-full"
                >
                📝
                </button>
                <button
                class="px-3 py-1 text-sm font-semibold text-green-700 bg-red-200 rounded-full"
                >
                🗑️
                </button>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
@endsection