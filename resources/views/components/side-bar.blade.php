<!-- Sidebar -->
<aside id="sidebar"
    class="fixed left-0 top-0 flex h-full w-64 -translate-x-full transform flex-col bg-white p-6 shadow-md transition-transform duration-300 ease-in-out lg:translate-x-0">
    <button class="mb-4 text-gray-500 lg:hidden" onclick="toggleSidebar()" aria-label="Close Sidebar">
        <i class="fas fa-times"></i>
    </button>
    <h1 class="mb-6 text-2xl font-bold text-blue-600">FinanzApp</h1>
    <nav class="flex-grow space-y-4">
        <a href="{{ $currentUser->role == 'admin' ? route('admin.home') : route('users.home') }}"
            class="flex items-center space-x-2 text-gray-700">
            🏠
            <span>Dashboard</span>
        </a>

        @if ($currentUser->role == 'admin')
            <a href="{{ route('plan.index') }}" class="flex items-center space-x-2 text-gray-700">
                📝
                <span>Plans d'abonnement</span>
            </a>
            <a href="{{ route('admin.subscription') }}" class="flex items-center space-x-2 text-gray-700">
                🔗
                <span>Abonnements</span>
            </a>
            <a href="{{ route('admin.user') }}" class="flex items-center space-x-2 text-gray-700">
                👥
                <span>Gerer Utilisateurs</span>
            </a>
            <a href="{{ route('admin.transaction') }}" class="flex items-center space-x-2 text-gray-700">
                💱
                <span>Transactions</span>
            </a>
        @else
            <a href="{{ route('card.index') }}" class="flex items-center space-x-2 text-gray-700">
                💳
                <span>Mes Cartes</span>
            </a>
            <a href="{{ route('pocket.index') }}" class="flex items-center space-x-2 text-gray-700">
                💸
                <span>Gestion des Poches</span>
            </a>
            <a href="{{ route('transaction.index') }}" class="flex items-center space-x-2 text-gray-700">
                💱
                <span>Transactions</span>
            </a>
            <a href="{{ route('users.statistic') }}" class="flex items-center space-x-2 text-gray-700">
                📈
                <span>Statistics</span>
            </a>
            <a href="{{ route('users.subscriptions') }}" class="flex items-center space-x-2 text-gray-700">
                🔗
                <span>Mes Abonnements</span>
            </a>
        @endif
    </nav>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button class="mt-auto flex w-full items-center space-x-2 text-red-500">
            <span>Deconnexion</span>
        </button>
    </form>
</aside>
