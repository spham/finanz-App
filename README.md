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
