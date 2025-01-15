### Configuration vscode

```json
{
    "editor.wordWrap": "on",
    "editor.guides.bracketPairs": "active",
    "php.inlayHints.parameters.enabled": true,
     "editor.formatOnPaste": true,


    "editor.defaultFormatter": "esbenp.prettier-vscode",
      "[javascript]": {
        "editor.defaultFormatter": "esbenp.prettier-vscode"
      },
     "php.format.rules.arrayInitializersAlignKeyValuePairs": false,

    "[php]": {
        "editor.defaultFormatter": "DEVSENSE.phptools-vscode"
      },

    //laravel blade config
      "emmet.triggerExpansionOnTab": true, // enable tab to expanse emmet tags
      "blade.format.enable": true,
      "[blade]": {
        "editor.autoClosingBrackets": "always",
        "editor.defaultFormatter": "shufo.vscode-blade-formatter"
      },
      "bladeFormatter.format.indentInnerHtml": true,
      "bladeFormatter.format.sortTailwindcssClasses": true,
      "editor.formatOnSave": true

      "dotenv.enableAutocloaking": false,
}
```

### 1 - Code Pour la page d'acceuil

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Styles / Scripts -->
        <link rel="stylesheet" href="resources/css/app.css" />
        <script src="resources/js/app.js" defer></script>
    </head>

    <body>
        <section
            class="bg-[url('https://pagedone.io/asset/uploads/1691055810.png')] bg-cover bg-center pt-8 lg:pt-32"
        >
            <div
                class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8"
            >
                <div
                    class="mx-auto mb-4 flex w-60 items-center justify-between rounded-full border border-emerald-600 p-1"
                >
                    <span
                        class="font-inter ml-3 text-xs font-medium text-gray-900"
                        >Connectez vous a votre compte</span
                    >
                    <a
                        href="login"
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-emerald-600"
                    >
                        <svg
                            width="17"
                            height="16"
                            viewBox="0 0 17 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M2.83398 8.00019L12.9081 8.00019M9.75991 11.778L13.0925 8.44541C13.3023 8.23553 13.4073 8.13059 13.4073 8.00019C13.4073 7.86979 13.3023 7.76485 13.0925 7.55497L9.75991 4.22241"
                                stroke="white"
                                stroke-width="1.6"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </div>
                <h1
                    class="font-manrope mx-auto mb-5 max-w-2xl text-center text-4xl font-bold leading-[50px] text-gray-900 md:text-5xl"
                >
                    Contrôlez vos finances avec notre
                    <span class="text-emerald-600">outil intelligent</span>
                </h1>
                <p
                    class="mx-auto mb-9 max-w-sm text-center text-base font-normal leading-7 text-gray-500"
                >
                    Découvrez une meilleure façon de gérer facilement l’ensemble
                    de votre patrimoine.
                </p>
                <a
                    href="register"
                    class="shadow-xs mb-14 inline-flex w-full items-center justify-center rounded-full bg-emerald-500 px-7 py-3 text-center text-base font-semibold text-white transition-all duration-500 hover:bg-emerald-600 md:w-auto"
                >
                    Essayer gratuitement
                    <svg
                        class="ml-2"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M7.5 15L11.0858 11.4142C11.7525 10.7475 12.0858 10.4142 12.0858 10C12.0858 9.58579 11.7525 9.25245 11.0858 8.58579L7.5 5"
                            stroke="white"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>
                <a
                    href="javascript:;"
                    class="shadow-xs mb-14 inline-flex w-full items-center justify-center rounded-full bg-emerald-500 px-7 py-3 text-center text-base font-semibold text-white transition-all duration-500 hover:bg-emerald-600 md:w-auto"
                >
                    Voir le plan d'abonnement
                    <svg
                        class="ml-2"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M7.5 15L11.0858 11.4142C11.7525 10.7475 12.0858 10.4142 12.0858 10C12.0858 9.58579 11.7525 9.25245 11.0858 8.58579L7.5 5"
                            stroke="white"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>
                <div class="flex justify-center">
                    <img
                        src="https://pagedone.io/asset/uploads/1691054543.png"
                        alt="Dashboard image"
                    />
                </div>
            </div>
        </section>

        <div>
            <h2 class="tracki mt-12 text-center text-3xl font-bold sm:text-5xl">
                Tarifs
            </h2>
            <p class="mx-auto mt-4 max-w-3xl text-center text-xl">
                Commencez avec notre forfait gratuit et passez à une version
                supérieure lorsque vous êtes prêt.
            </p>
        </div>

        <div class="mt-3 flex w-full items-center justify-center">
            <span class="mr-3 text-gray-600">Mensuel</span>
            <label for="toggle" class="flex cursor-pointer items-center">
                <div class="relative">
                    <input
                        type="checkbox"
                        name="period"
                        id="toggle"
                        class="sr-only"
                        onchange="toggleDarkMode(this)"
                    />
                    <div
                        class="block h-8 w-14 rounded-full bg-gray-300 shadow-neumorphic-toggle-outset transition-all duration-300 ease-in-out"
                    ></div>
                    <div
                        class="dot absolute left-1 top-1 h-6 w-6 rounded-full bg-white transition-transform duration-300 ease-in-out"
                    ></div>
                </div>
            </label>
            <span class="ml-3 text-gray-600">Annuel</span>
        </div>

        <div class="flex w-full items-center justify-center">
            <div
                class="mt-24 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0"
            >
                <!-- Plans Placeholder -->
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const planLinks = document.querySelectorAll("a[data-period]");
                planLinks.forEach((link) => {
                    const url = new URL(link.href);
                    url.searchParams.set("period", "monthly");
                    link.href = url.toString();
                    link.setAttribute("data-period", "monthly");
                });
            });

            function toggleDarkMode(checkbox) {
                const toggleTrack = checkbox.nextElementSibling;
                const toggleDot = toggleTrack.nextElementSibling;

                if (checkbox.checked) {
                    toggleTrack.classList.remove(
                        "shadow-neumorphic-toggle-outset"
                    );
                    toggleTrack.classList.add(
                        "bg-green-500",
                        "shadow-neumorphic-toggle-inset"
                    );
                    toggleDot.classList.add("translate-x-6");
                } else {
                    toggleTrack.classList.remove(
                        "bg-green-500",
                        "shadow-neumorphic-toggle-inset"
                    );
                    toggleTrack.classList.add(
                        "shadow-neumorphic-toggle-outset"
                    );
                    toggleDot.classList.remove("translate-x-6");
                }

                const period = checkbox.checked ? "yearly" : "monthly";
                const planLinks = document.querySelectorAll("a[data-period]");
                planLinks.forEach((link) => {
                    const url = new URL(link.href);
                    url.searchParams.set("period", period);
                    link.href = url.toString();
                    link.setAttribute("data-period", period);
                });
            }
        </script>
    </body>
</html>
```

#### 1.1 - Checkout cancel

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Finance App Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        />
        <link rel="stylesheet" href="./style.css" />
    </head>

    <body class="bg-gray-100">
        <div
            class="flex min-h-screen items-center justify-center bg-gradient-to-b from-gray-50 to-gray-100"
        >
            <div
                class="mx-4 w-full max-w-2xl transform rounded-xl bg-white p-12 text-center shadow-lg transition-all hover:shadow-xl"
            >
                <!-- Success Icon -->
                <div
                    class="mx-auto mb-8 flex h-24 w-24 items-center justify-center rounded-full bg-red-100"
                >
                    <svg
                        class="h-12 w-12 text-red-600"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </div>

                <!-- Main Content -->
                <h1 class="mb-6 text-4xl font-extrabold text-red-600">
                    Paiement échoué!
                </h1>

                <p class="mb-8 text-xl text-gray-700">Reesayer a nouveau.</p>

                <!-- Back to Home Button -->
                <div class="mt-12">
                    <a
                        href="http://127.0.0.1:8000"
                        class="inline-block rounded-lg bg-red-600 px-8 py-4 text-lg font-semibold text-white transition-colors duration-200 hover:bg-red-700"
                    >
                        Returner au formulaire
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
```

#### 1.2 - Checkout success

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Finance App Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        />
        <link rel="stylesheet" href="./style.css" />
    </head>

    <body class="bg-gray-100">
        <div
            class="flex min-h-screen items-center justify-center bg-gradient-to-b from-gray-50 to-gray-100"
        >
            <div
                class="mx-4 w-full max-w-2xl transform rounded-xl bg-white p-12 text-center shadow-lg transition-all hover:shadow-xl"
            >
                <!-- Success Icon -->
                <div
                    class="mx-auto mb-8 flex h-24 w-24 items-center justify-center rounded-full bg-green-100"
                >
                    <svg
                        class="h-12 w-12 text-green-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 13l4 4L19 7"
                        ></path>
                    </svg>
                </div>

                <!-- Main Content -->
                <h1 class="mb-6 text-4xl font-extrabold text-green-600">
                    Paiement réussi ! {{ $status }}
                </h1>

                <p class="mb-8 text-xl text-gray-700">
                    Merci pour votre achat.
                </p>

                <!-- Back to Home Button -->
                <div class="mt-12">
                    <a
                        href="#"
                        class="inline-block rounded-lg bg-green-600 px-8 py-4 text-lg font-semibold text-white transition-colors duration-200 hover:bg-green-700"
                    >
                        Returner au tableau de bord
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
```

### 2 - Login Form

```html
<p class="text-xl text-gray-600 text-center">Bon retour!</p>
<a
    href="#"
    class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100"
>
    <div class="px-4 py-3">
        <svg class="h-6 w-6" viewBox="0 0 40 40">
            <path
                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                fill="#FFC107"
            />
            <path
                d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                fill="#FF3D00"
            />
            <path
                d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                fill="#4CAF50"
            />
            <path
                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                fill="#1976D2"
            />
        </svg>
    </div>
    <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">
        Se connecter avec google
    </h1>
</a>

<div class="mt-4 flex items-center justify-between">
    <span class="border-b w-1/5 lg:w-1/4"></span>
    <a href="#" class="text-xs text-center text-gray-500 uppercase"
        >ou avec email</a
    >
    <span class="border-b w-1/5 lg:w-1/4"></span>
</div>
<form>
    <div class="mt-4">
        <label class="block text-gray-700 text-sm font-bold mb-2"
            >Addresse Email</label
        >
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="email"
            name="email"
            required
        />
    </div>

    <div class="mt-4">
        <div class="flex justify-between">
            <label class="block text-gray-700 text-sm font-bold mb-2"
                >Mot de passe</label
            >
            <a href="#" class="text-xs text-gray-500">Mot de passe oublie?</a>
        </div>
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="password"
            name="password"
        />
    </div>

    <div class="mt-8">
        <button
            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"
        >
            Se connecter
        </button>
    </div>
    <div class="mt-4 flex items-center justify-between">
        <span class="border-b w-1/5 md:w-1/4"></span>
        <a href="#" class="text-xs text-gray-500 uppercase">ou s'inscrire'</a>
        <span class="border-b w-1/5 md:w-1/4"></span>
    </div>
</form>
```

### 3 - Register Form

```html
<p class="text-xl text-gray-600 text-center">Benvenu!</p>
<a
    href="{{ route('auth.google.redirect') }}"
    class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100"
>
    <div class="px-4 py-3">
        <svg class="h-6 w-6" viewBox="0 0 40 40">
            <path
                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                fill="#FFC107"
            />
            <path
                d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                fill="#FF3D00"
            />
            <path
                d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                fill="#4CAF50"
            />
            <path
                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                fill="#1976D2"
            />
        </svg>
    </div>
    <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">
        Se connecter avec google
    </h1>
</a>

<div class="mt-4 flex items-center justify-between">
    <span class="border-b w-1/5 lg:w-1/4"></span>
    <a href="#" class="text-xs text-center text-gray-500 uppercase"
        >ou avec email</a
    >
    <span class="border-b w-1/5 lg:w-1/4"></span>
</div>
<form>
    <div class="mt-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Prenom</label>
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="text"
            name="firstName"
            required
        />
    </div>

    <div class="mt-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="text"
            name="lastName"
            required
        />
    </div>

    <div class="mt-4">
        <label class="block text-gray-700 text-sm font-bold mb-2"
            >Addresse Email</label
        >
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="email"
            name="email"
            required
        />
    </div>

    <div class="mt-4">
        <div class="flex justify-between">
            <label class="block text-gray-700 text-sm font-bold mb-2"
                >Mot de passe</label
            >
        </div>
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="password"
            name="password"
        />
    </div>

    <div class="mt-4">
        <div class="flex justify-between">
            <label class="block text-gray-700 text-sm font-bold mb-2"
                >Confirmer votre mot de passe</label
            >
        </div>
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="password"
            name="password_confirmation"
        />
    </div>

    <div class="mt-8">
        <button
            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"
        >
            S'inscrire
        </button>
    </div>
    <div class="mt-4 flex items-center justify-between">
        <span class="border-b w-1/5 md:w-1/4"></span>
        <a href="#" class="text-xs text-gray-500 uppercase">ou se connecter</a>
        <span class="border-b w-1/5 md:w-1/4"></span>
    </div>
</form>
```

### 4 - Forget password

```html
<div class="mt-4 flex items-center justify-between">
    <span class="w-1/5 border-b lg:w-1/4"></span>
    <p>
        Vous avez oublié votre mot de passe ? Aucun problème. Communiquez-nous
        simplement votre adresse e-mail et nous vous enverrons par e-mail un
        lien de réinitialisation de mot de passe qui vous permettra d'en choisir
        un nouveau.
    </p>
    <span class="w-1/5 border-b lg:w-1/4"></span>
</div>
<form>
    <div class="mt-4">
        <label class="mb-2 block text-sm font-bold text-gray-700"
            >Addresse Email</label
        >
        <input
            class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
            type="email"
            name="email"
            required
            autofocus
        />
    </div>

    <div class="mt-8">
        <button
            class="w-full rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
        >
            Recevoir le lien
        </button>
    </div>
    <div class="mt-4 flex items-center justify-between">
        <span class="w-1/5 border-b md:w-1/4"></span>
        <a href="#" class="text-xs uppercase text-gray-500">ou se connecter'</a>
        <span class="w-1/5 border-b md:w-1/4"></span>
    </div>
</form>
```

### 5 - Reset Password

```html
<form>
    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}" />

    <div class="mt-4">
        <label class="block text-gray-700 text-sm font-bold mb-2"
            >Addresse Email</label
        >
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="email"
            name="email"
            value=""
            required
            autofocus
        />
    </div>

    <div class="mt-4">
        <label class="block text-gray-700 text-sm font-bold mb-2"
            >Nouveau Mot passe</label
        >
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="password"
            name="password"
            required
            autofocus
        />
    </div>

    <div class="mt-4">
        <label class="block text-gray-700 text-sm font-bold mb-2"
            >Confirmer votre mot passe</label
        >
        <input
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
            type="password"
            name="password_confirmation"
            required
            autofocus
        />
    </div>

    <div class="mt-8">
        <button
            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"
        >
            Reinitialiser le mot de passe
        </button>
    </div>
</form>
```

### 6 - Sidebar component

```html
<!-- Sidebar -->
<aside
    id="sidebar"
    class="fixed left-0 top-0 flex h-full w-64 -translate-x-full transform flex-col bg-white p-6 shadow-md transition-transform duration-300 ease-in-out lg:translate-x-0"
>
    <button
        class="mb-4 text-gray-500 lg:hidden"
        onclick="toggleSidebar()"
        aria-label="Close Sidebar"
    >
        <i class="fas fa-times"></i>
    </button>
    <h1 class="mb-6 text-2xl font-bold text-blue-600">FinanzApp</h1>
    <nav class="flex-grow space-y-4">
        <a href="#" class="flex items-center space-x-2 text-gray-700">
            🏠
            <span>Dashboard</span>
        </a>

        <a href="#" class="flex items-center space-x-2 text-gray-700">
            📝
            <span>Plans d'abonnement</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700">
            🔗
            <span>Abonnements</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700">
            👥
            <span>Gerer Utilisateurs</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700">
            💱
            <span>Transactions</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700">
            💳
            <span>Mes Cartes</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700">
            💸
            <span>Gestion des Poches</span>
        </a>

        <a href="#" class="flex items-center space-x-2 text-gray-700">
            📈
            <span>Statistics</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700">
            🔗
            <span>Mes Abonnements</span>
        </a>
    </nav>

    <form>
        <button class="mt-auto flex w-full items-center space-x-2 text-red-500">
            <span>Deconnexion</span>
        </button>
    </form>
</aside>
```

### 7 - Navbar component

```html
<button
    class="mb-4 rounded-lg bg-blue-600 p-2 text-white lg:hidden"
    onclick="toggleSidebar()"
    aria-label="Open Sidebar"
>
    <i class="fas fa-bars"></i>
</button>

<div class="mb-6 flex flex-col items-center justify-between lg:flex-row">
    <input
        type="text"
        placeholder="Rechercher"
        class="w-full rounded-lg border border-gray-300 p-2 lg:w-1/3"
    />
    <div class="flex items-center space-x-4">
        <a href="#" class="mt-4 flex items-center space-x-4 lg:mt-0">
            <div class="flex items-center space-x-2">
                <img
                    src="https://via.placeholder.com/150"
                    alt="Profile"
                    class="h-10 w-10 rounded-full"
                />
                <div>
                    <h3 class="text-gray-800">John Doe</h3>
                    <p class="text-sm text-gray-500">john@gmail.com</p>
                </div>
            </div>
        </a>

        <span class="rounded-lg bg-yellow-800 p-2 text-sm text-white"
            >Gratuit 🆓</span
        >
    </div>
</div>
```

### 8 - User Dashboard content

```html
<div class="mb-6 grid grid-cols-1 gap-4 lg:grid-cols-3">
    <!-- Balance Card -->
    <div class="rounded-lg bg-white p-4 shadow">
        <div class="flex items-center justify-between">
            <h3 class="text-gray-500">Mon Solde</h3>
            <span class="rounded-full bg-yellow-100 p-2">💰</span>
        </div>
        <p class="mt-2 text-3xl font-semibold">$12,345.67</p>
    </div>

    <!-- Income Card -->
    <div class="rounded-lg bg-white p-4 shadow">
        <div class="flex items-center justify-between">
            <h3 class="text-gray-500">Revenus de ce mois</h3>
            <span class="rounded-full bg-green-100 p-2">📈</span>
        </div>
        <p class="mt-2 text-3xl font-semibold">$3,210.89</p>
    </div>

    <!-- Expenses Card -->
    <div class="rounded-lg bg-white p-4 shadow">
        <div class="flex items-center justify-between">
            <h3 class="text-gray-500">Dépenses de ce mois</h3>
            <span class="rounded-full bg-red-100 p-2">📉</span>
        </div>
        <p class="mt-2 text-3xl font-semibold">$2,345.67</p>
    </div>
</div>

<div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
    <!-- Main Content Left -->
    <div class="lg:col-span-2">
        <!-- Cash Flow Report -->
        <div class="mb-6 rounded-lg bg-white p-6 shadow">
            <h3 class="text-gray-700">Rapport de flux de trésorerie</h3>
            <div class="mt-4">
                <canvas id="cashFlowChart" class="w-full"></canvas>
            </div>
        </div>

        <!-- Transaction History -->
        <div class="overflow-x-auto rounded-lg bg-white p-6 shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-700">
                    Historique des transactions
                </h3>
            </div>

            <table class="mt-4 w-full min-w-[600px]">
                <thead>
                    <tr>
                        <th
                            class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                        >
                            Date
                        </th>
                        <th
                            class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                        >
                            Type
                        </th>
                        <th
                            class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                        >
                            Source
                        </th>
                        <th
                            class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                        >
                            Destination
                        </th>
                        <th
                            class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                        >
                            Montant
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td
                            class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                        >
                            2025-01-01
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            <span
                                class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-blue-700"
                                >Dépôt</span
                            >
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            <span
                                class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                                >Compte Bancaire</span
                            >
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            Portefeuille
                        </td>
                        <td
                            class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                        >
                            $1,000.00
                        </td>
                    </tr>
                    <tr>
                        <td
                            class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                        >
                            2025-01-02
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            <span
                                class="rounded-md bg-red-200 px-3 py-1 text-xs font-semibold text-red-700"
                                >Retrait</span
                            >
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            Portefeuille
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-sm">
                            Épargne
                        </td>
                        <td
                            class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                        >
                            $500.00
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Right Column -->
    <div class="space-y-4">
        <!-- My Cards -->
        <div class="my-cards-container rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-xl font-semibold">Mes Cartes</h2>
            <p class="mb-4 text-gray-600">Gérez vos cartes</p>
            <div class="card-wrapper">
                <div
                    class="card rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 p-4 shadow-lg"
                >
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-semibold text-white"
                            >Ma Banque</span
                        >
                    </div>
                    <div class="mt-2 text-2xl text-white">
                        **** **** **** 1234
                    </div>
                    <div class="mt-4 flex justify-between text-white">
                        <span>Nom du Titulaire</span>
                        <span>12/25</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("-translate-x-full");
    }

    // Configuration du graphique de flux de trésorerie
    const ctx = document.getElementById("cashFlowChart").getContext("2d");
    const cashFlowChart = new Chart(ctx, {
        type: "bar", // Type de graphique : barre
        data: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            datasets: [
                {
                    label: "Revenus",
                    data: [
                        5000, 7000, 8000, 5600, 9000, 10000, 7500, 8200, 9100,
                        9700, 8800, 10500,
                    ],
                    backgroundColor: "rgba(75, 192, 192, 0.6)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 1,
                },
                {
                    label: "Dépenses",
                    data: [
                        3000, 4500, 6000, 3500, 7000, 6500, 4000, 6000, 7000,
                        7800, 6500, 8000,
                    ],
                    backgroundColor: "rgba(255, 99, 132, 0.6)",
                    borderColor: "rgba(255, 99, 132, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
            responsive: true,
            maintainAspectRatio: false,
        },
    });
</script>
```

### 9 - Admin Dashboard content

```html
<div class="mb-6 grid grid-cols-1 gap-4 lg:grid-cols-3">
    <!-- Balance Card -->
    <div class="rounded-lg bg-white p-4 shadow">
        <div class="flex items-center justify-between">
            <h3 class="text-gray-500">Nombre total d'utilisateurs</h3>
            <span class="rounded-full bg-yellow-100 p-2">💰</span>
        </div>
        <p class="mt-2 text-3xl font-semibold">25,000</p>
    </div>

    <!-- Income Card -->
    <div class="rounded-lg bg-white p-4 shadow">
        <div class="flex items-center justify-between">
            <h3 class="text-gray-500">Nombre total de transactions</h3>
            <span class="rounded-full bg-green-100 p-2">📈</span>
        </div>
        <p class="mt-2 text-3xl font-semibold">12,345</p>
    </div>

    <div class="rounded-lg bg-white p-4 shadow">
        <div class="flex items-center justify-between">
            <h3 class="text-gray-500">Revenu Total</h3>
            <span class="rounded-full bg-red-100 p-2">📉</span>
        </div>
        <p class="mt-2 text-3xl font-semibold">$125,345.67</p>
    </div>

    <div class="rounded-lg bg-white p-4 shadow">
        <div class="flex items-center justify-between">
            <h3 class="text-gray-500">Nombre total d'abonnements</h3>
            <span class="rounded-full bg-red-100 p-2">👤</span>
        </div>
        <p class="mt-2 text-3xl font-semibold">8,765</p>
    </div>

    <div class="rounded-lg bg-white p-4 shadow">
        <div class="flex items-center justify-between">
            <h3 class="text-gray-500">Nombre total d'abonnés gratuits</h3>
            <span class="rounded-full bg-red-100 p-2">👤</span>
        </div>
        <p class="mt-2 text-3xl font-semibold">4,321</p>
    </div>

    <div class="rounded-lg bg-white p-4 shadow">
        <div class="flex items-center justify-between">
            <h3 class="text-gray-500">Revenu de ce mois</h3>
            <span class="rounded-full bg-red-100 p-2">📈</span>
        </div>
        <p class="mt-2 text-3xl font-semibold">$15,678</p>
    </div>
</div>

<!-- Subscription Table -->
<div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
    <h3 class="my-2 text-lg font-bold">Nouvelles inscriptions</h3>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Prenom & Nom
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Type d'abonnement
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Debut
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Fin
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Status du paiement
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    Jean Dupont
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700"
                        >Premium</span
                    >
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    2025-01-01
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    2025-12-31
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                        >Payé</span
                    >
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                        >Actif</span
                    >
                </td>
            </tr>
        </tbody>
    </table>
</div>
```

#### 09 - User profile

```html
<!-- Page Header -->
<h1 class="text-3xl font-bold mb-6">Profil Utilisateur</h1>

<!-- Message de Statut -->
<span
    class="p-3 w-full justify-center bg-green-400 text-white rounded-md"
    id="status-message"
></span>

<!-- Profile Section -->
<div class="bg-white p-6 rounded-lg shadow-lg">
    <!-- Informations Utilisateur -->
    <form
        method="POST"
        action="profile-update-url"
        enctype="multipart/form-data"
    >
        <input type="hidden" name="_csrf" value="csrf-token-here" />
        <input type="hidden" name="_method" value="PATCH" />

        <!-- Photo de Profil -->
        <div class="flex flex-col items-center mb-6">
            <div class="relative w-32 h-32">
                <img
                    id="profileImage"
                    src="user-image-url-or-placeholder"
                    alt="Photo de Profil"
                    class="rounded-full w-full h-full object-cover"
                />
                <label
                    for="uploadPhoto"
                    class="absolute bottom-0 right-0 bg-blue-600 p-2 rounded-full cursor-pointer text-white"
                >
                    <i class="fas fa-camera"></i>
                </label>
                <input
                    type="file"
                    id="uploadPhoto"
                    accept="image/*"
                    class="hidden"
                    onchange="previewPhoto(event)"
                    name="image"
                />
            </div>
            <p class="text-red-500 mt-2" id="image-error-message"></p>
        </div>

        <!-- Form Fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2"
                    >Prenom</label
                >
                <input
                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                    type="text"
                    name="firstName"
                    value="user-first-name"
                />
                <p class="text-red-500 mt-2" id="first-name-error"></p>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2"
                    >Nom</label
                >
                <input
                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                    type="text"
                    name="lastName"
                    value="user-last-name"
                />
                <p class="text-red-500 mt-2" id="last-name-error"></p>
            </div>
        </div>

        <div class="mt-4">
            <label class="block text-gray-700 text-sm font-bold mb-2"
                >Email</label
            >
            <input
                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                type="email"
                name="email"
                value="user-email"
            />
            <p class="text-red-500 mt-2" id="email-error"></p>
        </div>

        <!-- Bouton Enregistrer les Modifications -->
        <div class="mt-8 text-right">
            <button
                type="submit"
                class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"
            >
                Enregistrer les Modifications
            </button>
        </div>
    </form>

    <!-- Changer de Mot de Passe -->
    <form method="POST" action="#">
        <!-- Modification de Mot de Passe -->
        <div class="mt-6 border-t pt-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">
                Modifier le Mot de Passe
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                        >Mot de passe actuel</label
                    >
                    <input
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                        type="password"
                        name="current_password"
                    />
                    <p
                        class="text-red-500 mt-2"
                        id="current-password-error"
                    ></p>
                </div>

                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                        >Nouveau mot de passe</label
                    >
                    <input
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                        type="password"
                        name="password"
                    />
                    <p class="text-red-500 mt-2" id="password-error"></p>
                </div>

                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                        >Confirmer le nouveau mot de passe</label
                    >
                    <input
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                        type="password"
                        name="password_confirmation"
                    />
                    <p
                        class="text-red-500 mt-2"
                        id="password-confirmation-error"
                    ></p>
                </div>
            </div>
        </div>

        <!-- Bouton Modifier le Mot de Passe -->
        <div class="mt-8 text-right">
            <button
                type="submit"
                class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"
            >
                Modifier le mot de passe
            </button>
        </div>
    </form>
</div>

<script>
    function previewPhoto(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const profileImage = document.getElementById("profileImage");
            profileImage.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
```

### 10 - Admib Plans pages

```html
<!-- Page Heading -->
<div class="mb-6 flex flex-col items-center justify-between lg:flex-row">
    <h1 class="text-2xl font-bold">Gestion des Plans d'abonnement</h1>

    <a
        href="#"
        class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
    >
        Ajouter un plan
    </a>
</div>

<!-- Message de succès -->
<div class="w-full bg-green-400 p-3 text-center text-white">
    Plan ajouté avec succès !
</div>

<!-- Subscription Table -->
<div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Nom du plan
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Durée
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-2 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Nombre Cartes Autorisées
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-2 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Nombre Poches Autorisées
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-2 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Nombre Transactions Autorisées
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Montant
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700"
                    >
                        Plan Premium
                    </span>
                </td>
                <td class="border-b border-gray-200 px-4 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        1 an
                    </span>
                </td>
                <td class="border-b border-gray-200 px-2 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        5
                    </span>
                </td>
                <td class="border-b border-gray-200 px-2 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        10
                    </span>
                </td>
                <td class="border-b border-gray-200 px-3 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        100
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    $100.00
                </td>
                <td
                    class="flex items-center border-b border-gray-200 px-6 py-4 text-sm"
                >
                    <a
                        href="#"
                        class="rounded-full bg-blue-200 px-3 py-1 text-sm font-semibold text-green-700"
                    >
                        📝
                    </a>
                    <form method="POST" action="#">
                        <button
                            class="rounded-full bg-red-200 px-3 py-1 text-sm font-semibold text-green-700"
                            type="submit"
                        >
                            🗑️
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
```

### 11 - Admin Plan form

```html
<!-- Page Heading -->
<div class="mb-6 flex flex-col items-center justify-between lg:flex-row">
    <h1 class="text-2xl font-bold">Gestion des Plans d'abonnement</h1>
    <button
        class="rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
    >
        Annuler
    </button>
</div>

<!-- Message d'erreur -->
<div class="w-full bg-red-400 p-3 text-center text-white">
    Erreur : Champ manquant !
</div>

<!-- Subscription Form -->
<div class="w-full">
    <div class="rounded-lg bg-white p-6">
        <h2 class="mb-4 text-xl font-bold">Ajouter un Plan</h2>
        <form method="POST" action="#">
            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Nom du plan</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="text"
                    name="name"
                    placeholder="Nom du plan"
                />
                <p class="mt-2 text-red-500">Ce champ est requis.</p>
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Prix</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="number"
                    min="0"
                    name="price"
                    placeholder="0.00"
                />
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Durée</label
                >
                <select
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    name="duration"
                >
                    <option value="1">1 mois</option>
                    <option value="3">3 mois</option>
                    <option value="12">1 an</option>
                </select>
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Maximum de Cartes</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="number"
                    name="maxCards"
                    placeholder="Nombre maximal de cartes"
                />
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Maximum de Poches</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="number"
                    name="maxPocket"
                    placeholder="Nombre maximal de poches"
                />
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Maximum de Transactions</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="number"
                    name="maxTransaction"
                    placeholder="Nombre maximal de transactions"
                />
            </div>

            <div class="mt-8 text-right">
                <button
                    class="w-full rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
                >
                    Créer
                </button>
            </div>
        </form>
    </div>
</div>
```

### 12 - Admin Gestion abonnement : Accueil

```html
<!-- Page Heading -->
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold">Gestion des Abonnements</h1>
</div>

<!-- Subscription Table -->
<div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Prénom & Nom
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Type d'abonnement
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Début
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Fin
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Statut du paiement
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Statut
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                ></th>
            </tr>
        </thead>
        <tbody>
            <!-- Exemple de ligne de données -->
            <tr>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    Jean Dupont
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700"
                        >Premium</span
                    >
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    01/01/2025
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    01/01/2026
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                        >Payé</span
                    >
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                        >Actif</span
                    >
                </td>
                <td
                    class="flex items-center border-b border-gray-200 px-6 py-4 text-sm"
                >
                    <a
                        href="#"
                        class="rounded-full bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700"
                        >👁️ Voir</a
                    >
                    <a
                        href="#"
                        class="ml-2 rounded-full bg-red-200 px-2 py-1 text-xs font-semibold text-red-700"
                        >🚫 Bloquer</a
                    >
                </td>
            </tr>
        </tbody>
    </table>
</div>
```

### 13 - Admin Gestion abonnement : Show

```html
<!-- Page Heading -->
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold">Détails de l'abonnement</h1>
</div>

<div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
    <div class="flex flex-col">
        <div class="flex flex-row justify-between">
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <span class="font-semibold">Prénom & Nom:</span>
                    <span class="ml-2">Jean Dupont</span>
                </div>
                <div class="flex flex-row">
                    <span class="font-semibold">Type d'abonnement:</span>
                    <span class="ml-2">Premium</span>
                </div>
                <div class="flex flex-row">
                    <span class="font-semibold">Début:</span>
                    <span class="ml-2">2025-01-01</span>
                </div>
                <div class="flex flex-row">
                    <span class="font-semibold">Fin:</span>
                    <span class="ml-2">2025-12-31</span>
                </div>
                <div class="flex flex-row">
                    <span class="font-semibold">Statut du paiement:</span>
                    <span class="ml-2">Payé</span>
                </div>
                <div class="flex flex-row">
                    <span class="font-semibold">Statut:</span>
                    <span class="ml-2">Actif</span>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <span class="font-semibold"
                        >Nombre de cartes ajoutées:</span
                    >
                    <span class="ml-2">10</span>
                </div>
                <div class="flex flex-row">
                    <span class="font-semibold">Nombre de poches créées:</span>
                    <span class="ml-2">5</span>
                </div>
                <div class="flex flex-row">
                    <span class="font-semibold"
                        >Nombre de transactions effectuées:</span
                    >
                    <span class="ml-2">20</span>
                </div>
                <div class="flex flex-row">
                    <span class="font-semibold">Montant:</span>
                    <span class="ml-2">1000 €</span>
                </div>
            </div>
        </div>
    </div>
</div>
```

### 14 - Transaction page

```html
<!-- Page Heading -->
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold">Gestion des transactions</h1>
</div>

<div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Date
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Prénom & Nom
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Nom Transaction
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Type
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Montant
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    2025-01-05
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    Alice Martin
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        Paiement abonnement
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        Crédit
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">$50</td>
            </tr>
            <tr>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    2025-01-04
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    Bob Dupont
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        Achat de services
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        Débit
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">$30</td>
            </tr>
        </tbody>
    </table>
</div>
```

### 15 - Admin Gestion users

```html
<!-- Page Heading -->
<div class="mb-6 flex flex-col items-center justify-between lg:flex-row">
    <h1 class="text-2xl font-bold">Gestion des utilisateurs</h1>
</div>

<div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Date
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Prénom & Nom
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Abonnement
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Statut d'abonnement
                </th>
            </tr>
        </thead>
        <tbody>
            <!-- Transaction Row 1 -->
            <tr>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    2025-01-05
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    Alice Martin
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        Premium
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700"
                    >
                        Actif
                    </span>
                </td>
            </tr>
            <!-- Transaction Row 2 -->
            <tr>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    2025-01-03
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    Bob Dupont
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        Standard
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700"
                    >
                        Inactif
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
```

### 16 - User Gestion Card : Index

```html
<!-- Page Heading -->
<div class="mb-6 flex items-center justify-between">
    <div class="flex items-center">
        <h1 class="mr-4 text-2xl font-bold">Mes Cartes</h1>
        <p>
            Il vous reste : <span class="text-red-400">3</span> Cartes possible
        </p>
    </div>
    <!-- Condition: Si le nombre de cartes restantes est supérieur à 0 -->
    <a
        href="/card/create"
        class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
    >
        Ajouter une carte
    </a>
    <!-- Sinon -->
    <buttons
        class="mt-4 rounded bg-red-300 px-4 py-2 font-bold text-red-700"
        disabled
    >
        Max de carte épuisé, il faut mettre à niveau
    </buttons>
    <a
        href="/"
        class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
    >
        Mettre à niveau
    </a>
</div>

<!-- Message de succès -->
<div class="w-full bg-green-400 p-3 text-center text-white">
    Carte ajoutée avec succès !
</div>

<!-- Cards Section -->
<div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
    <!-- Card 1 -->
    <div
        class="card rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 p-4 text-white shadow-lg"
    >
        <h2 class="mb-4 text-lg font-semibold">Carte Visa</h2>
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600">**** **** **** 1234</p>
                <p class="text-sm text-gray-700">Expire: 12/25</p>
            </div>
            <span class="text-bold text-lg">$1,200.00</span>
        </div>
        <div class="mt-4 flex justify-end space-x-2">
            <a
                href="/card/1/edit"
                class="rounded border border-blue-600 px-2 py-1 text-blue-700 hover:text-blue-800"
                aria-label="Edit Card"
            >
                Modifier
            </a>
            <form method="POST" action="/card/1/delete">
                <button
                    type="submit"
                    class="rounded border border-red-600 px-2 py-1 text-red-600 hover:text-red-700"
                >
                    Supprimer
                </button>
            </form>
        </div>
    </div>
    <!-- Card 2 -->
    <div
        class="card rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 p-4 text-white shadow-lg"
    >
        <h2 class="mb-4 text-lg font-semibold">Carte MasterCard</h2>
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600">**** **** **** 5678</p>
                <p class="text-sm text-gray-700">Expire: 08/26</p>
            </div>
            <span class="text-bold text-lg">$850.50</span>
        </div>
        <div class="mt-4 flex justify-end space-x-2">
            <a
                href="/card/2/edit"
                class="rounded border border-blue-600 px-2 py-1 text-blue-700 hover:text-blue-800"
                aria-label="Edit Card"
            >
                Modifier
            </a>
            <form method="POST" action="/card/2/delete">
                <button
                    type="submit"
                    class="rounded border border-red-600 px-2 py-1 text-red-600 hover:text-red-700"
                >
                    Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
```

### 17 - User Gestion Card : Form

```html
<!-- Page Heading -->
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold">Gestion des cartes</h1>
    <a
        href="./edit-card.html"
        class="rounded-md bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700"
    >
        Annuler
    </a>
</div>

<div class="w-full">
    <div class="rounded-lg bg-white p-6 shadow-lg">
        <h2 class="mb-4 text-lg font-semibold">Ajouter une carte bancaire</h2>
        <form id="cardForm" method="POST" action="/card/store">
            <!-- CSRF Token -->
            <input type="hidden" name="_token" value="csrf_token_placeholder" />

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Nom sur la carte</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="text"
                    name="name"
                    value="John Doe"
                />
                <p class="mt-2 text-red-500">Nom invalide</p>
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Type</label
                >
                <select
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    name="type"
                >
                    <option value="Visa">Visa</option>
                    <option value="MasterCard" selected>MasterCard</option>
                    <option value="Amex">Amex</option>
                </select>
                <p class="mt-2 text-red-500">Type invalide</p>
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Numéro de la carte</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="number"
                    name="cardNumber"
                    value="1234567890123456"
                />
                <p class="mt-2 text-red-500">Numéro invalide</p>
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Date d'expiration</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="date"
                    name="expiry_date"
                    value="2025-12-31"
                />
                <p class="mt-2 text-red-500">Date invalide</p>
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >CVV</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="number"
                    name="cvv"
                    value="123"
                />
                <p class="mt-2 text-red-500">CVV invalide</p>
            </div>

            <div class="mt-8 text-right">
                <button
                    class="w-full rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
                >
                    Créer
                </button>
            </div>
        </form>
    </div>
</div>
```

### 18 - User Pocket : index

```html
<!-- Page Heading -->
<div class="mb-6 flex flex-col items-center justify-between lg:flex-row">
    <div class="flex items-center">
        <h1 class="text-2xl font-bold">Gestion des Poches</h1>
        <p>
            Il vous reste : <span class="text-red-400">3</span> poches possibles
        </p>
    </div>

    <a
        href="/pocket/create"
        class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
    >
        Ajouter une Poche
    </a>
</div>

<!-- Success Message -->
<div class="w-full bg-green-400 p-3 text-center text-white">
    Poche ajoutée avec succès !
</div>

<!-- Pockets Cards -->
<div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
    <!-- Example Pocket -->
    <div class="rounded-lg bg-white p-4 shadow-md">
        <div class="flex items-center justify-between">
            <div class="flex flex-col">
                <h2 class="mb-2 text-lg font-bold text-gray-800">
                    Épargne Vacances
                </h2>
                <p class="mb-4 text-sm text-gray-500">Échéance : 2025-12-31</p>
            </div>
            <span
                class="text-bold bg-green-400 rounded-md p-2 text-sm text-white"
                >Ouvert</span
            >
        </div>
        <div class="z-10 pt-1">
            <div class="mb-2 flex items-center justify-between">
                <span class="inline-block text-xs font-semibold text-gray-600">
                    Objectif : $500
                </span>
                <span class="inline-block text-xs font-semibold text-gray-600"
                    >75%</span
                >
            </div>
            <div class="z-0 h-2 w-full rounded-full bg-gray-200">
                <div
                    class="h-2 rounded-full bg-blue-600"
                    style="width: 75%"
                ></div>
            </div>
        </div>
        <div class="mt-4 flex justify-between">
            <a
                href="/transaction/create"
                class="rounded-md px-3 text-green-600 hover:bg-green-200"
            >
                Charger la Poche
            </a>
            <a
                href="/pocket/edit/1"
                class="rounded-md px-3 text-blue-600 hover:bg-blue-200"
            >
                Modifier
            </a>
            <form method="POST" action="/pocket/destroy/1">
                <button
                    type="submit"
                    class="rounded-md px-3 text-red-600 hover:bg-red-200"
                >
                    Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
```

### 19 - User Pocket : edit

```html
<div class="mb-6 flex flex-col items-center justify-between lg:flex-row">
    <h1 class="text-2xl font-bold">Gestion des Poches</h1>
    <button
        class="rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
    >
        Annuler
    </button>
</div>

<div class="w-full">
    <div class="rounded-lg bg-white p-6">
        <h2 class="mb-4 text-xl font-bold">Ajouter une Poche</h2>
        <form method="POST" action="/pocket/store">
            <!-- Static form values -->
            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700">
                    Nom de la poche
                </label>
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="text"
                    name="name"
                    value="Poche de vacances"
                />
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Echéance</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="date"
                    name="dueDate"
                    value="2025-12-31"
                />
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Objectif min $500</label
                >
                <input
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    type="number"
                    name="balanceGoal"
                    value="500"
                />
            </div>

            <div class="mt-4">
                <label class="mb-2 block text-sm font-bold text-gray-700"
                    >Statut</label
                >
                <select
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                    id="blocked"
                    name="isBlocked"
                >
                    <option selected value="0">Bloqué</option>
                    <option value="1">Ouvert</option>
                </select>
            </div>
            <div class="mt-8 text-right">
                <button
                    class="w-full rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
                    type="submit"
                >
                    Créer
                </button>
            </div>
        </form>
    </div>
</div>
```

### 20 - User Transaction : index

```html
<!-- Page Heading -->
<div class="mb-6 flex items-center justify-between">
    <div class="flex items-center">
        <h1 class="text-2xl font-bold">Gestion des Transactions</h1>
        <p>
            Il vous reste : <span class="text-red-400">5</span> Transactions
            possibles
        </p>
    </div>

    <button
        class="rounded-full bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
    >
        Ajouter une transaction
    </button>
</div>

<!-- Success Message -->
<div class="w-full bg-green-400 p-3 text-center text-white">
    Transaction ajoutée avec succès
</div>

<!-- Transactions Table -->
<div class="overflow-x-auto rounded-lg bg-white shadow-md">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Date
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Type
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Description
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Source
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Destination
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Montant
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                ></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    2025-01-06 10:30:00
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-blue-700"
                    >
                        Crédit
                    </span>
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    Transaction de dépôt
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        Compte A
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700"
                    >
                        Compte B
                    </span>
                </td>
                <td
                    class="border-b border-gray-200 px-6 py-4 text-sm text-gray-600"
                >
                    200
                </td>
                <td
                    class="flex items-center border-b border-gray-200 px-6 py-4 text-sm"
                >
                    <a
                        href="/transaction/edit/1"
                        class="rounded-full bg-blue-200 px-3 py-1 text-sm font-semibold text-green-700"
                    >
                        📝
                    </a>
                    <form action="/transaction/destroy/1" method="POST">
                        <button
                            class="rounded-full bg-red-200 px-3 py-1 text-sm font-semibold text-green-700"
                        >
                            🗑️
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
```

### 20 - User Transaction : Form

```html
<!-- Page Heading -->
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold">Gestion des transactions</h1>
    <a
        href="./edit-card.html"
        class="rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
    >
        Annuler
    </a>
</div>

<!-- Error Message -->
<div class="w-full bg-red-400 p-3 text-center text-white">
    Erreur: Veuillez vérifier vos données
</div>

<div id="cardPopup" class="w-full">
    <div class="rounded-lg bg-white p-6 shadow-lg">
        <h2 class="mb-4 text-lg font-semibold">Ajouter une transaction</h2>
        <form action="/transaction/store" method="POST">
            <input type="hidden" name="_token" value="CSRF_TOKEN" />

            <!-- Type de Transaction -->
            <div class="mb-4">
                <label for="type" class="mb-2 block font-bold text-gray-700"
                    >Type de Transaction</label
                >
                <select
                    name="type"
                    id="type"
                    required
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                >
                    <option value="">Sélectionnez un type</option>
                    <option value="Crédit">Crédit</option>
                    <option value="Débit">Débit</option>
                </select>
            </div>

            <!-- Source -->
            <div class="mb-4">
                <label for="source" class="mb-2 block font-bold text-gray-700"
                    >Source</label
                >
                <select
                    name="source_id"
                    id="source"
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                >
                    <option value="">
                        Sélectionnez une source (si applicable)
                    </option>
                    <optgroup label="Cartes">
                        <option value="1">Carte 1 ($100)</option>
                        <option value="2">Carte 2 ($50)</option>
                    </optgroup>
                    <optgroup label="Poches">
                        <option value="3">Poche 1 ($200)</option>
                        <option value="4">Poche 2 ($150)</option>
                    </optgroup>
                </select>
            </div>

            <!-- Destination -->
            <div class="mb-4">
                <label
                    for="destination"
                    class="mb-2 block font-bold text-gray-700"
                    >Destination</label
                >
                <select
                    name="destination_id"
                    id="destination"
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                >
                    <option value="">
                        Sélectionnez une destination (si applicable)
                    </option>
                    <optgroup label="Cartes">
                        <option value="1">Carte 1 ($100)</option>
                        <option value="2">Carte 2 ($50)</option>
                    </optgroup>
                    <optgroup label="Poches">
                        <option value="3">Poche 1 ($200)</option>
                        <option value="4">Poche 2 ($150)</option>
                    </optgroup>
                </select>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label
                    for="description"
                    class="mb-2 block font-bold text-gray-700"
                    >Description</label
                >
                <input
                    type="text"
                    name="description"
                    id="description"
                    required
                    value=""
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                />
            </div>

            <!-- Montant -->
            <div class="mb-4">
                <label for="amount" class="mb-2 block font-bold text-gray-700"
                    >Montant</label
                >
                <input
                    type="number"
                    name="amount"
                    id="amount"
                    required
                    value=""
                    class="focus:shadow-outline block w-full appearance-none rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 focus:outline-none"
                />
            </div>

            <!-- Bouton Soumettre -->
            <div class="text-right">
                <button
                    type="submit"
                    class="w-full rounded bg-gray-700 px-4 py-2 font-bold text-white hover:bg-gray-600"
                >
                    Ajouter Transaction
                </button>
            </div>
        </form>
    </div>
</div>
```

### 21 - User Subscription page

```html
<!-- Page Heading -->
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold">Mes abonnements</h1>
</div>

<!-- Subscription Table -->
<div class="overflow-x-auto rounded-lg bg-white p-2 shadow-md">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Date
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Abonnement
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Début
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Fin
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Montant
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Statut de paiement
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                >
                    Statut
                </th>
                <th
                    class="border-b-2 border-gray-300 bg-gray-100 px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"
                ></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td
                    class="border-b border-gray-200 px-3 py-4 text-sm text-gray-600"
                >
                    2025-01-06
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700"
                    >
                        Plan Premium
                    </span>
                </td>
                <td
                    class="border-b border-gray-200 px-3 py-4 text-sm text-gray-600"
                >
                    <span
                        class="rounded-md bg-yellow-200 px-3 py-1 text-xs font-semibold text-yellow-700"
                    >
                        2025-01-01
                    </span>
                </td>
                <td class="border-b border-gray-200 px-3 py-4 text-sm">
                    <span
                        class="rounded-md bg-red-200 px-3 py-1 text-xs font-semibold text-red-700"
                    >
                        2025-12-31
                    </span>
                </td>
                <td class="border-b border-gray-200 px-4 py-4 text-sm">$100</td>
                <td class="border-b border-gray-200 px-4 py-4 text-sm">
                    <span
                        class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-blue-700"
                    >
                        Payé
                    </span>
                </td>
                <td class="border-b border-gray-200 px-3 py-4 text-sm">
                    <span
                        class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-700"
                    >
                        Actif
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <button
                        class="rounded-full bg-red-200 px-3 py-1 text-sm font-semibold text-red-700"
                    >
                        📝 Annuler
                    </button>
                </td>
            </tr>
            <tr>
                <td
                    class="border-b border-gray-200 px-3 py-4 text-sm text-gray-600"
                >
                    2025-01-05
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <span
                        class="rounded-md bg-blue-200 px-3 py-1 text-xs font-semibold text-blue-700"
                    >
                        Plan Standard
                    </span>
                </td>
                <td
                    class="border-b border-gray-200 px-3 py-4 text-sm text-gray-600"
                >
                    <span
                        class="rounded-md bg-yellow-200 px-3 py-1 text-xs font-semibold text-yellow-700"
                    >
                        2025-01-01
                    </span>
                </td>
                <td class="border-b border-gray-200 px-3 py-4 text-sm">
                    <span
                        class="rounded-md bg-red-200 px-3 py-1 text-xs font-semibold text-red-700"
                    >
                        2025-06-30
                    </span>
                </td>
                <td class="border-b border-gray-200 px-4 py-4 text-sm">$50</td>
                <td class="border-b border-gray-200 px-4 py-4 text-sm">
                    <span
                        class="rounded-full bg-yellow-200 px-3 py-1 text-xs font-semibold text-yellow-700"
                    >
                        En attente
                    </span>
                </td>
                <td class="border-b border-gray-200 px-3 py-4 text-sm">
                    <span
                        class="rounded-full bg-red-200 px-3 py-1 text-xs font-semibold text-red-700"
                    >
                        Expiré
                    </span>
                </td>
                <td class="border-b border-gray-200 px-6 py-4 text-sm">
                    <button
                        class="rounded-full bg-red-200 px-3 py-1 text-sm font-semibold text-red-700"
                    >
                        📝 Annuler
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
```

### 22 - User Statistiques Page

```html
<!-- Page Header -->
<h1 class="mb-6 text-3xl font-bold text-blue-600">Statistiques Financières</h1>

<!-- Graphs Grid -->
<div class="grid grid-cols-1 gap-6 md:grid-cols-2">
    <!-- Revenu vs Dépenses -->
    <div class="h-80 rounded-lg bg-white p-4 shadow">
        <h2 class="mb-4 text-xl font-semibold text-gray-700">
            Revenus vs Dépenses
        </h2>
        <canvas id="incomeExpenseChart" class="h-full"></canvas>
    </div>

    <!-- Catégories de Dépenses -->
    <div class="h-80 rounded-lg bg-white p-4 shadow">
        <h2 class="mb-4 text-xl font-semibold text-gray-700">
            Répartition des Dépenses
        </h2>
        <canvas id="expenseCategoryChart" class="h-full"></canvas>
    </div>

    <!-- Solde Mensuel -->
    <div class="h-80 rounded-lg bg-white p-4 shadow">
        <h2 class="mb-4 text-xl font-semibold text-gray-700">
            Évolution du Solde Mensuel
        </h2>
        <canvas id="monthlyBalanceChart" class="h-full"></canvas>
    </div>

    <!-- Poches Graphique -->
    <div class="h-80 rounded-lg bg-white p-4 shadow">
        <h2 class="mb-4 text-xl font-semibold text-gray-700">
            Progrès des Poches
        </h2>
        <canvas id="pocketProgressChart" class="h-full"></canvas>
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("-translate-x-full");
    }

    // Configuration du graphique Revenus vs Dépenses
    const incomeExpenseCtx = document
        .getElementById("incomeExpenseChart")
        .getContext("2d");
    new Chart(incomeExpenseCtx, {
        type: "line",
        data: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            datasets: [
                {
                    label: "Revenus",
                    data: [
                        5000, 7000, 8000, 5600, 9000, 10000, 7500, 8200, 9100,
                        9700, 8800, 10500,
                    ],
                    borderColor: "rgba(75, 192, 192, 1)",
                    backgroundColor: "rgba(75, 192, 192, 0.2)",
                    fill: true,
                },
                {
                    label: "Dépenses",
                    data: [
                        3000, 4500, 6000, 3500, 7000, 6500, 4000, 6000, 7000,
                        7800, 6500, 8000,
                    ],
                    borderColor: "rgba(255, 99, 132, 1)",
                    backgroundColor: "rgba(255, 99, 132, 0.2)",
                    fill: true,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        },
    });

    // Configuration du graphique Catégories de Dépenses
    const expenseCategoryCtx = document
        .getElementById("expenseCategoryChart")
        .getContext("2d");
    new Chart(expenseCategoryCtx, {
        type: "doughnut",
        data: {
            labels: [
                "Nourriture",
                "Transport",
                "Logement",
                "Loisirs",
                "Santé",
                "Autres",
            ],
            datasets: [
                {
                    data: [2000, 1500, 3000, 1000, 800, 500],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56",
                        "#4BC0C0",
                        "#9966FF",
                        "#FF9F40",
                    ],
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        },
    });

    // Configuration du graphique Solde Mensuel
    const monthlyBalanceCtx = document
        .getElementById("monthlyBalanceChart")
        .getContext("2d");
    new Chart(monthlyBalanceCtx, {
        type: "bar",
        data: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            datasets: [
                {
                    label: "Solde",
                    data: [
                        1500, 2500, 3200, 4000, 3500, 3800, 4200, 4500, 4700,
                        5000, 5300, 5800,
                    ],
                    backgroundColor: "rgba(54, 162, 235, 0.6)",
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        },
    });

    // Configuration du graphique Progrès des Poches
    const pocketProgressCtx = document
        .getElementById("pocketProgressChart")
        .getContext("2d");
    new Chart(pocketProgressCtx, {
        type: "bar",
        data: {
            labels: ["Éducation", "Voyage", "Fonds d'Urgence"],
            datasets: [
                {
                    label: "Pourcentage de Réalisation",
                    data: [
                        (25000 / 50000) * 100, // Pourcentage pour Éducation
                        (5000 / 40000) * 100, // Pourcentage pour Voyage
                        (15000 / 35000) * 100, // Pourcentage pour Fonds d'Urgence
                    ],
                    backgroundColor: [
                        "#4CAF50", // Couleur pour Éducation
                        "#FFC107", // Couleur pour Voyage
                        "#F44336", // Couleur pour Fonds d'Urgence
                    ],
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    beginAtZero: true,
                },
                y: {
                    beginAtZero: true,
                    max: 100,
                    title: {
                        display: true,
                        text: "Pourcentage (%)",
                    },
                },
            },
        },
    });
</script>
```
