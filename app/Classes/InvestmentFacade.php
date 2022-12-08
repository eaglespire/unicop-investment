<?php

namespace App\Classes;

use Illuminate\Support\Facades\Facade;

class InvestmentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'InvestmentFacade';
    }
}
