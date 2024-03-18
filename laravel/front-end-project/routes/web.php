<?php

use App\Http\Controllers\GownController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/userhome', [UserController::class, 'userhome'])->middleware('isUser');
Route::get('/adminhome', [UserController::class, 'adminhome'])->middleware('isAdmin');

Route::get('/signup', [RegisterController::class, 'signup']);
Route::post('/signup', [RegisterController::class, 'register'])->name('register');

Route::get('/signin', [LoginController::class, 'signin']);
Route::post('/signin', [LoginController::class, 'login'])->name('login');

Route::get('/gownchoose', [GownController::class, 'gownChooseIndex']);

Route::get('/packagechoose', [PackageController::class, 'packageChooseIndex']);
