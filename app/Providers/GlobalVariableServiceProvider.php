<?php

namespace App\Providers;

use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Support\ServiceProvider;

class GlobalVariableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        FacadesView::share('imageUrl',url('/').'/images');
    }
}
