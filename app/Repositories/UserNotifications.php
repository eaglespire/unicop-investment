<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserNotifications
{
    public function all()
    {
        return auth()->user()->unreadNotifications;
    }
    public function fetchUser($id)
    {
        return User::where('id',$id)->first();
    }
}
