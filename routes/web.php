<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SiteSettingController;


/*======================Website========================*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/blog-details/{slug}', [HomeController::class,'blogDetails'])->name('blog.details');
Route::get('/blog-search', [HomeController::class,'blogSearch'])->name('blog.search');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::post('/contact-form', [HomeController::class,'contactForm'])->name('contact.form');



/*======================Admin========================*/
Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //about

    Route::get('about-admin',[AboutController::class,'index'])->name('admin.about');
    Route::post('about-new',[AboutController::class,'newAbout'])->name('about.new');

    //site-setting
    Route::get('site-setting-admin',[SiteSettingController::class,'index'])->name('site-setting');
    Route::post('site-setting-new',[SiteSettingController::class,'newSiteSetting'])->name('sitesetting.new');

    //product
    Route::get('product-add',[ProductController::class,'index'])->name('product.add');
    Route::get('product-manage',[ProductController::class,'manage'])->name('product.manage');
    Route::get('product-edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('product-new',[ProductController::class,'newProduct'])->name('product.new');
    Route::post('product-update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('product-delete/{id}',[ProductController::class,'delete'])->name('product.delete');

    //client
    Route::get('client-add',[ClientController::class,'index'])->name('client.add');
    Route::get('client-manage',[ClientController::class,'manage'])->name('client.manage');
    Route::get('client-edit/{id}',[ClientController::class,'edit'])->name('client.edit');
    Route::post('client-new',[ClientController::class,'store'])->name('client.new');
    Route::post('client-update/{id}',[ClientController::class,'update'])->name('client.update');
    Route::get('client-delete/{id}',[ClientController::class,'delete'])->name('client.delete');

    //blog
    Route::get('blog-add',[BlogController::class,'index'])->name('blog.add');
    Route::get('blog-manage',[BlogController::class,'manage'])->name('blog.manage');
    Route::post('blog-new',[BlogController::class,'newBlog'])->name('blog.new');
    Route::get('blog-edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('blog-update/{id}',[BlogController::class,'update'])->name('blog.update');
    Route::get('blog-delete/{id}',[BlogController::class,'delete'])->name('blog.delete');

    //user message
    Route::get('user-messages',[DashboardController::class,'userMessages'])->name('user.message');
    Route::get('user-messages-delete/{id}',[DashboardController::class,'delete'])->name('contact.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
