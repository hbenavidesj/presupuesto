<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//gpt


use App\Http\Controllers\personController;
use App\Http\Controllers\bincomeController;
use App\Http\Controllers\bexpenseController;
use App\Http\Controllers\incomeController;
use App\Http\Controllers\expenseController;
use App\Http\Controllers\RoleController;
// use App\Http\Controllers\DashboardController;

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

//rutas de nuestra app

Route::resource('dashboard/person',personController::class );
Route::resource('dashboard/bincome',bincomeController::class );
Route::resource('dashboard/bexpense',bexpenseController::class );
Route::resource('dashboard/income',incomeController::class );
Route::resource('dashboard/expense',expenseController::class );
Route::resource('role',RoleController::class );
// Route::resource('dashboard',DashboardController::class );
//gpt





});

require __DIR__.'/auth.php';
