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

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'indexController');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function() {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', IndexController::class);
    });

    Route::group(['namespace' => 'Category', 'prefix'=>'categories'], function () {
        Route::get('/', IndexController::class)->name('admin.category.index');
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::post('/', StoreController::class)->name('admin.category.store');
    });
});



Auth::routes();
