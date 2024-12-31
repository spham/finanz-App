@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div class="mb-6 flex items-center justify-between">
        <div class="flex items-center">
            <h1 class="mr-4 text-2xl font-bold">Mes Cartes</h1>
            <p>Il vous reste : <span class="text-red-400">
                    {{-- {{ $activeSubscription->plan->maxCards - $currentUser->cards->count() }} --}}
                    {{ $remainingCards }}
                </span>
                Cartes possible
            </p>
        </div>
        {{-- @if ($currentUser->cards->count() < $activeSubscription->plan->maxCards) --}}
        @if ($remainingCards > 0)
            <a href="{{ route('card.create') }}"
                class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                Ajouter une carte</span>
            </a>
        @else
            <buttons class="mt-4 rounded bg-red-300 px-4 py-2 font-bold text-red-700" disabled>
                Max de card epuise il faut mettre a niveau
            </buttons>
            <a href="/" class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                Mettre a niveau</span>
            </a>
        @endif

    </div>

    @session('success')
        <div class="w-full bg-green-400 p-3 text-center text-white">{{ session('success') }}</div>
    @endsession

    <!-- Cards Section -->
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($cards as $card)
            {{-- <div class="rounded-lg bg-white p-6 shadow-lg"> --}}
            <div class="card rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 p-4 text-white shadow-lg">
                <h2 class="mb-4 text-lg font-semibold">{{ $card->name }}</h2>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600">**** **** **** {{ substr($card->cardNumber, -4) }}</p>
                        <p class="text-sm text-gray-700">Expire:
                            {{ \Carbon\Carbon::parse($card->expiry_date)->format('m/y') }}</p>
                    </div>
                    <span class="text-bold text-lg">${{ number_format($card->balance, 2, '.', ',') }}</span>
                </div>
                <div class="mt-4 flex justify-end space-x-2">
                    <a href="{{ route('card.edit', $card) }}"
                        class="rounded border border-blue-600 px-2 py-1 text-blue-700 hover:text-blue-800"
                        aria-label="Edit Card">
                        Modifier
                    </a>
                    <form method="POST" action="{{ route('card.destroy', $card) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                            class="rounded border border-red-600 px-2 py-1 text-red-600 hover:text-red-700">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
