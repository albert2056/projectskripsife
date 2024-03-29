<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutfitController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [UserController::class, 'showAdminHomePage'])->name('home');
Route::get('/userhome', [UserController::class, 'userhome'])->middleware('isUser');
Route::get('/adminhome', [UserController::class, 'adminhome'])->middleware('isAdmin');

Route::get('/signup', [RegisterController::class, 'showRegisterPage']);
Route::post('/signup', [RegisterController::class, 'register'])->name('register');

Route::get('/signin', [LoginController::class, 'showLoginPage']);
Route::post('/signin', [LoginController::class, 'login'])->name('login');

Route::get('/outfitchoose', [OutfitController::class, 'showOutfitChoosePage']);

Route::get('/packagechoose', [PackageController::class, 'showPackageChoosePage']);

Route::get('/bookpage', [TransactionController::class, 'showBookPage']);

Route::get('/transactionadmin', [TransactionController::class, 'showAdminTransactionPage']);