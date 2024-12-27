@extends('layouts.app')

@section('contents')
    <div class="mb-6 flex flex-col items-center justify-between lg:flex-row">
        <h1 class="text-2xl font-bold">Gestion des Poches</h1>
        <button class="rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
            Annuler
        </button>
    </div>

    <div class="w-full">
        <div class="rounded-lg bg-white p-6">
            <h2 class="mb-4 text-xl font-bold">{{ isset($pocket) ? 'Modifier' : 'Ajouter' }} une Poche</h2>
            <form method="POST" action="{{ isset($pocket) ? route('pocket.update', $pocket) : route('pocket.store') }}">
                @csrf
                @if (isset($pocket))
                    @method('PUT')
                @endif

                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">
                        Nom de la poche
                    </label>
                    <input
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        type="text" name="name" value="{{ old('name', isset($pocket) ? $pocket->name : '') }}" />
                    @error('name')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">Echeance</label>
                    <input
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        type="date" name="dueDate"
                        value="{{ old('dueDate', isset($pocket) ? $pocket->dueDate : '') }}" />
                    @error('dueDate')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">Objectif min $500</label>
                    <input
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        type="number" name="balanceGoal"
                        value="{{ old('balanceGoal', isset($pocket) ? $pocket->balanceGoal : '') }}" />
                    @error('balanceGoal')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="mb-2 block text-sm font-bold text-gray-700">Statut</label>
                    <select
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                        id="blocked" name="isBlocked">
                        <option @if (isset($pocket)) @selected($pocket->isBlocked == 0) @endif value="0">Bloque
                        </option>
                        <option @if (isset($pocket)) @selected($pocket->isBlocked == 1) @endif value="1">Ouvert
                        </option>
                    </select>
                    @error('isBlocked')
                        <p class="mt-2 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-8 text-right">
                    <button class="w-full rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
                        type="submit">
                        {{ isset($pocket) ? 'Modifier' : 'Créer' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
