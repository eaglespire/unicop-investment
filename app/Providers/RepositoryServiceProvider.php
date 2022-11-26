<?php

namespace App\Providers;

use App\Contracts\UsersContract;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UsersContract::class,UserRepository::class);
    }

    public function boot()
    {
    }
}
