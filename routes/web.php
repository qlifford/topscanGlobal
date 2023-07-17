<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use Illuminate\Support\Facades\Route;
use App\Models\Like;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])
->name('dashboard')
->middleware('auth');


Route::get('/register', [RegController::class, 'register'])
->name('register')
->middleware('guest');
Route::post('/register', [RegController::class, 'store']);

Route::get('/login', [LogController::class, 'login'])
->name('login')
->middleware('guest');

Route::post('/login', [LogController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/post', [PostController::class, 'post'])->name('post');
Route::post('/post', [PostController::class, 'store']);

Route::post('/post/{id}/likes', [PostLikeController::class, 'store'])->name('posts.likes');



