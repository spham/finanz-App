@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div
        class="flex flex-col lg:flex-row justify-between items-center mb-6"
    >
        <h1 class="text-2xl font-bold">Gestion des Plans d'abonnement</h1>
        <button
        class="bg-gray-700 text-white font-bold py-2 px-4 rounded hover:bg-gray-600"
        >
        Annuler
        </button>
    </div>

    @session('error')
        <div class="w-full text-center p-3 bg-red-400 text-white">{{ session('error') }}</div>
    @endsession

    <!-- Subscription Table -->
    <div class="w-full">
        <div class="bg-white rounded-lg p-6">
            <h2 class="text-xl font-bold mb-4">{{ isset($plan) ? 'Modifier' : 'Ajouter' }} un Plan</h2>
            <form method="POST" action="{{ isset($plan) ? route('plan.update', $plan) : route('plan.store') }}">
                @csrf
                @if (isset($plan))
                    @method('PUT')
                @endif
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nom du plan</label>
                    <input
                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                    type="text"
                    name="name"
                    value="{{ old('name', isset($plan) ? $plan->name : '') }}"
                    />
                    @error('name')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    >Prix</label
                    >
                    <input
                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                    type="numeric"
                    min="0"
                    name="price"
                    value="{{ old('price', isset($plan) ? $plan->price : '') }}"
                    />
                    @error('price')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    >Duree</label
                    >
                    <select
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                        name="duration"
                    >
                        @foreach ($planDurations as $value => $duration)
                            <option @if (isset($plan)) @selected($plan->duration == $value) @endif value="{{ $value }}">{{ $duration }}</option>
                        @endforeach
                    </select>
                    @error('price')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    >Maximum de Cartes</label
                    >
                    <input
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                        type="number"
                        name="maxCards"
                        value="{{ old('maxCards', isset($plan) ? $plan->maxCards : '') }}"
                    />
                    @error('maxCards')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    >Maximum de Poches</label
                    >
                    <input
                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                    type="number"
                    name="maxPocket"
                    value="{{ old('maxPocket', isset($plan) ? $plan->maxPocket : '') }}"
                    />
                    @error('maxPocket')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    >Maximum de Transaction</label
                    >
                    <input
                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                    type="number"
                    name="maxTransaction"
                    value="{{ old('maxTransaction', isset($plan) ? $plan->maxTransaction : '') }}"
                    />
                    @error('maxTransaction')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-8 text-right">
                    <button
                    class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"
                    >
                    {{ isset($plan) ? 'Modifier' : 'Créer' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection