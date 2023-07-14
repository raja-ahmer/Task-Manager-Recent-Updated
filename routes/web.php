<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controller\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about')->middleware('auth');

// Category Routes And Using Group Function to to minimize overwriting of controller class
Route::controller(App\Http\Controllers\CategoryController::class)->group(function(){
    Route::get('/category', 'category')->name('category')->middleware('auth');
    Route::get('/add-category', 'add_category')->name('add-category')->middleware('auth');
    Route::post('/add-category', 'store_category')->name('add-category')->middleware('auth');
    Route::get('/category', 'show_category')->middleware('auth');
    Route::get('/category/delete/{id}', 'delete_category')->name('delete_category')->middleware('auth');
    Route::get('/category/edit-category/{id}', 'edit_category')->name('edit_category')->middleware('auth');
    Route::post('/category/update-category/{id}', 'update_category')->name('update_category')->middleware('auth');

});


// Task Routes And Using Group Function to to minimize overwriting of controller class
Route::controller(App\Http\Controllers\TaskController::class)->group(function(){
    Route::get('/add-task', 'add_task')->name('add-task')->middleware('auth');
    Route::post('/add-task', 'store_task')->name('add-task')->middleware('auth');
    Route::get('/home', 'view_task')->name('view_task')->middleware('auth');
    Route::get('/home/delete/{id}','delete_task')->name('delete_task')->middleware('auth');
    Route::get('/home/edit-task/{id}','edit_task')->name('edit_task')->middleware('auth');
    Route::post('/home/update-task/{id}','update_task')->name('update_task')->middleware('auth');
    // Route::get('/filter', 'filter_task')->name('filter_task')->middleware('auth');

});

Route::get('/help', function () {
    return view('help');
});
