<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    private static $contact;

    public static function newContact($request)
    {
        self::$contact = new Contact();
        self::$contact->name    = $request->name;
        self::$contact->email   = $request->email;
        self::$contact->mobile  = $request->mobile;
        self::$contact->message = $request->message;
        self::$contact->save();
    }
}
