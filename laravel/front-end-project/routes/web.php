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

Route::get('/outfitchoose', [OutfitController::class, 'showOutfitChoosePage'])->middleware('isUser');
Route::post('/outfitchoose', [OutfitController::class, 'outfitCategoryChoose'])->name('outfitCategoryChoose');

Route::get('/outfitcategory', [OutfitController::class, 'showOutfitByOutfitCategoryIdPage'])->middleware('isUser');
Route::post('/outfitcategory', [OutfitController::class, 'outfitChoose'])->name('outfitChoose');
Route::get('/outfitcategoryadmin', [OutfitController::class, 'showOutfitByOutfitCategoryIdPageAdmin'])->middleware('isAdmin');
Route::get('/outfitcategorypreview', [OutfitController::class, 'showOutfitPreview']); // ga ada button apa2 kalo preview
Route::get('/outfitcreateform', [OutfitController::class, 'createOutfitPage'])->middleware('isAdmin');
Route::post('/outfitcreateform', [OutfitController::class, 'createOutfit'])->name('createOutfit');
Route::get('/outfitupdateform/{id}', [OutfitController::class, 'showUpdateOutfitPage'])->name('outfitUpdateForm');
Route::delete('/outfit/delete', [OutfitController::class, 'deleteOutfit'])->name('deleteOutfit')->middleware('isAdmin');
Route::post('/outfit/update/{outfitId}', [OutfitController::class, 'updateOutfit'])->name('updateOutfit')->middleware('isAdmin');

Route::get('/packagechoose', [PackageController::class, 'showPackageChoosePage'])->middleware('isUser');
Route::get('/packagepreview', [PackageController::class, 'showPackagePreviewPage']);
Route::get('/packageadmin', [PackageController::class, 'showPackageAdminPage'])->middleware('isAdmin');
Route::post('/packagechoose', [PackageController::class, 'choosePackage'])->name('choosePackage');
Route::get('/packagecreateform', [PackageController::class, 'createPackagePage'])->middleware('isAdmin');
Route::post('/packagecreateform', [PackageController::class, 'createPackage'])->name('createPackage');
Route::get('/packageupdateform/{id}', [PackageController::class, 'showUpdatePackagePage'])->name('packageUpdateForm');
Route::post('/package/update/{id}', [PackageController::class, 'updatePackage'])->name('updatePackage')->middleware('isAdmin');
Route::delete('/package/delete', [PackageController::class, 'deletePackage'])->name('deletePackage')->middleware('isAdmin');

Route::get('/portfolio', [PortfolioController::class, 'showPortfolioPage']);
Route::get('/portfoliodetail', [PortfolioController::class, 'showPortfolioDetailPage']);
Route::get('/portfolioadmin', [PortfolioController::class, 'showPortfolioAdminPage'])->middleware('isAdmin');
Route::get('/portfoliocreateform', [PortfolioController::class, 'createPortfolioPage'])->middleware('isAdmin');
Route::post('/portfoliocreateform', [PortfolioController::class, 'createPortfolio'])->name('createPortfolio');
Route::get('/portfolioupdateform/{id}', [PortfolioController::class, 'showUpdatePortfolioPage'])->name('portfolioUpdateForm');
Route::delete('/portfolio/delete', [PortfolioController::class, 'deletePortfolio'])->name('deletePortfolio')->middleware('isAdmin');
Route::post('/portfolio/update/{id}', [PortfolioController::class, 'updatePortfolio'])->name('updatePortfolio');

Route::get('/bookpage', [TransactionController::class, 'showBookPage'])->middleware('isUser');
Route::post('/bookpage', [TransactionController::class, 'book'])->name('book');

Route::get('/transactionadmin', [TransactionController::class, 'showAdminTransactionPage'])->middleware('isAdmin');
Route::get('/transaction', [TransactionController::class, 'showUserTransactionPage'])->middleware('isUser');

Route::get('/invoice', [TransactionController::class, 'showInvoicePage'])->middleware('isUser');
