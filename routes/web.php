<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[PagesController::class,'index']);

Route::resource('/blog',PostsController::class);

Auth::routes();

Route::get('/home',[HomeController::class,'index'])->name('home');



// //get posts
// Route::get('/posts',[PostsController::class,'index']);
// //create posts
// Route::get('/posts/create',[PostsController::class,'create']);
// Route::post('/posts',[PostsController::class,'store']);
// //edit post
// Route::get('/posts/{post}/edit',[PostsController::class,'edit']);
// Route::put('/posts/{post}',[PostsController::class,'update']);
// //delete
// Route::delete('/posts/{post}',[PostsController::class,'delete']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');