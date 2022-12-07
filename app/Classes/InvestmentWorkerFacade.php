<?php

namespace App\Classes;

use Illuminate\Support\Facades\Facade;

class InvestmentWorkerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'InvestmentWorkerFacade';
    }
}
