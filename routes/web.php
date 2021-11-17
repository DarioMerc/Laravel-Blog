<?php
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
});

//get posts
Route::get('/posts',[PostsController::class,'index']);
//create posts
Route::get('/posts/create',[PostsController::class,'create']);
Route::post('/posts',[PostsController::class,'store']);
//edit post
Route::get('/posts/{post}/edit',[PostsController::class,'edit']);
Route::put('/posts/{post}',[PostsController::class,'update']);
//delete
Route::delete('/posts/{post}',[PostsController::class,'delete']);