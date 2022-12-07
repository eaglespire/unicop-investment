<?php

namespace App\Repositories;

use App\Traits\DatesResolver;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;
use App\Models\Loan as Morgage;
use Illuminate\Validation\ValidationException;

class Loan
{
    use DatesResolver;
    public function offerLoanToUser(int $userId, int $loanId, $amount, $startDate)
    {
        /*
         * Get the
         */
        //set end date
        $buildLoanEndDate = DatesResolver::buildDate($startDate,$loanId);
        try {
            //check to see if the user has already accessed this loan
            $res = Morgage::where('user_id',$userId)
                ->where('lending_id',$loanId)
                ->exists();
            //dd($res);
            if ($res)
            {
                return false;
            }else{
                Morgage::create([
                    'user_id'=>$userId,
                    'lending_id'=>$loanId,
                    'start_date'=>$startDate,
                    'end_date'=>$buildLoanEndDate,
                    'amount'=>$amount
                ]);
                return true;
            }
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

    public function allLoans($term)
    {
        return \App\Models\Loan::search($term)->paginate(20);
    }

    public function markAsPaid($loanId)
    {
        $loan = \App\Models\Loan::find($loanId);
        $loan->update(['status'=>1]);
        return true;
    }
    public function markNotPaid($loanId)
    {
        $loan = \App\Models\Loan::find($loanId);
        $loan->update(['status'=>0]);
        return true;
    }
    public function removeUserLoanEntry(int $loanId)
    {
        try {
            $userLoan = \App\Models\Loan::findOrFail($loanId);
            $userLoan->delete();
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

    public function calculateMonthlyInterest($loanId,$amount): float|int|null
    {
        //fetch the loan
        $loan = \App\Models\Lending::where('id',$loanId)->first();
        if ($loan)
        {
            //amount
            $rate = $loan->interest;
            $duration = $loan->duration;
            $interest =  ($amount * $rate * $duration) / (100 * 12);
            return $interest / $duration;
        }
        return null;
    }
    public function calculateTotalInterest($loanId,$amount): float|int|null
    {
        //fetch the loan
        $loan = \App\Models\Lending::where('id',$loanId)->first();
        if ($loan)
        {
            //amount
            $rate = $loan->interest;
            $duration = $loan->duration;
            return ($amount * $rate * $duration) / (100 * 12);
        }
        return null;
    }
    public function calculateRepayableAmount($loanId,$amount): float|int|null
    {
        //fetch the loan
        $loan = \App\Models\Lending::where('id',$loanId)->first();
        if ($loan)
        {
            //amount
            $rate = $loan->interest;
            $duration = $loan->duration;
            $interest = ($amount * $rate * $duration) / (100 * 12 );
            return $amount + $interest;
        }
        return null;
    }

    public function updateLoanAccess(int $loanId, $amount,$date,$lendingId)
    {
        //dd($loanId,$amount,$date,$lendingId);
        try {
            $loanOwner = \App\Models\Loan::where('id',$loanId)->firstOrFail();
            //dd($loanOwner);
            $loanOwner->update([
               'amount'=>$amount,
               'start_date'=>$date,
               'lending_id'=> $lendingId,
                'end_date'=>DatesResolver::buildDate($date,$lendingId)
            ]);
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

}
