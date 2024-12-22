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
    <body  class="bg-gray-100 h-screen p-6" 
        style="
            background: url('{{ asset('images/bg.jpg') }}');
            background-repeat: no-repeat;
            background-size: auto;
        ">

        <div class="w-full h-full">
            <div class="py-16">
                <div
                    class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl"
                >
                    <div
                        class="hidden lg:block lg:w-1/2 bg-cover"
                        style="background-image: url('../images/login-bg.jpg')"
                    ></div>
                    <div class="w-full p-8 lg:w-1/2">
                        <h1 class="text-2xl font-bold text-blue-600 mb-6 text-center">
                            FinanzApp
                        </h1>
                        
                        @yield('auth-form')
                        
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>