<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//importamos los controladores //
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\Income_detailController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\Sale_detailController;


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
//Ruta de nuestra app
Route::resource('/dashboard/Article',ArticleController::class);
Route::resource('/dashboard/Category',categoryController::class);
Route::resource('/dashboard/Income',IncomeController::class);
Route::resource('/dashboard/Income_detail',Income_detailController::class);
Route::resource('/dashboard/Person',PersonController::class);
Route::resource('/dashboard/Sale',SaleController::class);
Route::resource('/dashboard/Sale_detail',Sale_detailController::class);

});

require __DIR__.'/auth.php';
