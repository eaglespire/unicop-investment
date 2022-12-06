<?php

namespace App\Classes;

use Illuminate\Support\Facades\Facade;

class Lease extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Lease';
    }
}
