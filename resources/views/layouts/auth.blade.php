<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="h-screen bg-gray-100 p-6"
        style="
            background: url('{{ asset('images/bg.jpg') }}');
            background-repeat: no-repeat;
            background-size: auto;
        ">

        <div class="h-full w-full">
            <div class="py-16">
                <div class="mx-auto flex max-w-sm overflow-hidden rounded-lg bg-white shadow-lg lg:max-w-4xl">
                    <div class="hidden bg-cover lg:block lg:w-1/2"
                        style="background-image: url('../images/login-bg.jpg')"></div>
                    <div class="w-full p-8 lg:w-1/2">
                        <h1 class="mb-6 text-center text-2xl font-bold text-blue-600">
                            FinanzApp
                        </h1>

                        @yield('auth-form')

                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
