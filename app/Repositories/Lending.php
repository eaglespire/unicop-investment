<?php

namespace App\Repositories;
use App\Models\Lending as Lend;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class Lending
{
    public function create(string $name, int $amount, int $interest, int $duration) : bool
    {
        try {
           Lend::create([
               'name'=>$name,
               'amount'=>$amount,
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
}
