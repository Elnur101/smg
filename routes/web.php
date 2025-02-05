<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\CategoryServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
Route::get('/proxy-mail', function () {
    $response = Http::get('http://ww1.thewebmax.com/constrot/phpmailer/mail.php', [
        'usid' => 24,
        'utid' => 10463845505
    ]);

    return response($response->body(), $response->status())
        ->header('Content-Type', 'application/json');
});
Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('category/{category}', [CategoryServiceController::class, 'showServices'])->name('category.service');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/category/{category}/service/{service}', [ShopController::class, 'sendEditOrder'])->name('shop.edit-order');
Route::post('/shop', [ShopController::class, 'store'])->name('shop.store');
//Route::get('/shop-order/category/{category}/service/{service}',
//    [ShopController::class, 'sendOrderServiceCategory'])->name('shop.sendOrderServiceCategory');
//Route::middleware('auth')->group(function (){
//    Route::get('/shop/category/{category}/service/{service}',
//        [ShopController::class, 'sendServiceCategory'])->name('shop.sendServiceCategory');
//});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function (){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/category', CategoryController::class);
    Route::resource('/service', ServiceController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
