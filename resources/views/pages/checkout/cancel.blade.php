<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Finance App Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <link rel="stylesheet" href="./style.css" />
    </head>

    <body class="bg-gray-100">
        <div class="flex min-h-screen items-center justify-center bg-gradient-to-b from-gray-50 to-gray-100">
            <div
                class="mx-4 w-full max-w-2xl transform rounded-xl bg-white p-12 text-center shadow-lg transition-all hover:shadow-xl">
                <!-- Success Icon -->
                <div class="mx-auto mb-8 flex h-24 w-24 items-center justify-center rounded-full bg-red-100">
                    <svg class="h-12 w-12 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>

                <!-- Main Content -->
                <h1 class="mb-6 text-4xl font-extrabold text-red-600">
                    Paiement échoué!
                </h1>

                <p class="mb-8 text-xl text-gray-700">Reesayer a nouveau.</p>

                <!-- Back to Home Button -->
                <div class="mt-12">
                    <a href="http://127.0.0.1:8000"
                        class="inline-block rounded-lg bg-red-600 px-8 py-4 text-lg font-semibold text-white transition-colors duration-200 hover:bg-red-700">
                        Returner au formulaire
                    </a>
                </div>
            </div>
        </div>
    </body>

</html>
