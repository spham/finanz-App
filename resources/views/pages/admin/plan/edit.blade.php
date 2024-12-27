@extends('layouts.app')

@section('contents')
    <!-- Page Heading -->
    <div class="mb-6 flex flex-col items-center justify-between lg:flex-row">
        <h1 class="text-2xl font-bold">Gestion des Plans d'abonnement</h1>
        <button class="rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
            Annuler
        </button>
    </div>

    @session('error')
        <div class="w-full bg-red-400 p-3 text-center text-white">{{ session('error') }}</div>
    @endsession

    <!-- Subscription Table -->
    <div class="w-full">
        <div class="rounded-lg bg-white p-6">
            <h2 class="mb-4 text-xl font-bold">{{ isset($plan) ? 'Modifier' : 'Ajouter' }} un Plan</h2>
            <form method="POST" action="{{ isset($plan) ? route('plan.update', $plan) : route('plan.store') }}">
                @csrf
                @if (isset($plan))
                    @method('PUT')
                @endif
                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">Nom du plan</label>
                    <input
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        type="text" name="name" value="{{ old('name', isset($plan) ? $plan->name : '') }}" />
                    @error('name')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">Prix</label>
                    <input
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        type="numeric" min="0" name="price"
                        value="{{ old('price', isset($plan) ? $plan->price : '') }}" />
                    @error('price')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">Duree</label>
                    <select
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        name="duration">
                        @foreach ($planDurations as $value => $duration)
                            <option @if (isset($plan)) @selected($plan->duration == $value) @endif
                                value="{{ $value }}">{{ $duration }}</option>
                        @endforeach
                    </select>
                    @error('duration')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">Maximum de Cartes</label>
                    <input
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        type="number" name="maxCards"
                        value="{{ old('maxCards', isset($plan) ? $plan->maxCards : '') }}" />
                    @error('maxCards')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">Maximum de Poches</label>
                    <input
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        type="number" name="maxPocket"
                        value="{{ old('maxPocket', isset($plan) ? $plan->maxPocket : '') }}" />
                    @error('maxPocket')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">Maximum de Transaction</label>
                    <input
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        type="number" name="maxTransaction"
                        value="{{ old('maxTransaction', isset($plan) ? $plan->maxTransaction : '') }}" />
                    @error('maxTransaction')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-8 text-right">
                    <button class="w-full rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                        {{ isset($plan) ? 'Modifier' : 'Créer' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
