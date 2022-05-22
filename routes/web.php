<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


Route::put('/admin/roles', [App\Http\Controllers\AdminController::class, 'roles']);
Route::put('/admin/events', [App\Http\Controllers\AdminController::class, 'events']);
Route::get('/admin/events/delete/{event}', [App\Http\Controllers\AdminController::class, 'events_delete']);
Route::get('/admin/events/edit/{event}', [App\Http\Controllers\AdminController::class, 'events_edit']);
Route::patch('/admin/events/edit/{event}',[App\Http\Controllers\AdminController::class, 'events_update']);


Auth::routes();

