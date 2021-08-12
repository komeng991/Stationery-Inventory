<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // foreach (glob(app_path() . '/Helpers/*.php') as $file) {
        //     require_once($file);
        // }
        $file = app_path('Helpers/UserControlHelper.php');
        if (file_exists($file)) {
            require_once($file);
        }
    }
}
