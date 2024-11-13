<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index');
    }
    public function manage()
    {
        $blogs = Blog::all();
        return view('admin.blog.manage',compact('blogs'));
    }
    public function newBlog(Request $request)
    {
        Blog::newBlog($request);
        return redirect()->route('blog.manage')->with('message', 'Blog Save Successfully');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
    }

    public function update(Request $request,$id)
    {
        Blog::updateBlog($request,$id);
        return redirect()->route('blog.manage')->with('message', 'Blog Update Successfully');
    }
    public function delete($id)
    {
        Blog::deleteBlog($id);
        return redirect()->route('blog.manage')->with('message', 'Blog Delete Successfully');
    }
}
