<?php

namespace App;

use App\Models\User;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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

    public static function uploadLocalImage($image,string $folder, int $width, int $height): string
    {

        $fileNameToStore = "";
        if (isset($image))
        {
            //dd($image);
            //gets the image extension
            $ext = $image->getClientOriginalExtension();
            //dd($ext);
            //build a filename for the image
            $filename = rand(1, 10000) . time() . Str::lower(Str::random());
            $fileNameToStore = "$filename.$ext";
            //dd($fileNameToStore);
            //sets the path for the image to be stored
            $pathToSaveImage = public_path()."/storage/$folder/$fileNameToStore";
            //dd($pathToSaveImage);
            //build the image
            $createdImage = Image::make($image);

            $createdImage->resize($width,$height, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($pathToSaveImage);
        }
        //dd($fileNameToStore);
        return $fileNameToStore;
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
    public static function getImageSrc($filename,$folder): string
    {
        if (!empty($filename))
        {
           return asset('storage/'.$folder.'/'.$filename);
        }else{
            return asset("storage/$folder/no-image.svg");
        }
    }

    public static function extractText($value) : string
    {
        return explode('@',$value)[0];
    }

    public static function buildFullName(int $userId) : string
    {
        $user = User::find($userId);
        return ucfirst("$user->firstname $user->lastname");
    }
    public static function generatePageTitle(): string
    {
        $arr = \Request::segments();
        array_shift($arr);

        return implode('|',$arr);
    }
}
