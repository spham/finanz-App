@extends('layouts.auth')

@section('auth-form')
    <div class="mt-4 flex items-center justify-between">
        <span class="border-b w-1/5 lg:w-1/4"></span>
        <p>Vous avez oublié votre mot de passe ? Aucun problème. Communiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.</p>
        <span class="border-b w-1/5 lg:w-1/4"></span>
    </div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mt-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Addresse Email</label>
            <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="email"
            name="email"
            required
            autofocus
            />
            @error('email')
                 <p class="text-red-500 mt-2">{{ $message }}</p>
            @endsession
        </div>

        <div class="mt-8">
            <button
            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"
            >
            Recevoir le lien
            </button>
        </div>
        <div class="mt-4 flex items-center justify-between">
            <span class="border-b w-1/5 md:w-1/4"></span>
            <a href="{{ route('login') }}" class="text-xs text-gray-500 uppercase">ou se connecter'</a>
            <span class="border-b w-1/5 md:w-1/4"></span>
        </div>
    </form>
@endsection
