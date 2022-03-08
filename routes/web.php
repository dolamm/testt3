<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('tc');
Route::get('/viewpost',function(){
    return redirect()->route('posts.index');
})->name('view');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store',[App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/index',[App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/create',[App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::get('/show/{post}',[App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::post('/CommentStore',[App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('like', [PostController::class, 'getlike']);
Route::post('like/{id}', [PostController::class, 'like']);
Route::post('dislike', [PostController::class, 'getDislike']);
Route::post('dislike/{id}', [PostController::class, 'dislike']);