<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use URL;
use Laravel\Cashier\Cashier;

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
        URL::forceScheme( 'https' );
        Cashier::useCurrency( 'eur', '€' );
    }
}
