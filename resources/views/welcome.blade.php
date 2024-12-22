<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <div class="">
            <div>
                <h2 class="text-3xl font-bold tracki text-center mt-12 sm:text-5xl">
                    Pricing
                </h2>
                <p class="max-w-3xl mx-auto mt-4 text-xl text-center">
                    Commencez avec notre forfait gratuit et passez à une version
                    supérieure lorsque vous êtes prêt.
                </p>
            </div>
            <div class="w-full flex items-center justify-center">
                <div
                class="mt-24 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8"
                >
                <div
                    class="relative p-8 border border-gray-200 rounded-2xl shadow-sm flex flex-col"
                >
                    <div class="flex-1">
                    <h3 class="text-xl font-semibold">Gratuit</h3>
                    <p class="mt-4 flex items-baseline">
                        <span class="text-5xl font-extrabold tracking-tight">$0</span
                        ><span class="ml-1 text-xl font-semibold">/mois</span>
                    </p>
                    <p class="mt-6">Vous voulez juste decouvrir</p>
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="flex-shrink-0 w-6 h-6 text-emerald-500"
                            aria-hidden="true"
                        >
                            <polyline points="20 6 9 17 4 12"></polyline></svg
                        ><span class="ml-3">3 Cartes</span>
                        </li>
                        <li class="flex">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="flex-shrink-0 w-6 h-6 text-emerald-500"
                            aria-hidden="true"
                        >
                            <polyline points="20 6 9 17 4 12"></polyline></svg
                        ><span class="ml-3">3 poches</span>
                        </li>
                        <li class="flex">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="flex-shrink-0 w-6 h-6 text-emerald-500"
                            aria-hidden="true"
                        >
                            <polyline points="20 6 9 17 4 12"></polyline></svg
                        ><span class="ml-3">6 transactions</span>
                        </li>
                    </ul>
                    </div>
                    <a
                    class="bg-emerald-50 text-emerald-700 hover:bg-emerald-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium"
                    href="{{ route('register') }}"
                    >Inscrivez-vous gratuitement</a
                    >
                </div>
                <div
                    class="relative p-8 border border-gray-200 rounded-2xl shadow-sm flex flex-col"
                >
                    <div class="flex-1">
                    <h3 class="text-xl font-semibold">Premium</h3>
                    <p
                        class="absolute top-0 py-1.5 px-4 bg-emerald-500 text-white rounded-full text-xs font-semibold uppercase tracking-wide transform -translate-y-1/2"
                    >
                        Le plus populaire
                    </p>
                    <p class="mt-4 flex items-baseline">
                        <span class="text-5xl font-extrabold tracking-tight">$12</span
                        ><span class="ml-1 text-xl font-semibold">/mois</span>
                    </p>
                    <p class="mt-6">Acces total</p>
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="flex-shrink-0 w-6 h-6 text-emerald-500"
                            aria-hidden="true"
                        >
                            <polyline points="20 6 9 17 4 12"></polyline></svg
                        ><span class="ml-3">Illimite</span>
                        </li>
                        <li class="flex">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="flex-shrink-0 w-6 h-6 text-emerald-500"
                            aria-hidden="true"
                        >
                            <polyline points="20 6 9 17 4 12"></polyline></svg
                        ><span class="ml-3">Illimite</span>
                        </li>
                        <li class="flex">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="flex-shrink-0 w-6 h-6 text-emerald-500"
                            aria-hidden="true"
                        >
                            <polyline points="20 6 9 17 4 12"></polyline></svg
                        ><span class="ml-3">Illimite</span>
                        </li>
                    </ul>
                    </div>
                    <a
                    class="bg-emerald-500 text-white hover:bg-emerald-600 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium"
                    href="{{ route('register') }}"
                    >S'abonner</a
                    >
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
