<?php

namespace App\Traits;

use App\Models\InvestmentPackage;

trait CalculatorTrait
{
    public static function checkInvestmentAmount(int $packageId, float $amount): bool
    {
        //get the minimum amount for this package
        $minimumAmount = InvestmentPackage::find($packageId)->amount;
        return $amount >= $minimumAmount;
    }

}
