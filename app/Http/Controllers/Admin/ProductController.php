<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }
    public function manage()
    {
        $products = Product::all();
        return view('admin.product.manage',compact('products'));
    }

    public function newProduct(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'image' => 'required',
        ]);
        Product::newProduct($request);
        return redirect()->route('product.manage')->with('message', 'product create successfully');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }
    public function update(Request $request,$id)
    {
        Product::updateProduct($request,$id);
        return redirect()->route('product.manage')->with('message', 'product Update successfully');

    }
    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect()->route('product.manage')->with('message', 'product Delete successfully');

    }
}


