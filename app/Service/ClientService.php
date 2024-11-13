<?php

namespace App\Service;
use App\Models\Client;

class ClientService
{
    private static $client;

    private static $imageName;
    private static $directory;
    private static $imageUrl;
    public function getAllClient()
    {
        return Client::paginate(4);
    }
    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'client-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function storeClient($request)
    {
        self::$client = new Client();
        self::$client->name           = $request->name;
        self::$client->image          = self::getImageUrl($request->file('image'));
        self::$client->status         = $request->status;
        self::$client->save();
        return self::$client;
    }

    public static function editClient($id)
    {
        return Client::findOrFail($id);
    }
    public static function updateClient($request,$id)
    {
        self::$client = Client::findOrFail($id);
        if($request->file('image'))
        {
            if(file_exists(self::$client->image))
            {
                unlink(self::$client->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$client->image;
        }
        self::$client->name           = $request->name;
        self::$client->image          = self::$imageUrl;
        self::$client->status         = $request->status;
        self::$client->save();
        return self::$client;
    }

    public static function deleteClient($id)
    {
        self::$client = Client::findOrFail($id);
        if(file_exists(self::$client->image))
        {
            unlink(self::$client->image);
        }
        return self::$client->delete();
    }
}
