<?php

namespace Usama\Blogpack;

use Illuminate\Support\ServiceProvider;

class BlogPackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require(__DIR__.'/Http/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->loadViewsFrom(__DIR__.'/views','blogpack');

        $this->publishes([
            __DIR__.'/migrations' => base_path('databases/migrations'),
            __DIR__.'/seeds' => base_path('databases/seeds'),
        ]);
    }
}
