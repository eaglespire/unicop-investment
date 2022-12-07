<?php

namespace App\Providers;

use App\Contracts\UsersContract;
use App\Helpers;
use App\Repositories\Lending;
use App\Repositories\Loan;
use App\Repositories\UserNotifications;
use App\Repositories\UserRepository;
use App\Workers\InvestmentWorker;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UsersContract::class,UserRepository::class);
        $this->app->bind('Helper',Helpers::class);
        $this->app->bind('NotificationHelper', UserNotifications::class);
        $this->app->bind('Lease',Lending::class);
        $this->app->bind('LoanAccessor', Loan::class);
        $this->app->bind('InvestmentWorkerFacade',InvestmentWorker::class);
    }

    public function boot()
    {
    }
}
