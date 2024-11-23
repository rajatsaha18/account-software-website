<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewSiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $data = NewSiteSetting::first();
        return view('admin.site-setting.index',compact('data'));
    }
    public function newSiteSetting(Request $request)
    {
        NewSiteSetting::updateSiteSetting($request);
        return redirect()->back();

    }
}
