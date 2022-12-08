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
                'amount'=>$data['amount'],
                'user_id'=>$data['user_id'],
                'investment_package_id'=>$data['investment_package_id'],
                'start_date'=>Carbon::parse($data['start_date']),
                'end_date'=>DatesResolver::buildInvestmentMaturityDate($data['start_date'],$data['investment_package_id'])
            ]);
            return true;
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
    public function markAsCompleted(int $investmentId)
    {
        return Investment::find($investmentId)->update(['status'=>'completed']);
    }
    public function markAsDeclined(int $investmentId)
    {
        return Investment::find($investmentId)->update(['status'=>'declined']);
    }
    public function markAsProcessing(int $investmentId)
    {
        return Investment::find($investmentId)->update(['status'=>'processing']);
    }
}
