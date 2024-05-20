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

Route::get('/', [UserController::class, 'showHomePage'])->name('home');

Route::get('/signup', [RegisterController::class, 'showRegisterPage'])->middleware('isGuest');
Route::post('/signup', [RegisterController::class, 'register'])->name('register');

Route::get('/signin', [LoginController::class, 'showLoginPage'])->middleware('isGuest');
Route::post('/signin', [LoginController::class, 'login'])->name('login');

Route::get('/signout', [UserController::class, 'signOut']);

Route::get('/outfitchoose', [OutfitController::class, 'showOutfitChoosePage'])->middleware('isUser');
Route::post('/outfitchoose', [OutfitController::class, 'showOutfitCategoryChoosePage'])->name('outfitCategoryChoose');
Route::get('/outfitcategory', [OutfitController::class, 'showOutfitByOutfitCategoryIdPage'])->middleware('isUser');
Route::post('/outfitcategory', [OutfitController::class, 'outfitChoose'])->name('outfitChoose');
Route::get('/outfitcategoryadmin', [OutfitController::class, 'showOutfitByOutfitCategoryIdAdminPage'])->middleware('isAdmin');
Route::get('/outfitcategorypreview', [OutfitController::class, 'showOutfitPreviewPage']); // ga ada button apa2 kalo preview
Route::get('/outfitcreateform', [OutfitController::class, 'showCreateOutfitPage'])->middleware('isAdmin');
Route::post('/outfitcreateform', [OutfitController::class, 'createOutfit'])->name('createOutfit');
Route::get('/outfitupdateform/{id}', [OutfitController::class, 'showUpdateOutfitPage'])->name('outfitUpdateForm');
Route::delete('/outfit/delete', [OutfitController::class, 'deleteOutfit'])->name('deleteOutfit')->middleware('isAdmin');
Route::post('/outfit/update/{outfitId}', [OutfitController::class, 'updateOutfit'])->name('updateOutfit')->middleware('isAdmin');

Route::get('/packagechoose', [PackageController::class, 'showPackageChoosePage'])->middleware('isUser');
Route::get('/packagepreview', [PackageController::class, 'showPackagePreviewPage']);
Route::get('/packageadmin', [PackageController::class, 'showPackageAdminPage'])->middleware('isAdmin');
Route::post('/packagechoose', [PackageController::class, 'choosePackage'])->name('choosePackage');
Route::get('/packagecreateform', [PackageController::class, 'showCreatePackagePage'])->middleware('isAdmin');
Route::post('/packagecreateform', [PackageController::class, 'createPackage'])->name('createPackage');
Route::get('/packageupdateform/{id}', [PackageController::class, 'showUpdatePackagePage'])->name('packageUpdateForm');
Route::post('/package/update/{id}', [PackageController::class, 'updatePackage'])->name('updatePackage')->middleware('isAdmin');
Route::delete('/package/delete', [PackageController::class, 'deletePackage'])->name('deletePackage')->middleware('isAdmin');

Route::get('/portfolio', [PortfolioController::class, 'showPortfolioPage']);
Route::get('/portfoliodetail/{id}', [PortfolioController::class, 'showPortfolioDetailPage']);
Route::get('/portfolioadmin', [PortfolioController::class, 'showPortfolioAdminPage'])->middleware('isAdmin');
Route::get('/portfoliocreateform', [PortfolioController::class, 'createPortfolioPage'])->middleware('isAdmin');
Route::post('/portfoliocreateform', [PortfolioController::class, 'createPortfolio'])->name('createPortfolio');
Route::get('/portfolioupdateform/{id}', [PortfolioController::class, 'showUpdatePortfolioPage'])->name('portfolioUpdateForm');
Route::delete('/portfolio/delete', [PortfolioController::class, 'deletePortfolio'])->name('deletePortfolio')->middleware('isAdmin');
Route::post('/portfolio/update/{id}', [PortfolioController::class, 'updatePortfolio'])->name('updatePortfolio');

Route::get('/bookpage', [TransactionController::class, 'showBookPage'])->middleware('isUser');
Route::post('/bookpage', [TransactionController::class, 'book'])->name('book');

Route::get('/transactionadmin', [TransactionController::class, 'showAdminTransactionPage'])->middleware('isAdmin');
Route::delete('/transaction/delete', [TransactionController::class, 'deleteTransaction'])->name('deleteTransaction')->middleware('isAdmin');
Route::post('/transaction/changestatus', [TransactionController::class, 'changeStatus'])->name('changeStatus')->middleware('isAdmin');
Route::get('/transaction/detail/user/{id}', [TransactionController::class, 'showUserTransactionDetailPage'])->middleware('isUser');
Route::get('/transaction/detail/admin/{id}', [TransactionController::class, 'showAdminTransactionDetailPage'])->middleware('isAdmin');
Route::get('/transaction', [TransactionController::class, 'showUserTransactionPage'])->middleware('isUser');

Route::get('/invoice', [TransactionController::class, 'showInvoicePage'])->middleware('isUser');
