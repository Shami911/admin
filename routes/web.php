<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

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


// welcome start 
Route::get('/', [MainController::class, 'welcome']);
// welcome end 


// admin layout start
Route::get('/admin_layout', [AdminController::class, 'admin_home'])->name('admin_home');
// admin layout end 


// admin navbar start
Route::get('/admin_navbar', [AdminController::class, 'admin_navbar'])->name('admin_navbar');
Route::post('/add_navbar', [AdminController::class, 'add_navbar']);
Route::post('/edit_navbar/{id}', [AdminController::class, 'edit_navbar']);
Route::get('/delete_navbar/{id}', [AdminController::class, 'delete_navbar']);
// admin navbar end 


// admin home start
Route::get('/admin_home', [AdminController::class, 'admin_home'])->name('admin_home');
Route::post('/add_home', [AdminController::class, 'add_home']);
Route::post('/edit_home/{id}', [AdminController::class, 'edit_home']);
Route::get('/delete_home/{id}', [AdminController::class, 'delete_home']);
// admin home end 