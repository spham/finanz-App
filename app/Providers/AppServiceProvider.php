<?php

namespace App\Providers;

use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('currentUser', Auth::user());
            $view->with('plans', Plan::all());
        });

        View::composer('*', function ($view) {
            $view->with('activeSubscription', Auth::user() ? Auth::user()->subscriptions()->active()->first() : null);
        });
    }
}
