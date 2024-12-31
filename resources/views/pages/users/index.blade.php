@extends('layouts.app')

@section('contents')
    <div class="mb-6 grid grid-cols-1 gap-4 lg:grid-cols-3">
        <!-- Balance Card -->
        <div class="rounded-lg bg-white p-4 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-500">Mon Solde</h3>
                <span class="rounded-full bg-yellow-100 p-2">💰</span>
            </div>
            <p class="mt-2 text-3xl font-semibold">${{ number_format($totalBalance, 2, '.', ',') }}</p>
        </div>

        <!-- Income Card -->
        <div class="rounded-lg bg-white p-4 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-500">Revenus de ce moi</h3>
                <span class="rounded-full bg-green-100 p-2">📈</span>
            </div>
            <p class="mt-2 text-3xl font-semibold">${{ number_format($currentMonthIncome, 2, '.', ',') }}
            </p>
        </div>

        <!-- Expenses Card -->
        <div class="rounded-lg bg-white p-4 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-500">Depenses de ce mois</h3>
                <span class="rounded-full bg-red-100 p-2">📉</span>
            </div>
            <p class="mt-2 text-3xl font-semibold">${{ number_format($currentMonthExpenses, 2, '.', ',') }}
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
        <!-- Main Content Left -->
        <div class="lg:col-span-2">
            <!-- Cash Flow Report -->
            <div class="mb-6 rounded-lg bg-white p-6 shadow">
                <h3 class="text-gray-700">Cash Flow Report</h3>
                <div class="mt-4">
                    <canvas id="cashFlowChart" class="w-full"></canvas>
                </div>
            </div>

            <!-- Transaction History -->
            <div class="overflow-x-auto rounded-lg bg-white p-6 shadow">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Historique de transactions
                    </h3>
                    <div>
                        <select class="rounded-lg border p-2">
                            <option>Mesuelles</option>
                            <option>Annuelles</option>
                        </select>
                    </div>
                </div>

                <table class="mt-4 w-full min-w-[600px]">
                    <thead>
                        <tr class="text-gray-500">
                            <th class="p-3 text-left">Nom</th>
                            <th class="p-3 text-left">Transaction ID</th>
                            <th class="p-3 text-left">Date</th>
                            <th class="p-3 text-left">Montant</th>
                            <th class="p-3 text-left">Type</th>
                            <th class="p-3 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr class="border-b">
                            <td class="flex items-center p-3">
                                <img src="https://via.placeholder.com/40" alt="Profile"
                                    class="mr-2 h-8 w-8 rounded-full" />
                                <span>Anastasia</span>
                            </td>
                            <td class="p-3">FVB-092412</td>
                            <td class="p-3">Sep 29, 2023</td>
                            <td class="p-3">$12,200</td>
                            <td class="p-3">Gain</td>
                            <td class="p-3">
                                <span class="rounded-full bg-green-100 p-2 text-green-500">● Succes</span>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="border-b">
                            <td class="flex items-center p-3">
                                <img src="https://via.placeholder.com/40" alt="Profile"
                                    class="mr-2 h-8 w-8 rounded-full" />
                                <span>Daniel</span>
                            </td>
                            <td class="p-3">DEW-076213</td>
                            <td class="p-3">Sep 16, 2023</td>
                            <td class="p-3">$6,640</td>
                            <td class="p-3">Depense</td>
                            <td class="p-3">
                                <span class="rounded-full bg-red-100 p-2 text-red-500">● En attente</span>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <td class="flex items-center p-3">
                                <img src="https://via.placeholder.com/40" alt="Profile"
                                    class="mr-2 h-8 w-8 rounded-full" />
                                <span>Monica</span>
                            </td>
                            <td class="p-3">KMN-072309</td>
                            <td class="p-3">Oct 23, 2023</td>
                            <td class="p-3">$23,450</td>
                            <td class="p-3">Depense</td>
                            <td class="p-3">
                                <span class="rounded-full bg-green-100 p-2 text-green-500">● Succes</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right Column (My Cards, Quick Transactions, Savings) -->
        <div class="space-y-4">
            <div class="my-cards-container rounded-lg bg-white p-6 shadow-md">
                <h2 class="mb-4 text-xl font-semibold">Mes Cartes</h2>
                <p class="mb-4 text-gray-600">Gerer vos cartes</p>
                <div class="card-wrapper">
                    <div class="card rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 p-4 shadow-lg">
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-semibold text-white">FinView Bank</span>
                            <div class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12h4m0 0h-4m4 0H9m0 0h4m4 0h-4m-4 0V7m0 5h8" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2 text-2xl text-white">
                            **** **** **** 7628
                        </div>
                        <div class="mt-4 flex justify-between">
                            <span>Titulaire</span>
                            <span>Date d'expiration</span>
                        </div>
                        <div class="flex justify-between text-white">
                            <span>Lee Seaba</span>
                            <span>08/24</span>
                        </div>
                    </div>
                    <!-- Ajoutez d'autres cartes de la même manière -->
                </div>
                <div class="add-card-btn mt-4">
                    <a href="./cards/edit-card.html"
                        class="w-full rounded-lg bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                        Ajouter une carte
                    </a>
                </div>
            </div>

            <!-- Quick Transactions -->
            <div class="rounded-lg bg-white p-4 shadow">
                <h3 class="text-gray-700">Transactions Rapide</h3>
                <div class="mt-4">
                    <a href="./transactions/edit-transaction.html"
                        class="w-full rounded-lg bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                        Ajouter une transaction
                    </a>
                </div>
            </div>

            <!-- Savings Section -->
            <div class="rounded-lg bg-white p-6 shadow">
                <h3 class="text-lg font-semibold text-gray-700">Poches</h3>

                <div class="mt-4">
                    <div class="flex items-center justify-between">
                        <span class="font-medium text-gray-700">Education</span>
                        <span class="text-sm text-gray-500">Objectif: $50,000</span>
                    </div>
                    <div class="mt-1 flex items-center justify-between">
                        <span class="text-lg font-semibold text-blue-500">$25,000</span>
                        <span class="text-sm text-gray-500">Virement Mensuels: $500</span>
                    </div>
                    <div class="mt-2 h-2 w-full rounded-full bg-gray-200">
                        <div class="h-2 rounded-full bg-blue-500" style="width: 50%"></div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="flex items-center justify-between">
                        <span class="font-medium text-gray-700">Voyage</span>
                        <span class="text-sm text-gray-500">Objectif: $40,000</span>
                    </div>
                    <div class="mt-1 flex items-center justify-between">
                        <span class="text-lg font-semibold text-purple-500">$5,000</span>
                        <span class="text-sm text-gray-500">Virement Mensuels: $100</span>
                    </div>
                    <div class="mt-2 h-2 w-full rounded-full bg-gray-200">
                        <div class="h-2 rounded-full bg-purple-500" style="width: 12.5%"></div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="flex items-center justify-between">
                        <span class="font-medium text-gray-700">Fonds d'urgence</span>
                        <span class="text-sm text-gray-500">Objectif: $35,000</span>
                    </div>
                    <div class="mt-1 flex items-center justify-between">
                        <span class="text-lg font-semibold text-red-500">$15,000</span>
                        <span class="text-sm text-gray-500">Virement Mensuels: $100</span>
                    </div>
                    <div class="mt-2 h-2 w-full rounded-full bg-gray-200">
                        <div class="h-2 rounded-full bg-red-500" style="width: 42.86%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Configuration du graphique de flux de trésorerie
        const ctx = document.getElementById('cashFlowChart').getContext('2d')
        const cashFlowChart = new Chart(ctx, {
            type: 'bar', // Type de graphique : barre
            data: {
                labels: {!! json_encode(array_keys($monthlyIncomes)) !!},
                datasets: [{
                        label: 'Revenus',
                        data: {!! json_encode(array_values($monthlyIncomes)) !!},
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                    },
                    {
                        label: 'Dépenses',
                        data: {!! json_encode(array_values($monthlyExpenses)) !!},
                        backgroundColor: 'rgba(255, 99, 132, 0.6)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
                responsive: true,
                maintainAspectRatio: false,
            },
        })
    </script>
@endsection
