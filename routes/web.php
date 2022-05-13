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
Route::get('/admin_layout', [AdminController::class, 'admin_home'])->name('admin_layout');
// admin layout end 

Route::get('/cp_home', [AdminController::class, 'home'])->name('cp_home');


// admin navbar start
Route::get('/admin_navbar', [AdminController::class, 'admin_navbar'])->name('admin_navbar');
Route::post('/add_navbar', [AdminController::class, 'add_navbar']);
Route::post('/edit_navbar', [AdminController::class, 'edit_navbar']);
Route::get('/delete_navbar', [AdminController::class, 'delete_navbar']);
// admin navbar end 


// home bag Img start 
Route::get('/admin_bag_imgHome', [AdminController::class, 'admin_bag_imgHome'])->name('admin_bag_imgHome');
Route::post('/add_bag_imgHome', [AdminController::class, 'add_bag_imgHome']);
Route::post('/edit_bag_imgHome/{id}', [AdminController::class, 'edit_bag_imgHome']);
Route::get('/delete_bag_imgHome/{id}', [AdminController::class, 'delete_bag_imgHome']);
// home bag Img end 

// admin home start
Route::get('/admin_home', [AdminController::class, 'admin_home'])->name('admin_home');
Route::post('/add_home', [AdminController::class, 'add_home']);
Route::post('/edit_home', [AdminController::class, 'edit_home']);
// admin home end 

// admin about start
Route::get('/admin_about', [AdminController::class, 'admin_about'])->name('admin_about');
Route::post('/add_about', [AdminController::class, 'add_about']);
Route::post('/edit_about', [AdminController::class, 'edit_about']);
Route::get('/delete_about', [AdminController::class, 'delete_about']);
// admin about end 

// admin about boxes start
Route::get('/admin_about_boxes', [AdminController::class, 'admin_about_boxes'])->name('admin_about_boxes');
Route::post('/edit_about_boxes/{id}', [AdminController::class, 'edit_about_boxes']);
// admin about boxes end 

// admin clietts section start
Route::get('/admin_clients_section', [AdminController::class, 'admin_clients_section'])->name('admin_clients_section');
Route::post('/add_clients_section', [AdminController::class, 'add_clients_section']);
Route::post('/edit_clients_section/{id}', [AdminController::class, 'edit_clients_section']);
Route::get('/delete_clients_section/{id}', [AdminController::class, 'delete_clients_section']);
// admin clietts section end 

// admin_features_section start
Route::get('/admin_features_section', [AdminController::class, 'admin_features_section'])->name('admin_features_section');
Route::post('/add_features_section', [AdminController::class, 'add_features_section']);
Route::post('/edit_features_section/{id}', [AdminController::class, 'edit_features_section']);
Route::get('/delete_features_section/{id}', [AdminController::class, 'delete_features_section']);
//admin_features_section end 


// admin_servis start
Route::get('/admin_servis', [AdminController::class, 'admin_servis'])->name('admin_servis');
Route::post('/add_servis', [AdminController::class, 'add_servis']);
Route::post('/edit_servis/{id}', [AdminController::class, 'edit_servis']);
Route::get('/delete_servis/{id}', [AdminController::class, 'delete_servis']);
//admin_servis end 

// team Section start
Route::get('/admin_team', [AdminController::class, 'admin_team'])->name('admin_team');
Route::post('/add_team', [AdminController::class, 'add_team']);
Route::post('/edit_team/{id}', [AdminController::class, 'edit_team']);
Route::get('/delete_team/{id}', [AdminController::class, 'delete_team']);
//Admin_team Section end 
