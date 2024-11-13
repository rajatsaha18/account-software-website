<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about.index',compact('about'));
    }
    public function newAbout(Request $request)
    {
        About::newAbout($request);
        return redirect()->back()->with('message', 'About Save Successfully');
    }
}
