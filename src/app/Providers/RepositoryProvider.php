<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(\App\Repositories\BaseRepositoryInterface::class, \App\Repositories\BaseRepository::class);
        $this->app->singleton(\App\Repositories\User\UserRepositoryInterface::class, \App\Repositories\User\UserRepository::class);
    }
}
