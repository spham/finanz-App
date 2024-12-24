@extends('layouts.app')

@section('contents')
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
        <!-- Balance Card -->
        <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Mon Solde</h3>
            <span class="bg-yellow-100 p-2 rounded-full">💰</span>
        </div>
        <p class="text-3xl font-semibold mt-2">786,351.623</p>
        <p class="text-green-500 text-sm">+12% comparee au mois dernier</p>
        </div>

        <!-- Income Card -->
        <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Revenus Mensuels</h3>
            <span class="bg-green-100 p-2 rounded-full">📈</span>
        </div>
        <p class="text-3xl font-semibold mt-2">49,768.920</p>
        <p class="text-green-500 text-sm">+12% comparee au mois dernier</p>
        </div>

        <!-- Expenses Card -->
        <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Depenses Mensuels</h3>
            <span class="bg-red-100 p-2 rounded-full">📉</span>
        </div>
        <p class="text-3xl font-semibold mt-2">24,679.852</p>
        <p class="text-red-500 text-sm">-12% comparee au mois dernier</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        <!-- Main Content Left -->
        <div class="lg:col-span-2">
        <!-- Cash Flow Report -->
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="text-gray-700">Cash Flow Report</h3>
            <div class="mt-4">
            <canvas id="cashFlowChart" class="w-full"></canvas>
            </div>
        </div>

        <!-- Transaction History -->
        <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
            <div class="flex justify-between items-center">
            <h3 class="text-gray-700 font-semibold text-lg">
                Historique de transactions
            </h3>
            <div>
                <select class="border rounded-lg p-2">
                <option>Mesuelles</option>
                <option>Annuelles</option>
                </select>
            </div>
            </div>

            <table class="w-full mt-4 min-w-[600px]">
            <thead>
                <tr class="text-gray-500">
                <th class="text-left p-3">Nom</th>
                <th class="text-left p-3">Transaction ID</th>
                <th class="text-left p-3">Date</th>
                <th class="text-left p-3">Montant</th>
                <th class="text-left p-3">Type</th>
                <th class="text-left p-3">Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr class="border-b">
                <td class="p-3 flex items-center">
                    <img
                    src="https://via.placeholder.com/40"
                    alt="Profile"
                    class="w-8 h-8 rounded-full mr-2"
                    />
                    <span>Anastasia</span>
                </td>
                <td class="p-3">FVB-092412</td>
                <td class="p-3">Sep 29, 2023</td>
                <td class="p-3">$12,200</td>
                <td class="p-3">Gain</td>
                <td class="p-3">
                    <span class="text-green-500 bg-green-100 p-2 rounded-full"
                    >● Succes</span
                    >
                </td>
                </tr>

                <!-- Row 2 -->
                <tr class="border-b">
                <td class="p-3 flex items-center">
                    <img
                    src="https://via.placeholder.com/40"
                    alt="Profile"
                    class="w-8 h-8 rounded-full mr-2"
                    />
                    <span>Daniel</span>
                </td>
                <td class="p-3">DEW-076213</td>
                <td class="p-3">Sep 16, 2023</td>
                <td class="p-3">$6,640</td>
                <td class="p-3">Depense</td>
                <td class="p-3">
                    <span class="text-red-500 bg-red-100 p-2 rounded-full"
                    >● En attente</span
                    >
                </td>
                </tr>

                <!-- Row 3 -->
                <tr>
                <td class="p-3 flex items-center">
                    <img
                    src="https://via.placeholder.com/40"
                    alt="Profile"
                    class="w-8 h-8 rounded-full mr-2"
                    />
                    <span>Monica</span>
                </td>
                <td class="p-3">KMN-072309</td>
                <td class="p-3">Oct 23, 2023</td>
                <td class="p-3">$23,450</td>
                <td class="p-3">Depense</td>
                <td class="p-3">
                    <span class="text-green-500 bg-green-100 p-2 rounded-full"
                    >● Succes</span
                    >
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>

        <!-- Right Column (My Cards, Quick Transactions, Savings) -->
        <div class="space-y-4">
        <div class="my-cards-container bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Mes Cartes</h2>
            <p class="text-gray-600 mb-4">Gerer vos cartes</p>
            <div class="card-wrapper">
            <div
                class="card bg-gradient-to-r from-blue-500 to-purple-500 p-4 rounded-lg shadow-lg"
            >
                <div class="flex justify-between items-center">
                <span class="text-white text-lg font-semibold"
                    >FinView Bank</span
                >
                <div class="text-white">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 12h4m0 0h-4m4 0H9m0 0h4m4 0h-4m-4 0V7m0 5h8"
                    />
                    </svg>
                </div>
                </div>
                <div class="text-white text-2xl mt-2">
                **** **** **** 7628
                </div>
                <div class="flex justify-between mt-4">
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
            <a
                href="./cards/edit-card.html"
                class="rounded-lg bg-gray-700 text-white font-bold py-2 px-4 w-full hover:bg-gray-600"
            >
                Ajouter une carte
            </a>
            </div>
        </div>

        <!-- Quick Transactions -->
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-gray-700">Transactions Rapide</h3>
            <div class="mt-4">
            <a
                href="./transactions/edit-transaction.html"
                class="rounded-lg bg-gray-700 text-white font-bold py-2 px-4 w-full hover:bg-gray-600"
            >
                Ajouter une transaction
            </a>
            </div>
        </div>

        <!-- Savings Section -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-gray-700 font-semibold text-lg">Poches</h3>

            <div class="mt-4">
            <div class="flex justify-between items-center">
                <span class="font-medium text-gray-700">Education</span>
                <span class="text-sm text-gray-500">Objectif: $50,000</span>
            </div>
            <div class="flex justify-between items-center mt-1">
                <span class="text-blue-500 text-lg font-semibold"
                >$25,000</span
                >
                <span class="text-sm text-gray-500"
                >Virement Mensuels: $500</span
                >
            </div>
            <div class="w-full bg-gray-200 h-2 mt-2 rounded-full">
                <div
                class="bg-blue-500 h-2 rounded-full"
                style="width: 50%"
                ></div>
            </div>
            </div>

            <div class="mt-4">
            <div class="flex justify-between items-center">
                <span class="font-medium text-gray-700">Voyage</span>
                <span class="text-sm text-gray-500">Objectif: $40,000</span>
            </div>
            <div class="flex justify-between items-center mt-1">
                <span class="text-purple-500 text-lg font-semibold"
                >$5,000</span
                >
                <span class="text-sm text-gray-500"
                >Virement Mensuels: $100</span
                >
            </div>
            <div class="w-full bg-gray-200 h-2 mt-2 rounded-full">
                <div
                class="bg-purple-500 h-2 rounded-full"
                style="width: 12.5%"
                ></div>
            </div>
            </div>

            <div class="mt-4">
            <div class="flex justify-between items-center">
                <span class="font-medium text-gray-700">Fonds d'urgence</span>
                <span class="text-sm text-gray-500">Objectif: $35,000</span>
            </div>
            <div class="flex justify-between items-center mt-1">
                <span class="text-red-500 text-lg font-semibold"
                >$15,000</span
                >
                <span class="text-sm text-gray-500"
                >Virement Mensuels: $100</span
                >
            </div>
            <div class="w-full bg-gray-200 h-2 mt-2 rounded-full">
                <div
                class="bg-red-500 h-2 rounded-full"
                style="width: 42.86%"
                ></div>
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
          labels: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec',
          ],
          datasets: [
            {
              label: 'Revenus',
              data: [
                5000, 7000, 8000, 5600, 9000, 10000, 7500, 8200, 9100, 9700,
                8800, 10500,
              ],
              backgroundColor: 'rgba(75, 192, 192, 0.6)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 1,
            },
            {
              label: 'Dépenses',
              data: [
                3000, 4500, 6000, 3500, 7000, 6500, 4000, 6000, 7000, 7800,
                6500, 8000,
              ],
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