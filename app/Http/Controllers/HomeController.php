<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $products;
    public function index()
    {
        $products = $this->products = Product::where('status',1)->get();
        $about    = About::first();
        $clients  = Client::all();
        return view('website.home.home',compact('products','about','clients'));
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('website.blog.blog-website',compact('blogs'));
    }
    public function blogDetails($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        // dd($blog);
        return view('website.blog.blog-details',compact('blog'));
    }

    public function blogSearch(Request $request)
    {

        $query = $request->input('query');

        // Search in the 'title' and 'description' columns of the 'blogs' table
        $blogs = Blog::where('name', 'LIKE', "%$query%")
                      ->orWhere('description', 'LIKE', "%$query%")
                      ->get();

        return view('website.blog.blogs-search',compact('blogs'));
    }
    public function contact()
    {

        return view('website.home.contact',);
    }
    public function contactForm(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'mobile'    => 'required',
        ]);
        Contact::newContact($request);
        return redirect()->back()->with('message', 'Message Sent Successfully');
    }
}
