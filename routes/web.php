<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Product_transjectionController;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin', function () {
    return view('backend.dashboard');
})->middleware('auth');



Route::prefix('products')->group(function () {

    Route::get('/', [ProductController::class,  'index'])->name('product.index');
    Route::get('/create', [ProductController::class,  'create'])->name('product.create');
    Route::get('/show/{id}', [ProductController::class,  'show'])->name('product.show');

    Route::post('/store', [ProductController::class,  'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}',  [ProductController::class, 'update'])->name('product.update');
    Route::delete('/destroy/{id}',  [ProductController::class, 'destroy'])->name('product.destroy');


//soft delete routes
Route::get('/trashlist',  [ProductController::class, 'trashlist'])->name('product.trashlist');
    Route::get('/restore/{id}',  [ProductController::class, 'restore'])->name('product.restore');
    Route::get('/restoreall',  [ProductController::class, 'restoreAll'])->name('product.restore_all');

    Route::delete('/delete/{id}',  [ProductController::class, 'delete'])->name('product.delete');

});

Route::prefix('categories')->group(function () {

    Route::get('/', [CategoryController::class,  'index'])->name('category.index');

    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/show/{id}', [CategoryController::class,  'show'])->name('category.show');

    Route::post('/store', [CategoryController::class,  'store'])->name('category.store');
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}',  [CategoryController::class, 'update'])->name('category.update');

    /*
        copy paste


    */
});



Route::prefix('stores')->group(function () {

    Route::get('/', [StoreController::class,  'index'])->name('store.index');

    Route::get('/create', [StoreController::class, 'create'])->name('store.create');


    Route::post('/store', [StoreController::class,  'store'])->name('store.store');
    Route::delete('/destroy/{id}', [StoreController::class, 'destroy'])->name('store.destroy');
    Route::get('/edit/{id}', [StoreController::class, 'edit'])->name('store.edit');
    Route::post('/update/{id}',  [StoreController::class, 'update'])->name('store.update');

    /*
        copy paste


    */
});


Route::prefix('racks')->group(function () {

    Route::get('/', [RackController::class,  'index'])->name('rack.index');

    Route::get('/create', [RackController::class, 'create'])->name('rack.create');


    Route::post('/store', [RackController::class,  'store'])->name('rack.store');
    Route::delete('/destroy/{id}', [RackController::class, 'destroy'])->name('rack.destroy');
    Route::get('/edit/{id}', [RackController::class, 'edit'])->name('rack.edit');
    Route::post('/update/{id}',  [RackController::class, 'update'])->name('rack.update');

    /*
        copy paste



    */
});



Route::prefix('boxes')->group(function () {

    Route::get('/', [BoxController::class,  'index'])->name('box.index');

    Route::get('/create', [BoxController::class, 'create'])->name('box.create');


    Route::post('/store', [BoxController::class,  'store'])->name('box.store');
    Route::delete('/destroy/{id}', [BoxController::class, 'destroy'])->name('box.destroy');
    Route::get('/edit/{id}', [BoxController::class, 'edit'])->name('box.edit');
    Route::post('/update/{id}',  [BoxController::class, 'update'])->name('box.update');

    /*
        copy paste


    */
});
Route::prefix('suppliers')->group(function () {

    Route::get('/', [SupplierController::class,  'index'])->name('supplier.index');

    Route::get('/create', [SupplierController::class, 'create'])->name('supplier.create');
    Route::get('/show/{id}', [SupplierController::class,  'show'])->name('supplier.show');

    Route::post('/store', [SupplierController::class,  'store'])->name('supplier.store');
    Route::delete('/destroy/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');
    Route::get('/edit/{id}', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::post('/update/{id}',  [SupplierController::class, 'update'])->name('supplier.update');


});
Route::prefix('product_transjection')->group(function () {

    Route::get('/', [Product_transjectionController::class,  'index'])->name('product_transjection.index');

    Route::get('/create', [Product_transjectionController::class, 'create'])->name('product_transjection.create');
    Route::get('/show/{id}', [Product_transjectionController::class,  'show'])->name('product_transjection.show');

    Route::post('/store', [Product_transjectionController::class,  'store'])->name('product_transjectionr.store');
    Route::delete('/destroy/{id}', [Product_transjectionController::class, 'destroy'])->name('product_transjection.destroy');
    Route::get('/edit/{id}', [Product_transjectionrController::class, 'edit'])->name('product_transjectionr.edit');
    Route::post('/update/{id}',  [Product_transjectionController::class, 'update'])->name('product_transjection.update');


});
