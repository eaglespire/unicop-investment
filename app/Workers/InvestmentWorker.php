<?php

namespace App\Workers;

use App\Models\Investment;
use App\Traits\DatesResolver;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class InvestmentWorker
{
    use DatesResolver;
    public function create(array $data)
    {
        try {
            Investment::create([
                'user_id'=>$data['user_id'],
                'investment_package_id'=>$data['investment_package_id'],
                'start_date'=>Carbon::parse($data['start_date']),
                'end_date'=>DatesResolver::buildDate($data['start_date'],$data['investment_package_id'])
            ]);
            return true;
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
