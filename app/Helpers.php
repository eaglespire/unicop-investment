<?php

namespace App;

use App\Models\User;

class Helpers
{
    public static function buildUsername(User $user) : string
    {
        //extract the first three letters of the firstname
        $firstnameExtracted = self::extractLetters($user->firstname,3);
        //extract the first four letters of the lastname
        $lastnameExtracted = self::extractLetters($user->lastname,4);
        //extract first letter of middle name
        $middleNameExtracted = self::extractLetters($user->middlename,1);
        //build username
        return strtolower($firstnameExtracted.$lastnameExtracted.$middleNameExtracted."00$user->id");
    }

    private static function extractLetters(string $name,int $length) : string
    {
        $extractedString = null;
        if ($length >= 3)
        {
            if (!empty($name) && strlen($name) >= 3)
            {
                $extractedString = substr($name,0,$length);
            }elseif (!empty($name) && strlen($name) == 2)
            {
                $extractedString = $name;
            }else{
                $extractedString = "";
            }
        }else{
            if (!empty($name))
            {
                return substr($name,0,1);
            }else{
                return "";
            }
        }
        return $extractedString;
    }
}
