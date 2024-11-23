<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewSiteSetting extends Model
{
    use HasFactory;

    private static $siteSetting;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'new-siteSetting-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function updateSiteSetting($request)
    {
        self::$siteSetting = NewSiteSetting::first();
        if(self::$siteSetting)
        {
        self::$siteSetting->facebook       = $request->facebook;
        self::$siteSetting->twitter        = $request->twitter;
        self::$siteSetting->linkedin       = $request->linkedin;
        if($request->file('image'))
        {
            if(file_exists(self::$siteSetting->image))
            {
                unlink(self::$siteSetting->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$siteSetting->image;
        }
        self::$siteSetting->image    = self::$imageUrl;

        self::$siteSetting->save();
        }
        else
        {
        self::$siteSetting = new NewSiteSetting();
        self::$siteSetting->facebook        = $request->facebook;
        self::$siteSetting->twitter         = $request->twitter;
        self::$siteSetting->linkedin        = $request->linkedin;
        self::$siteSetting->image           = self::getImageUrl($request->file('image'));
        self::$siteSetting->save();

        }



    }
}
