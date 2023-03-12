<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;

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


Route::group(['middleware' => 'cart'], function(){
    Route::get('/', [HomeController::class, 'home'])->name('Home');
    Route::get('/check-out', function () {
        return view('frontend.includes.CheckOut');
    });
    Route::get('/order-confirmation', function () {
        return view('frontend.includes.OrderConfirmation');
    });
    Route::get('/product-page', function () {
        return view('frontend.includes.ProductPage');
    });
// Route::get('/test', function () {
//     return view('frontend.pages.test');
// });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware(['auth'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    });

    require __DIR__.'/auth.php';

});



require __DIR__.'/admin.php';

Route::get('/shop', function () {
    return view('frontend.pages.ShopPage');
});

