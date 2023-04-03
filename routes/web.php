<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MyAgeController;
use App\Http\Controllers\MyHobbyController;
use App\Http\Controllers\MyNameController;
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

Route::middleware('admin')->get('/admin', function () {
  return view('admin.index');
})->name('main');

Route::get('/zeka', [MyNameController::class, 'idx']);

Route::get('/age', [MyAgeController::class, 'idx']);

Route::get('/hobby', [MyHobbyController::class, 'idx']);

/**
 * Single-method controllers
 */
Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
  Route::get('/posts', 'IndexController')->name('posts.index');
  Route::get('/posts/create', 'CreateController')->name('posts.create');
  Route::post('/posts', 'StoreController')->name('posts.store');
  Route::get('/posts/{post}', 'ShowController')->name('posts.show');
  Route::get('/posts/{post}/edit', 'EditController')->name('posts.edit');
  Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
  Route::delete('/posts/{post}', 'DestroyController')->name('posts.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\User'], function () {
  Route::get('/users', 'IndexController')->name('users.index');
  Route::get('/users/create', 'CreateController')->name('users.create');
  Route::post('/users', 'StoreController')->name('users.store');
  Route::get('/users/{user}', 'ShowController')->name('users.show');
  Route::get('/users/{user}/edit', 'EditController')->name('users.edit');
  Route::patch('/users/{user}', 'UpdateController')->name('users.update');
  Route::delete('/users/{user?}', 'DestroyController')->name('users.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Device'], function () {
  Route::get('/devices', 'IndexController')->name('devices.index');
  Route::get('/devices/create', 'CreateController')->name('devices.create');
  Route::post('/devices', 'StoreController')->name('devices.store');
  Route::get('/devices/{device}', 'ShowController')->name('devices.show');
  Route::get('/devices/{device}/edit', 'EditController')->name('devices.edit');
  Route::patch('/devices/{device}', 'UpdateController')->name('devices.update');
  Route::delete('/devices/{device}', 'DestroyController')->name('devices.destroy');
});

Route::prefix('admin')->name('admin.')->namespace('App\Http\Controllers\Admin')->group(function () {
  Route::group(['namespace' => 'Post'], function () {
    Route::get('/posts', 'IndexController')->name('posts.index');
    Route::get('/posts/create', 'CreateController')->name('posts.create');
    Route::post('/posts', 'StoreController')->name('posts.store');
    Route::get('/posts/{post}', 'ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('posts.destroy');
  });
});

Route::prefix('admin')->name('admin.')->namespace('App\Http\Controllers\Admin')->group(function () {
  Route::group(['namespace' => 'Device'], function () {
    Route::get('/devices', 'IndexController')->name('devices.index');
    Route::get('/devices/create', 'CreateController')->name('devices.create');
    Route::post('/devices', 'StoreController')->name('devices.store');
    Route::get('/devices/{device}', 'ShowController')->name('devices.show');
    Route::get('/devices/{device}/edit', 'EditController')->name('devices.edit');
    Route::patch('/devices/{device}', 'UpdateController')->name('devices.update');
    Route::delete('/devices/{device}', 'DestroyController')->name('devices.destroy');
  });
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');