@extends('layouts.app')

@section('contents')
    <!-- Page Header -->
    <h1 class="mb-6 text-3xl font-bold text-blue-600">
        Statistiques Financières
    </h1>

    <!-- Graphs Grid -->
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <!-- Revenu vs Dépenses -->
        <div class="h-80 rounded-lg bg-white p-4 shadow">
            <h2 class="mb-4 text-xl font-semibold text-gray-700">
                Revenus vs Dépenses
            </h2>
            <canvas id="incomeExpenseChart" class="h-full"></canvas>
        </div>

        <!-- Catégories de Dépenses -->
        <div class="h-80 rounded-lg bg-white p-4 shadow">
            <h2 class="mb-4 text-xl font-semibold text-gray-700">
                Répartition des Dépenses
            </h2>
            <canvas id="expenseCategoryChart" class="h-full"></canvas>
        </div>

        <!-- Solde Mensuel -->
        <div class="h-80 rounded-lg bg-white p-4 shadow">
            <h2 class="mb-4 text-xl font-semibold text-gray-700">
                Évolution du Solde Mensuel
            </h2>
            <canvas id="monthlyBalanceChart" class="h-full"></canvas>
        </div>

        <!-- Poches Graphique -->
        <div class="h-80 rounded-lg bg-white p-4 shadow">
            <h2 class="mb-4 text-xl font-semibold text-gray-700">
                Progrès des Poches
            </h2>
            <canvas id="pocketProgressChart" class="h-full"></canvas>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Configuration du graphique Revenus vs Dépenses
        const incomeExpenseCtx = document
            .getElementById('incomeExpenseChart')
            .getContext('2d')
        new Chart(incomeExpenseCtx, {
            type: 'line',
            data: {
                labels: {!! json_encode(array_keys($monthlyIncomes)) !!},
                datasets: [{
                        label: 'Revenus',
                        data: {!! json_encode(array_values($monthlyIncomes)) !!},
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true,
                    },
                    {
                        label: 'Dépenses',
                        data: {!! json_encode(array_values($monthlyExpenses)) !!},
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: true,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            },
        })

        // Configuration du graphique Catégories de Dépenses
        const expenseCategoryCtx = document
            .getElementById('expenseCategoryChart')
            .getContext('2d')
        new Chart(expenseCategoryCtx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode(array_keys($currentMonthExpenses)) !!},
                datasets: [{
                    data: {!! json_encode(array_values($currentMonthExpenses)) !!},
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40',
                    ],
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            },
        })

        // Configuration du graphique Catégories de revenues
        const incomesCategoryCtx = document
            .getElementById('monthlyBalanceChart')
            .getContext('2d')
        new Chart(incomesCategoryCtx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode(array_keys($currentMonthIncomes)) !!},
                datasets: [{
                    data: {!! json_encode(array_values($currentMonthIncomes)) !!},
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40',
                    ],
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            },
        })

        // Configuration du graphique Progrès des Poches
        const pocketProgressCtx = document
            .getElementById('pocketProgressChart')
            .getContext('2d')
        new Chart(pocketProgressCtx, {
            type: 'bar',
            data: {
                labels: {!! json_encode(array_keys($pocketProgression)) !!},
                datasets: [{
                    label: 'Pourcentage de Réalisation',
                    data: {!! json_encode(array_values($pocketProgression)) !!},
                    backgroundColor: [
                        '#4CAF50', // Couleur pour Éducation
                        '#FFC107', // Couleur pour Voyage
                        '#F44336', // Couleur pour Fonds d'Urgence
                    ],
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        beginAtZero: true,
                    },
                    y: {
                        beginAtZero: true,
                        max: 100,
                        title: {
                            display: true,
                            text: 'Pourcentage (%)',
                        },
                    },
                },
            },
        })
    </script>
@endsection
