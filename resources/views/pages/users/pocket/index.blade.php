@extends('layouts.app')

@section('contents')
    <div class="mb-6 flex flex-col items-center justify-between lg:flex-row">

        <div class="flex items-center">
            <h1 class="text-2xl font-bold">Gestion des Poches</h1>
            <p>Il vous reste : <span class="text-red-400">
                    {{-- {{ $activeSubscription->plan->maxCards - $currentUser->cards->count() }} --}}
                    {{ $remainingCards }}
                </span>
                poches possible
            </p>
        </div>

        @if ($remainingCards > 0)
            <a href="{{ route('pocket.create') }}"
                class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                Ajouter une Poche</span>
            </a>
        @else
            <buttons class="mt-4 rounded bg-red-300 px-4 py-2 font-bold text-red-700" disabled>
                Max de poches epuise il faut mettre a niveau
            </buttons>
            <a href="/" class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                Mettre a niveau</span>
            </a>
        @endif

    </div>

    @session('success')
        <div class="w-full bg-green-400 p-3 text-center text-white">{{ session('success') }}</div>
    @endsession

    <!-- Pockets Cards -->
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($pockets as $pocket)
            <div class="rounded-lg bg-white p-4 shadow-md">
                <div class="flex items-center justify-between">
                    <div class="flex flex-col">
                        <h2 class="mb-2 text-lg font-bold text-gray-800">{{ $pocket->name }}</h2>
                        <p class="mb-4 text-sm text-gray-500">Échéance : {{ $pocket->dueDate }}</p>
                    </div>
                    <span
                        class="text-bold {{ $pocket->isBlocked == 0 ? 'bg-red-400' : 'bg-green-400' }} rounded-md p-2 text-sm text-white">{{ $pocket->isBlocked == 0 ? 'Bloque' : 'Ouvert' }}</span>
                </div>
                <div class="z-10 pt-1">
                    <div class="mb-2 flex items-center justify-between">
                        <span class="inline-block text-xs font-semibold text-gray-600">
                            Objectif : ${{ $pocket->balanceGoal }}
                        </span>
                        <span class="inline-block text-xs font-semibold text-gray-600">
                            {{ $pocket->progression }}%
                        </span>
                    </div>
                    <div class="z-0 h-2 w-full rounded-full bg-gray-200">
                        <div class="h-2 rounded-full bg-blue-600" style="width: {{ $pocket->progression }}%"></div>
                    </div>
                </div>
                <div class="mt-4 flex justify-between">
                    <a href="{{ route('transaction.create') }}" class="rounded-md px-3 text-green-600 hover:bg-green-200">
                        Chager la Poche
                    </a>
                    <a href="{{ route('pocket.edit', $pocket) }}" class="rounded-md px-3 text-blue-600 hover:bg-blue-200">
                        Modifier
                    </a>
                    <form method="POST" action="{{ route('pocket.destroy', $pocket) }}">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-md px-3 text-red-600 hover:bg-red-200">
                            Supprimer
                        </button>
                    </form>

                </div>
            </div>
        @endforeach
    </div>


    <!-- Load Pocket Modal -->
    <div id="loadPocketModal" class="z-100 fixed inset-0 flex hidden items-center justify-center bg-black bg-opacity-50">
        <div class="w-1/3 rounded-lg bg-white p-6">
            <h2 class="mb-4 text-xl font-bold">Recharger une Poche</h2>

            <select class="mb-4 w-full rounded border border-gray-300 p-2">
                <option>Card A</option>
                <option>Card A</option>
                <option>Card C</option>
            </select>

            <input type="number" placeholder="Objectif" value="100" min="100"
                class="mb-4 w-full rounded border border-gray-300 p-2" />

            <button class="w-full rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                Charger
            </button>
            <button class="mt-2 w-full rounded bg-gray-300 p-2 text-gray-700" onclick="closeLoadPocketModal()">
                Annuler
            </button>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function openLoadPocketModal() {
            const modal = document.getElementById('loadPocketModal')
            modal.classList.remove('hidden')
        }

        function closeLoadPocketModal() {
            const modal = document.getElementById('loadPocketModal')
            modal.classList.add('hidden')
        }
    </script>
@endsection
