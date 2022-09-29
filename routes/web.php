<?php

use App\Http\Controllers\Backend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AcrylicCoating;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\FlooringController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\MahineriesController;
use App\Http\Controllers\Backend\OurProjectController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductControllerTwo;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;

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





Route::get('/dashboard', function () {
    return view('backend.layouts.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('index');
route::get('/portfolies/category/wise/{id}', [HomeController::class, 'category'])->name('category.view');
route::get('/portfolies', [HomeController::class, 'portfolio'])->name('portfolio.view');
route::get('/about', [HomeController::class, 'about'])->name('about.view');



//backend
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('users')->group(function () {
        route::get('/view', [UserController::class, 'view'])->name('users.view');
        route::get('/add', [UserController::class, 'add'])->name('users.add');
        route::post('/store', [UserController::class, 'store'])->name('users.store');
        route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        route::post('/update/{id}', [UserController::class, 'update'])->name('users.update');
        route::get('/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
    });

    Route::prefix('profile')->group(function () {
        route::get('/view', [ProfileController::class, 'view'])->name('profile.view');
        route::get('/password/view', [ProfileController::class, 'passwordView'])->name('password.view');
        route::post('/store', [ProfileController::class, 'store'])->name('profile.store');
        route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
        route::get('/delete/{id}', [ProfileController::class, 'delete'])->name('profile.delete');
        route::post('/password/update', [ProfileController::class, 'passwordupdate'])->name('password.update.view');
    });

    Route::prefix('logos')->group(function () {
        route::get('/view', [LogoController::class, 'view'])->name('logos.view');
        route::get('/add', [LogoController::class, 'add'])->name('logos.add');
        route::post('/store', [LogoController::class, 'store'])->name('logos.store');
        route::get('/edit/{id}', [LogoController::class, 'edit'])->name('logos.edit');
        route::post('/update/{id}', [LogoController::class, 'update'])->name('logos.update');
        route::get('/delete/{id}', [LogoController::class, 'delete'])->name('logos.delete');
    });

    Route::prefix('sliders')->group(function () {
        route::get('/view', [BannerController::class, 'view'])->name('sliders.view');
        route::get('/add', [BannerController::class, 'add'])->name('sliders.add');
        route::post('/store', [BannerController::class, 'store'])->name('sliders.store');
        route::get('/edit/{id}', [BannerController::class, 'edit'])->name('sliders.edit');
        route::post('/update/{id}', [BannerController::class, 'update'])->name('sliders.update');
        route::get('/delete/{id}', [BannerController::class, 'delete'])->name('sliders.delete');
    });

    Route::prefix('contacts')->group(function () {
        route::get('/view', [ContactController::class, 'view'])->name('contacts.view');
        route::get('/add', [ContactController::class, 'add'])->name('contacts.add');
        route::post('/store', [ContactController::class, 'store'])->name('contacts.store');
        route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
        route::post('/update/{id}', [ContactController::class, 'update'])->name('contacts.update');
        route::get('/delete/{id}', [ContactController::class, 'delete'])->name('contacts.delete');
        route::get('communicate/delete/{id}', [ContactController::class, 'communicatedelete'])->name('communicate.delete');
        route::get('/communicate', [ContactController::class, 'viewCommunicate'])->name('contacts.communicate');
        route::get('delllarship/delete/{id}', [ContactController::class, 'delllarshipdelete'])->name('deller.delete');
        route::get('/delllarship', [ContactController::class, 'viewdelllarship'])->name('contacts.deller');
        route::get('calcutor/delete/{id}', [ContactController::class, 'calcutordelete'])->name('calculator.delete');
        route::get('/calcutor', [ContactController::class, 'viewdcalcutor'])->name('contacts.calcutor');
        route::get('print/{id}', [ContactController::class, 'printInvoice'])->name('invoice.ptint');
    });

    Route::prefix('categories')->group(function () {
        route::get('/view', [CategoryController::class, 'view'])->name('categories.view');
        route::get('/add', [CategoryController::class, 'add'])->name('categories.add');
        route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        route::post('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    });

    Route::prefix('portfolies')->group(function () {
        route::get('/view', [PortfolioController::class, 'index'])->name('portfolies.view');
        route::get('/add', [PortfolioController::class, 'show'])->name('portfolies.show');
        route::post('/store', [PortfolioController::class, 'store'])->name('portfolies.store');
        route::get('/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolies.edit');
        route::post('/update/{id}', [PortfolioController::class, 'update'])->name('portfolies.update');
        route::get('/delete/{id}', [PortfolioController::class, 'delete'])->name('portfolies.delete');
    });


    Route::prefix('abouts')->group(function () {
        route::get('/view', [AboutController::class, 'view'])->name('abouts.view');
        route::get('/add', [AboutController::class, 'add'])->name('abouts.add');
        route::post('/store', [AboutController::class, 'store'])->name('abouts.store');
        route::get('/edit/{id}', [AboutController::class, 'edit'])->name('abouts.edit');
        route::post('/update/{id}', [AboutController::class, 'update'])->name('abouts.update');
        route::get('/delete/{id}', [AboutController::class, 'delete'])->name('abouts.delete');
    });
});
