<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/view_catagory', [AdminController::class, 'view_catagory']);
Route::get('/delete_catagory/{id}', [AdminController::class, 'delete_catagory']);
Route::post('/add_catagory', [AdminController::class, 'add_catagory']);
Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/view_product', [AdminController::class, 'view_product']);
Route::get('/show_product', [AdminController::class, 'show_product']);
Route::post('/add_product', [AdminController::class, 'add_product']);
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
Route::get('/update_product/{id}', [AdminController::class, 'update_product']);
Route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/sabaidee/{name}', function ($name) {
    echo "Sabaidee Mr.".$name;
});