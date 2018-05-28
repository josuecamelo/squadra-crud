<?php

namespace App\Providers;

use app\Services\BaseService;
use app\Services\UsuarioService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // Para chamar ClientRepositoryEloquent
        $this->app->bind(
            'App\Repositories\UsuarioRepositoryInterface',
            'App\Repositories\UsuarioRepositoryEloquent'
        );
    }
}
