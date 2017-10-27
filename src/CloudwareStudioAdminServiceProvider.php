<?php

namespace Cloudware\Admin;

use Illuminate\Support\ServiceProvider;

class CloudwareStudioAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/cloudware-studio/admin'),
        ], 'views');

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/cloudware-studio'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/http/routes.php';

        //$this->app->make('Cloudware/Admin/src/http/controllers/AdminController');


        $this->loadViewsFrom(base_path('resources/views/vendor/cloudware-studio/admin'), 'admin');
    }
}
