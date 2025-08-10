<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/view_catagory', [AdminController::class, 'view_catagory']);
Route::post('/add_catagory', [AdminController::class, 'add_catagory']);
Route::get('/redirect', [HomeController::class, 'redirect']);

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