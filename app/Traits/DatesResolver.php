<?php

namespace App\Traits;

use App\Models\Lending;
use Carbon\Carbon;

trait DatesResolver
{
    private static function retrieveNumDays(int $duration): int
    {
        return $duration * 30;
    }
    public static function buildDate($startDate,$lendingId): Carbon
    {
        //parse start date as carbon date
        $parsedStartDate = Carbon::parse($startDate);
        //loan duration
        $duration = self::getLoanDuration($lendingId);
        return $parsedStartDate->addDays(self::retrieveNumDays($duration));
    }
    private static function getLoanDuration(int $lendingId)
    {
        return Lending::find($lendingId)->duration;
    }

}
