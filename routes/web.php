<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\default\homeController;
use App\Http\Controllers\Auth\registerController;

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

Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/home', [homeController::class, 'index'])->name('home');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);

Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/register', [registerController::class, 'store']);

//Route:post('/tasks', [TasksController, 'store'])->name('store);
Route::delete('/tasks/{task}', [TasksController::class, 'destroy'])->name('tasks.destroy');

// Route::patch('/tasks/{task}', [TasksController::class, 'update'])->name('tasks.update');

Route::resource('/tasks', TasksController::class);