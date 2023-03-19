<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\HomeBlockController;
use App\Http\Controllers\Admin\OrderController;





Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function (){

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

//Category routes
    Route::get('category/create', [CategoryController::class, 'create'])->name('create.category');
    Route::post('category/store', [CategoryController::class, 'store'])->name('store.category');
    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::delete('category/delete', [CategoryController::class, 'delete'])->name('delete.category');


    Route::get('product/create' , [ProductController::class, 'create'])->name('create.product');
    Route::get('product/edit/{id}' , [ProductController::class, 'edit'])->name('edit.product');
    Route::get('products' , [ProductController::class, 'index'])->name('products');
    Route::post('product/store', [ProductController::class, 'store'])->name('store.product');
    Route::post('product/update/{id}', [ProductController::class, 'update'])->name('update.product');
    Route::get('product/image/delete/{id}', [ProductController::class, 'deleteImages'])->name('product.image.delete');

    //home section

    Route::get('/home/section/list', [HomeBlockController::class, 'sectionList'])->name('Home.Page.Section.List');
    Route::get('/edit/home/section/{id}', [HomeBlockController::class, 'editSectionPage'])->name('Home.Page.Section.Edit');
    Route::post('/update/home/section/{id}', [HomeBlockController::class, 'updateSection'])->name('Home.Page.Section.Update');

    // home section product

    Route::get('home/section/product/add/{id}', [HomeBlockController::class, 'sectionProductAdd'])->name('Home.Page.Section.Product.Add');
    Route::post('home/section/product/add/{id}', [HomeBlockController::class, 'sectionProductAddProcess'])->name('Home.Page.Section.Product.Add.Process');
    Route::get('home/section/product/delete/{id}', [HomeBlockController::class,'removeSectionProduct'])->name('Home.Page.Section.Product.delete.Process');

    //order

    Route::get('orders', [OrderController::class, 'orderIndex'])->name('Order.Index');
    Route::get('order/view/{id}', [OrderController::class, 'OrderView'])->name('Order.View');


});


