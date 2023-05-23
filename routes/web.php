<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Contact;
use App\Models\Task;

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
// Old Routes Task-2

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::get('about', [HomeController::class, 'about'])->middleware('auth');
Route::get('services', [HomeController::class, 'services'])->middleware('auth');
Route::get('contact', [HomeController::class, 'contact'])->middleware('auth');
Route::post('/contact', [HomeController::class, 'store_data'])->middleware('auth');

// New Routes Task 3
Route::get('/messages', [HomeController::class, 'message'])->middleware('auth');
Route::get('/messages/delete/{id}', [HomeController::class, 'deleteMessage'])->name('messages.deleteMessage')->middleware('auth');
Route::get('/messages/editContact/{id}', [HomeController::class, 'editMessage'])->name('messages.editMessage')->middleware('auth');
Route::post('/messages/update/{id}', [HomeController::class, 'updateMessage'])->name('messages.updateMessage')->middleware('auth');

// CRUD Assigment # 4
Route::get('/add-task', [HomeController::class, 'addTask'])->middleware('auth');
Route::post('/add-task', [HomeController::class, 'store_task'])->middleware('auth');
Route::get('/', [HomeController::class, 'show_task'])->middleware('auth');
Route::get('/delete/{id}', [HomeController::class, 'delete_task'])->name('delete_task')->middleware('auth');
Route::get('/edit-task/{id}', [HomeController::class, 'edit_task'])->name('edit_task')->middleware('auth');
Route::post('/update/{id}', [HomeController::class, 'update_task'])->name('update_task')->middleware('auth');


