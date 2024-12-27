@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Mes Cartes</h1>
        <a href="{{ route('card.create') }}"
            class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
            Ajouter une carte
        </a>
    </div>

    @session('success')
        <div class="w-full bg-green-400 p-3 text-center text-white">{{ session('success') }}</div>
    @endsession

    <!-- Cards Section -->
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($cards as $card)
            <div class="rounded-lg bg-white p-6 shadow-lg">
                <h2 class="mb-4 text-lg font-semibold">{{ $card->name }}</h2>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600">**** **** **** {{ substr($card->cardNumber, -4) }}</p>
                        <p class="text-sm text-gray-400">Expires:
                            {{ \Carbon\Carbon::parse($card->expiry_date)->format('m/y') }}</p>
                    </div>
                    <span class="text-bold text-lg">${{ $card->balance }}</span>
                </div>
                <div class="mt-4 flex justify-end space-x-2">
                    <a href="{{ route('card.edit', $card) }}" class="text-blue-600 hover:text-blue-700"
                        aria-label="Edit Card">
                        Modifier
                    </a>
                    <form method="POST" action="{{ route('card.destroy', $card) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="text-red-600 hover:text-red-700">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
