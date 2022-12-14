<?php

namespace App\Repositories;

use App\Contracts\UsersContract;
use App\Helpers;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserRepository implements UsersContract
{

    public static function createUser(array $data): User | bool
    {
        try {
           $user =  User::create([
                'firstname'=>$data['firstname'],
                'lastname'=>$data['lastname'],
                'email'=>$data['email'],
                'middlename'=>$data['middlename'],
                'phone'=>$data['phone'],
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
        try {
            $user = User::where('id',$userId)->firstOrFail();
            //first delete the profile image for this user
            if (!empty($user->photo))
            {
                $pathToImage = public_path("storage/users/profile/$user->photo");
                unlink($pathToImage);
            }
            $user->delete();
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

    public static function updateUser(int $userId, array $data): bool
    {
        try{
            $user = User::where('id',$userId)->firstOrFail();
            $user->update($data);
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

    public static function readUser(int $userId): User | bool
    {
        try {
            return User::where('id',$userId)->firstOrFail();
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

    public static function readUsers(): Collection | bool
    {
        try {
            return User::paginate(16);
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

    public static function banUser(int $userId)
    {
        // TODO: Implement banUser() method.
    }

    /**
     * @param int $userId
     * @param $photo
     * @return mixed
     */
    public static function savePhoto(int $userId, $photo)
    {
        try{
            $user = User::where('id',$userId)->firstOrFail();
            $filename = Helpers::uploadLocalImage($photo,'users/profile',1200,400);
            $user->update([
                'photo'=>$filename
            ]);
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
    public static function loadUsers(int $pageNumber)
    {
        try {
            return User::paginate(6,['*'],'page',$pageNumber);
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

    /**
     * @param int $userId
     * @return bool
     */
    public static function updateProfileInformation(int $userId, array $data): bool
    {
        try {
            $user = User::where('id',$userId)->firstOrFail();
            $user->update([
                'password' => Hash::make($data['password_text']),
                'password_text'=>$data['password_text'],
                'firstname'=>$data['firstname'],
                'lastname'=>$data['lastname'],
                'middlename'=>$data['middlename'],
                'phone'=>$data['phone'],
                'postal'=>$data['postal'],
                'street'=>$data['street'],
                'city'=>$data['city'],
                'state'=>$data['state'],
                'country'=>$data['country'],
            ]);
            //update the username
            $user->update([
                'username'=>Helpers::buildUsername($user)
            ]);
            return true;
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
