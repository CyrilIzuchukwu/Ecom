<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/signup', function () {
    return view('signup');
});


Route::get('/contact', function () {
    return view('contact');
});


// route to create a new user
Route::post('store', [UserController::class, 'store'])->name('store_user');

Route::post('user_logout', [UserController::class, 'user_logout'])->name('user_logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {

    // route for the admin dashboard
    Route::get('admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');

    // route for category
    Route::get('admin/category', [AdminController::class, 'category'])->name('category');

    // add new category
    Route::post('add_category', [AdminController::class, 'add_category'])->name('add_category');

    // delete category
    Route::get('/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name('deleteCategory');


    // route for create product view
    Route::get('admin/createProduct', [AdminController::class, 'createProduct'])->name('createProduct');

    Route::post('addProduct', [AdminController::class, 'addProduct'])->name('addProduct');


    // route to view all the products created
    Route::get('admin/products', [AdminController::class, 'products'])->name('products');


    // edit product
    Route::get('/editProduct/{id}', [AdminController::class, 'editProduct'])->name('editProduct');

    // update product
    Route::post('/updateProduct/{id}', [AdminController::class, 'updateProduct'])->name('updateProduct');
});
