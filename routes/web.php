<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/post', function () {
    return view('blog-post');
});
Route::get('/404', function () {
    return view('404');
});

Route::prefix('admin')->group(function () {
    Route::view('main', 'admin.dashboard')->name('admin.dashboard');
    Route::get('posts',[PostsController::class,'index'])->name('admin.posts');
    Route::get('posts/create',[PostsController::class,'create'])->name('create_post');
    Route::post('posts/store',[PostsController::class,'store'])->name('store_post');
    Route::delete('posts/delete/{id}',[PostsController::class,'delete'])->name('delete');
    // Route::view('posts', 'admin.create_post')->name('admin.posts');
    Route::post('posts/upload_image',[PostsController::class,'uploadImage'])->name('upload');

    Route::view('clients', 'admin.users')->name('admin.clients');
    Route::view('comments', 'admin.comments')->name('admin.comments');
    Route::view('settings', 'admin.settings')->name('admin.settings');
    Route::view('categories', 'admin.create_category')->name('admin.category');
    // Route::view('categories', 'admin.category')->name('admin.category');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
