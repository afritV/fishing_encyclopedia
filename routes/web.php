<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SubcategoryController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin;

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

Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('/');
Route::get('/home/{post}', [App\Http\Controllers\Home\HomeController::class, 'show'])->name('show-post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home-admin');

    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubcategoryController::class );
    Route::resource('post', PostController::class);
});


