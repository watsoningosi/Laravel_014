<?php

namespace App\Providers;

use App\Example;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* $this->app->bind('App\Models\Example', function () {
            $collaborator = new \App\Models\Collaborator();
            $foo = 'footloose';
            return new \App\Models\Example($collaborator, $foo);
        }); 
        */
        $this->app->bind('App\Models\Example', function () {
            return new Example('api-key-here');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
