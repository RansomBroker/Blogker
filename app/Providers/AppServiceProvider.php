<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Register blade Components
        Blade::component('layouts.components.card', 'card');
        Blade::component('layouts.components.cardNoHeadTitle', 'cardNoHeadTitle');
        Blade::component('layouts.components.breadcrumb', 'breadcrumb');
        Blade::component('layouts.components.navItem', 'navItem');
        Blade::component('layouts.components.form', 'form');
        Blade::component('layouts.components.table', 'table');

    }
}
