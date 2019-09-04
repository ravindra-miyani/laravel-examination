<?php

namespace user_information\biodata;

use Illuminate\Support\ServiceProvider;

class BiodataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        echo "Ravindra Miyani";exit;
        include __DIR__.'/routes/web.php';
        $this->app->make('user_information\biodata\BiodataController');
    }
}
