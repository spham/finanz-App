@extends('layouts.auth')

@section('auth-form')
    <div class="mt-4 text-sm text-gray-600">
        Merci pour votre inscription ! Avant de commencer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le
        lien que nous venons de vous envoyer ? Si vous n'avez pas reçu l'e-mail, nous vous en enverrons un nouveau avec
        plaisir.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mt-4 text-sm font-medium text-green-600">
            Un nouveau lien de vérification a été envoyé à l'adresse e-mail fournie lors de votre inscription.
        </div>
    @endif

    <div class="mt-6 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit"
                class="rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600">
                Renvoyer le lien
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-900">
                Se déconnecter
            </button>
        </form>
    </div>
@endsection
