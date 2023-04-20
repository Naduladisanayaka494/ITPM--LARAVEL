<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VegetableController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/id',[StudentController::class, 'index'])->name('add');
Route::post('/save',[StudentController::class, 'save'])->name('save');
Route::resource('/product', ProductController::class);
Route::resource('/vegetable', VegetableController::class);
Route::get('/display',[ProductController::class, 'display'])->name('display');
Route::get('/pdf',[ProductController::class, 'pdf'])->name('pdf');
Route::get('/',[HomeController::class, 'index'])->name('add');
Route::get('/searchpr',[ProductController::class, 'search'])->name('search');






