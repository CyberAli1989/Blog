<?php

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

Route::get('/', [\App\Http\Controllers\websiteController::class, 'index'])->name('index');

Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard')->middleware('auth', 'verified');

//Route::post('upload_image', 'AboutMeController@uploadImage')->name('ck');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::post('ckeditor/upload', [\App\Http\Controllers\Admin\CkeditorController::class, 'upload'])->name('ckeditor.upload');
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('ckeditor', 'Admin\CkeditorController@index');
    Route::get('/logout', [\App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('logout');
//    Profile Routes ==================
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('index');
        Route::get('/edit/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('edit');
        Route::get('/edit/password', [\App\Http\Controllers\Admin\ProfileController::class, 'changePass'])->name('password');
        Route::post('/save/password', [\App\Http\Controllers\Admin\ProfileController::class, 'savePass'])->name('password-save');
        Route::post('/update', [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('update');
    });
    Route::prefix('slider')->name('slider.')->group(function () {
        Route::get('/home', [\App\Http\Controllers\Admin\HomeSliderController::class, 'homeSlider'])->name('home');
        Route::post('/home/update/{slider}', [\App\Http\Controllers\Admin\HomeSliderController::class, 'UpdateHomeSlider'])->name('home.update');
        Route::post('/home/create/', [\App\Http\Controllers\Admin\HomeSliderController::class, 'CreateHomeSlider'])->name('home.create');
    });
    Route::prefix('about')->name('about.')->group(function () {
        Route::get('/about', [\App\Http\Controllers\Admin\AboutMeController::class, 'index'])->name('index');
        Route::post('/about/update/{about}', [\App\Http\Controllers\Admin\AboutMeController::class, 'UpdateAboutMe'])->name('update');
        Route::post('/about/create/', [\App\Http\Controllers\Admin\AboutMeController::class, 'CreateAboutMe'])->name('create');
    });
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('index');
        Route::get('/edit/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'catEdit'])->name('edit');
        Route::get('/create/', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store');
        Route::post('/category/update/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('delete');
    });
    Route::prefix('portfolio')->name('portfolio.')->group(function () {
        Route::get('/portfolio', [\App\Http\Controllers\Admin\portfolioController::class, 'index'])->name('index');
        Route::get('/edit/{portfolio}', [\App\Http\Controllers\Admin\portfolioController::class, 'edit'])->name('edit');
        Route::get('/create/', [\App\Http\Controllers\Admin\portfolioController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\portfolioController::class, 'store'])->name('store');
        Route::post('/update/{portfolio}', [\App\Http\Controllers\Admin\portfolioController::class, 'update'])->name('update');
        Route::get('/delete/{portfolio}', [\App\Http\Controllers\Admin\portfolioController::class, 'destroy'])->name('delete');
    });
});

require __DIR__ . '/auth.php';
