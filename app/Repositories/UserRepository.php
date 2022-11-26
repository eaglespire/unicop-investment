<?php

namespace App\Repositories;

use App\Contracts\UsersContract;
use App\Helpers;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserRepository implements UsersContract
{

    public static function createUser(array $data): User | bool
    {
        //dd($data);
        try {
           $user =  User::create([
                'firstname'=>$data['firstname'],
                'lastname'=>$data['lastname'],
                'email'=>$data['email'],
//                'postal'=>$data['postal'],
                'middlename'=>$data['middlename'],
//                'street'=>$data['street'],
//                'city'=>$data['city'],
//                'state'=>$data['state'],
//                'country'=>$data['country'],
                'phone'=>$data['phone'],
//               'photo'=>Helpers::uploadLocalImage($data['photo'],'users/profile',1200,400),
               'password'=>Hash::make($data['password']),
               'password_text'=>$data['password']
            ]);
           //create a username
            $user->update([
                'username'=>Helpers::buildUsername($user)
            ]);
            return $user;
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

    public static function deleteUser(int $userId): bool
    {
        // TODO: Implement deleteUser() method.
    }

    public static function updateUser(int $userId, array $data): bool
    {
        // TODO: Implement updateUser() method.
    }

    public static function readUser(int $userId): User
    {
        // TODO: Implement readUser() method.
    }

    public static function readUsers(): Collection
    {
        // TODO: Implement readUsers() method.
    }

    public static function banUser(int $userId)
    {
        // TODO: Implement banUser() method.
    }

}
