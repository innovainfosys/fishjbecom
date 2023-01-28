<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function (){

 Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

//Category routes
 Route::get('category/create', [CategoryController::class, 'create'])->name('create.category');
 Route::post('category/store', [CategoryController::class, 'store'])->name('store.category');
 Route::get('category', [CategoryController::class, 'index'])->name('category');
 Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('edit.category');
 Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('update.category');
 Route::delete('category/delete', [CategoryController::class, 'delete'])->name('delete.category');

 Route::get('attribute/create', [AttributeController::class, 'create'])->name('create.attribute');
 Route::post('attribute/store', [AttributeController::class, 'store'])->name('store.attribute');
 Route::get('attribute', [AttributeController::class, 'index'])->name('attribute');
 Route::get('attribute/edit/{id}', [AttributeController::class, 'edit'])->name('edit.attribute');
 Route::post('attribute/update/{id}', [AttributeController::class, 'update'])->name('update.attribute');
 Route::delete('attribute/delete', [AttributeController::class, 'delete'])->name('delete.attribute');


 Route::get('product/create' , [ProductController::class, 'create'])->name('create.product');
 Route::get('product/edit/{id}' , [ProductController::class, 'edit'])->name('edit.product');
 Route::get('products' , [ProductController::class, 'index'])->name('products');
 Route::post('product/store', [ProductController::class, 'store'])->name('store.product');



});




require __DIR__.'/auth.php';
