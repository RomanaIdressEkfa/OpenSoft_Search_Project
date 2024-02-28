<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//admin panel route
Route::get('/', function () {
    return view('auth.register');
});

Route::get('/admin',[BackendController::class,'admin'] )->name('admin');
Route::get('/home',[FrontendController::class,'home'] )->name('home');
Route::get('/search',[FrontendController::class,'search'] )->name('search');

//product_details start
Route::get('/product_index', [ProductController::class, 'index'])->name('product_index');
Route::get('/product_create', [ProductController::class, 'create'])->name('product_create');
Route::post('/product_store', [ProductController::class, 'store'])->name('product_store');
Route::get('/product_edit/{id}', [ProductController::class, 'edit'])->name('product_edit');
Route::post('/product_update/{id}', [ProductController::class, 'update'])->name('product_update');
Route::get('/product_delete/{id}', [ProductController::class, 'delete'])->name('product_delete');
//product_details end

//product_details start
Route::get('/category_index', [CategoryController::class, 'index'])->name('category_index');
Route::get('/category_create', [CategoryController::class, 'create'])->name('category_create');
Route::post('category_store', [CategoryController::class, 'store'])->name('category_store');
Route::get('/category_edit/{id}', [CategoryController::class, 'edit'])->name('category_edit');
Route::post('/category_update/{id}', [CategoryController::class, 'update'])->name('category_update');
Route::get('/category_delete/{id}', [CategoryController::class, 'delete'])->name('category_delete');
//product_details end



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
