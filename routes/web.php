<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MyAgeController;
use App\Http\Controllers\MyHobbyController;
use App\Http\Controllers\MyNameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
	return view('main');
})->name('main');

Route::get('/zeka', [MyNameController::class, 'idx']);

Route::get('/age', [MyAgeController::class, 'idx']);

Route::get('/hobby', [MyHobbyController::class, 'idx']);

/**
 * Do this!
 */
Route::controller(PostController::class)->group(function () {
	Route::get('/posts', 'index')->name('posts.index');
	Route::get('/posts/create', 'create')->name('posts.create');
	Route::post('/posts', 'store')->name('posts.store');
	Route::get('/posts/{post}', 'show')->name('posts.show');
	Route::get('/posts/{post}/edit', 'edit')->name('posts.edit');
	Route::patch('/posts/{post}', 'update')->name('posts.update');
	Route::delete('/posts/{post}', 'destroy')->name('posts.destroy');
});

/**
 * Not this!
 */
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::patch('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

/**
 * And this!
 */
Route::get('/devices', [DeviceController::class, 'index'])->name('devices.index');
Route::get('/devices/create', [DeviceController::class, 'create'])->name('devices.create');
Route::post('/devices', [DeviceController::class, 'store'])->name('devices.store');
Route::get('/devices/{device}', [DeviceController::class, 'show'])->name('devices.show');
Route::get('/devices/{device}/edit', [DeviceController::class, 'edit'])->name('devices.edit');
Route::patch('/devices/{device}', [DeviceController::class, 'update'])->name('devices.update');
Route::delete('/devices/{device}', [DeviceController::class, 'destroy'])->name('devices.destroy');