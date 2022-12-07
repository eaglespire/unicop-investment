<?php

namespace App\Workers;

use App\Models\InvestmentPackage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class InvestmentWorker
{
    public function create(string $name, int $roi, int $amount, int $duration)
    {
        try {
            InvestmentPackage::create([
                'name'=>$name,
                'roi'=>$roi,
                'amount'=>$amount,
                'duration'=>$duration
            ]);
            return true;
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
    public function delete(int $id)
    {
        try {
            $package = InvestmentPackage::findOrFail($id);
            $package->delete();
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
    public function show(int $id)
    {
        try {
            return InvestmentPackage::findOrFail($id);
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return null;
        }
    }
    public function update(int $id, $name,$roi,$amount,$duration)
    {
        try {
            $package = InvestmentPackage::findOrFail($id);
            $package->update([
                'name'=>$name,
                'roi'=>$roi,
                'amount'=>$amount,
                'duration'=>$duration
            ]);
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
    public function index($searchTerm)
    {
        return InvestmentPackage::latest()->search($searchTerm)->paginate(12);
    }
}
