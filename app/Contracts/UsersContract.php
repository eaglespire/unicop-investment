<?php

namespace App\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UsersContract
{
    public static function createUser(array $data): User | bool;
    public static function deleteUser(int $userId) : bool;
    public static function updateUser(int $userId, array $data): bool;
    public static function readUser(int $userId) : User;
    public static function readUsers(): Collection;
    public static function banUser(int $userId);
}