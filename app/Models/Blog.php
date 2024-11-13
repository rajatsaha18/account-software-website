<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $Blog;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'blog-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newBlog($request)
    {
        self::$Blog = new Blog();
        self::$Blog->name           = $request->name;
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }
        self::$Blog->slug           = make_slug($request->name);
        self::$Blog->description    = $request->description;
        self::$Blog->image          = self::getImageUrl($request->file('image'));
        self::$Blog->status         = $request->status;
        self::$Blog->save();

    }

    public static function updateBlog($request,$id)
    {
        self::$Blog = Blog::findOrFail($id);
        if($request->file('image'))
        {
            if(file_exists(self::$Blog->image))
            {
                unlink(self::$Blog->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$Blog->image;
        }
        self::$Blog->name           = $request->name;
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }
        self::$Blog->slug           = make_slug($request->name);
        self::$Blog->description    = $request->description;
        self::$Blog->image          = self::$imageUrl;
        self::$Blog->status         = $request->status;
        self::$Blog->save();


    }
    public static function deleteBlog($id)
    {
        self::$Blog = Blog::findOrFail($id);
        if(file_exists(self::$Blog->image))
        {
            unlink(self::$Blog->image);
        }
        return self::$Blog->delete();


    }
}
