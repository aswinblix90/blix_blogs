<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;

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

Route::get('/', [IndexController::class,'index']);

Route::get('/single-blog/{post:slug}',[PostController::class, 'showSinglePost']);

Route::post('/single-blog/{post:slug}', [CommentController::class, 'store']);

Route::get('/user/create', function(){
    return view('user.create');
});

Route::post('/user/create', [UserController::class, 'store']);

Route::get('/user/login', function () {
    return view('session.create');
});

Route::post('/user/login', [SessionController::class, 'create']);
