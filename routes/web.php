<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\CheckoutController;

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
    Route::get('/product/{slug}/details', [HomeController::class, 'productSingleView'])->name('Product.Single.View');
    Route::post('/add/to/cart', [CartController::class, 'addToCart'])->name('Add.To.Cart');
    Route::post('/ajax/cart', [CartController::class, 'ajaxCart'])->name('AjaxCart');
    Route::get('/cart/count', [CartController::class, 'cartCount'])->name('cartCount');
    Route::get('/carts', [CartController::class, 'cartPage'])->name('cartPage');

    Route::get('/checkout', [CheckoutController::class, 'checkoutPage'])->name('checkoutPage');
    Route::post('/order/confirm', [CheckoutController::class, 'orderConfirm'])->name('orderConfirm');


    Route::get('/products/{slug}', [ProductController::class, 'blockWiseProduct'])->name('Product.BlockWise.Show');
    Route::get('all/product/show', [ProductController::class, 'showAllProduct'])->name('All.Product');


    Route::get('/check-out', function () {
        return view('frontend.includes.CheckOut');
    });
    Route::get('/order-confirmation', function () {
        return view('frontend.includes.OrderConfirmation');
    });
    Route::get('/product-page', function () {
        return view('frontend.pages.ProductPage');
    });
    Route::get('/cart', function () {
        return view('frontend.pages.Cart');
    });

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

