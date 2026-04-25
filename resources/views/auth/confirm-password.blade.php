@extends('layouts.auth')

@section('auth-form')
    <div class="mt-4 flex items-center justify-between">
        <span class="w-1/5 border-b lg:w-1/4"></span>
        <p>Cette zone de l'application est sécurisée. Veuillez confirmer votre mot de passe pour continuer.</p>
        <span class="w-1/5 border-b lg:w-1/4"></span>
    </div>
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mt-4">
            <label class="mb-2 block text-sm font-bold text-gray-700">Mot de passe</label>
            <input
                class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                type="password" name="password" required autocomplete="current-password" />
            @error('password')
                <p class="mt-2 text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-8">
            <button class="w-full rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                Confirmer
            </button>
        </div>
    </form>
@endsection
