<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AuthenticatedSessionController;
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

//Category router
 Route::get('category/create', [CategoryController::class, 'create'])->name('create.category');
 Route::post('category/store', [CategoryController::class, 'store'])->name('store.category');
 Route::get('category', [CategoryController::class, 'index'])->name('category');
 Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('edit.category');
 Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('update.category');
 Route::delete('category/delete', [CategoryController::class, 'delete'])->name('delete.category');


});




require __DIR__.'/auth.php';
