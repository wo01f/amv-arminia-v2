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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/datasecurity', [App\Http\Controllers\HomeController::class, 'datasecurity'])->name('datasecurity');

Route::get('/impress', [App\Http\Controllers\HomeController::class, 'impress'])->name('impress');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


Route::put('/admin/roles', [App\Http\Controllers\AdminController::class, 'roles']);
Route::put('/admin/events', [App\Http\Controllers\AdminController::class, 'events']);
Route::get('/admin/events/delete/{event}', [App\Http\Controllers\AdminController::class, 'events_delete']);
Route::get('/admin/events/edit/{event}', [App\Http\Controllers\AdminController::class, 'events_edit']);
Route::patch('/admin/events/edit/{event}',[App\Http\Controllers\AdminController::class, 'events_update']);
Route::put('/admin/reaccuring_events', [App\Http\Controllers\AdminController::class, 'reaccuring_events']);
Route::get('/admin/reaccuring_events/delete/{reaccuring_event}', [App\Http\Controllers\AdminController::class, 'reaccuring_events_delete']);
Route::get('/admin/reaccuring_events/edit/{reaccuring_event}', [App\Http\Controllers\AdminController::class, 'reaccuring_events_edit']);
Route::patch('/admin/reaccuring_events/edit/{reaccuring_event}',[App\Http\Controllers\AdminController::class, 'reaccuring_events_update']);

Route::get('/admin/article/edit/{article}', [App\Http\Controllers\AdminController::class, 'article_edit']);
Route::patch('/admin/article/edit/{article}',[App\Http\Controllers\AdminController::class, 'article_update']);



Auth::routes();

