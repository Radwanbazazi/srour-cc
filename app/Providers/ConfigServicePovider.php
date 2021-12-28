<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServicePovider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       
        config([
            'laravellocalization.supportedLocales' => [
                
                'ar'  => array( 'name' => 'Arabic', 'script' => 'Arab', 'native' => 'العربية', ),
                'en'  => array( 'name' => 'English', 'script' => 'Latn', 'native' => 'English' ),
            ],

            'laravellocalization.useAcceptLanguageHeader' => true,

            'laravellocalization.hideDefaultLocaleInURL' => true
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
