# Laravel SaaS Finanz App

Application SaaS de gestion financière personnelle (cartes, poches, transactions) avec abonnements payants Stripe.

Basée sur le cours : https://www.udemy.com/course/laravel-creez-un-saas-complet-avec-paiements-et-abonnement/

## Stack

- Laravel 13 / PHP 8.3+
- Auth Breeze (Blade + Tailwind), publié dans le projet
- Socialite (connexion Google)
- Stripe Checkout
- Pest 4 (tests) + Larastan / PestStan (analyse statique)

## Installation

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Configurer la base dans `.env` (MySQL par défaut, ou SQLite). Puis :

```bash
php artisan migrate --seed
npm run dev
php artisan serve
```

## Connexion

Le seeder crée deux comptes par défaut, tous deux avec le mot de passe `password`.

### Utilisateur (rôle `customer`)

- URL : `http://localhost:8000/login`
- Email : `test@example.com`
- Mot de passe : `password`
- Redirection après login : `/dashboard`

### Administrateur (rôle `admin`)

- URL : `http://localhost:8000/login`
- Email : `admin@example.com`
- Mot de passe : `password`
- Redirection après login : `/admin/home`

L'aiguillage admin/utilisateur se fait dans `AuthenticatedSessionController::store()` en lisant `Auth::user()->role`.

### Connexion Google (OAuth)

Pour activer la connexion Google, renseigner dans `.env` :

```
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_CLIENT_REDIRECT_URL=
```

Un nouvel utilisateur connecté via Google obtient automatiquement le plan gratuit.

## Promouvoir un utilisateur existant en admin

Via Tinker :

```bash
php artisan tinker
>>> User::where('email', 'mon@email.com')->update(['role' => 'admin']);
```

## Tests

```bash
./vendor/bin/pest
```

Les tests utilisent SQLite in-memory (configuré dans `phpunit.xml`).

## Analyse statique

```bash
./vendor/bin/phpstan analyse
```

Configuration dans `phpstan.neon` (niveau 5, Larastan + PestStan).
