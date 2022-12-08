<?php

namespace App\Classes;

use Illuminate\Support\Facades\Facade;

class InvestmentPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'InvestmentPackageFacade';
    }
}
