<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutfitController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PortfolioController;
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
Route::get('/userhome', [UserController::class, 'showUserHomePage'])->middleware('isUser');
Route::get('/adminhome', [UserController::class, 'adminhome'])->middleware('isAdmin');

Route::get('/signup', [RegisterController::class, 'showRegisterPage']);
Route::post('/signup', [RegisterController::class, 'register'])->name('register');

Route::get('/signin', [LoginController::class, 'showLoginPage']);
Route::post('/signin', [LoginController::class, 'login'])->name('login');

Route::get('/signout', [UserController::class, 'signOut']);

Route::get('/outfitchoose', [OutfitController::class, 'showOutfitChoosePage']);
Route::post('/outfitchoose', [OutfitController::class, 'outfitCategoryChoose'])->name('outfitCategoryChoose');

Route::get('/outfitcategory', [OutfitController::class, 'showOutfitByOutfitCategoryIdPage']);
Route::post('/outfitcategory', [OutfitController::class, 'outfitChoose'])->name('outfitChoose');
Route::get('/outfitcategoryadmin', [OutfitController::class, 'showOutfitByOutfitCategoryIdPageAdmin']);
Route::get('/outfitcategorypreview', [OutfitController::class, 'showOutfitPreview']); // ga ada button apa2 kalo preview
Route::get('/outfitcreateform', [OutfitController::class, 'createOutfitPage']);
Route::post('/outfitcreateform', [OutfitController::class, 'createOutfit'])->name('createOutfit');
Route::get('/outfitupdateform/{id}', [OutfitController::class, 'showUpdateOutfitPage'])->name('outfitupdateform');;
Route::delete('/outfit/delete', [OutfitController::class, 'deleteOutfit'])->name('deleteOutfit');
Route::post('/outfit/update/{outfitId}', [OutfitController::class, 'updateOutfit'])->name('updateOutfit');

Route::get('/packagechoose', [PackageController::class, 'showPackageChoosePage']);
Route::get('/packageadmin', [PackageController::class, 'showPackageAdminPage']);
Route::post('/packagechoose', [PackageController::class, 'choosePackage'])->name('choosePackage');
Route::get('/packagecreateform', [PackageController::class, 'createPackagePage']);
Route::post('/packagecreateform', [PackageController::class, 'createPackage'])->name('createPackage');

Route::get('/portfolio', [PortfolioController::class, 'showPortfolioPage']);
Route::get('/portfoliodetail', [PortfolioController::class, 'showPortfolioDetailPage']);
Route::get('/portfolioadmin', [PortfolioController::class, 'showPortfolioAdminPage']);
Route::get('/portfoliocreateform', [PortfolioController::class, 'createPortfolioPage']);
Route::post('/portfoliocreateform', [PortfolioController::class, 'createPortfolio'])->name('createPortfolio');
Route::delete('/portfolio/delete', [PortfolioController::class, 'deletePortfolio'])->name('deletePortfolio');

Route::get('/bookpage', [TransactionController::class, 'showBookPage']);
Route::post('/bookpage', [TransactionController::class, 'book'])->name('book');

Route::get('/transactionadmin', [TransactionController::class, 'showAdminTransactionPage']);
Route::get('/transaction', [TransactionController::class, 'showUserTransactionPage']);

Route::get('/invoice', [TransactionController::class, 'showInvoicePage']);
