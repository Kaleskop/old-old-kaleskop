<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

use URL;
use Laravel\Cashier\Cashier;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Define two new directives for blade checks
     */
    protected function bladeChecks()
    {
        Blade::if( 'business', function() {
           return Auth::check()
            && Auth::user()->hasBusiness();
        } );
        Blade::if( 'subscribed', function() {
           return Auth::check()
            && Auth::user()->hasBusiness()
            && Auth::user()->business->isSubscribed();
        } );
    }

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

        // call new blade checks
        $this->bladeChecks();
    }
}
