<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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
    return redirect('users');
});

Auth::routes();

Route::get('/users', [App\Http\Controllers\EmployeeController::class, 'index'])->name('users');
Route::get('/users/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('create');
Route::get('/users/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('edit');
Route::post('/users/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('store');
Route::post('/users/update/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('update');
Route::delete('/users/delete/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('destroy');

Route::get('/task', [App\Http\Controllers\TaskController::class, 'index'])->name('task.users');
Route::get('/task/create', [App\Http\Controllers\TaskController::class, 'create'])->name('task.create');
Route::get('/task/edit/{id}', [App\Http\Controllers\TaskController::class, 'edit'])->name('task.edit');
Route::post('/task/store', [App\Http\Controllers\TaskController::class, 'store'])->name('task.store');
Route::post('/task/update/{id}', [App\Http\Controllers\TaskController::class, 'update'])->name('task.update');
Route::delete('/task/delete/{id}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('task.destroy');


// Route::resource('users', 'App\Http\Controllers\EmployeeController');

