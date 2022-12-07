<?php

namespace App\Repositories;
use App\Models\Lending as Lend;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class Lending
{
    public function create(string $name, int $interest, int $duration) : bool
    {
        try {
           Lend::create([
               'name'=>$name,
               'interest'=>$interest,
               'duration'=>$duration,
               'identifier'=>ucwords(Str::random(6))
           ]);
           return true;
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
    public function all($term)
    {
        return Lend::search($term)->paginate(6);
    }
    public function index()
    {
        return Lend::get();
    }
    public function singleLoan(int $id)
    {
        return Lend::find($id);
    }
    public function updateLoan(int $id, int $duration, int $interest, string $name)
    {
        try {
            $lend = Lend::findOrFail($id);
            $lend->update([
                'duration'=>$duration,
                'interest'=>$interest,
                'name'=>$name
            ]);
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
    public function removeLoan(int $id)
    {
        try {
            $loan = Lend::findOrFail($id);
            $loan->delete();
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
