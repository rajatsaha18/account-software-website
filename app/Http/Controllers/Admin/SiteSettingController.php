<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $data = SiteSetting::find(1);
        return view('admin.site-setting.index',compact('data'));
    }
    public function newSiteSetting(Request $request)
    {
        $sitesetting = SiteSetting::find(1);
        if($sitesetting){
            $sitesetting->facebook  = $request->facebook;
            $sitesetting->linkedin  = $request->linkedin;
            $sitesetting->twitter   = $request->twitter;

            $logo = $request->file('logo');
            if($logo)
            {
                $logo_name                  = $logo->getClientOriginalName();
                $logo_name                  = preg_replace('/\s+/', '-', $logo_name);
                $sitesetting_logo_full_name = $logo_name;
                $upload_path                = 'site-setting-images/';
                $image_url                  = $upload_path.$sitesetting_logo_full_name;
                $success                    = $logo->move(($upload_path), $sitesetting_logo_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $sitesetting->logo = $image_url;
                }
            }

            if($sitesetting->update()){

                return redirect()->back()->with('message','Data Save Successfully');
            }
        }
        else{
            $sitesetting = new SiteSetting();
            $sitesetting->facebook  = $request->facebook;
            $sitesetting->linkedin  = $request->linkedin;
            $sitesetting->twitter   = $request->twitter;
            $sitesetting_logo       = $request->file('logo');
            if($sitesetting_logo)
            {
                $sitesetting_logo_name      = $sitesetting_logo->getClientOriginalName();
                $sitesetting_logo_name      = preg_replace('/\s+/', '-', $sitesetting_logo_name);
                $sitesetting_logo_full_name = $sitesetting_logo_name;
                $upload_path                = 'site-setting-images/';
                $image_url                  = $upload_path.$sitesetting_logo_full_name;
                $success                    = $sitesetting_logo->move(($upload_path), $sitesetting_logo_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {

                    $sitesetting->logo = $image_url;
                }
            }

            if($sitesetting->save()){
                return redirect()->back()->with('message','Data Save Successfully');
            }
        }

    }
}
