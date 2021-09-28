<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TackleController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\OptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home/{tacles}', [HomeController::class, 'show'])->name('show.tacles');

Auth::routes();


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home-admin');

    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubcategoryController::class );
    Route::resource('tacles', TackleController::class);
    Route::resource('option', OptionController::class);
});


