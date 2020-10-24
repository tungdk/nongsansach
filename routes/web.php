<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\CategoryController;
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


Route::group(['prefix'=>'admin'], function (){
    Route::get('/', function () {
        return view('admin.index');
    });

    //Category
    Route::group(['prefix'=>'category'], function (){

        Route::get('', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('create', [CategoryController::class, 'store']);

        Route::get('edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('edit', [CategoryController::class, 'update']);

        Route::get('active/{id}', [CategoryController::class, 'active'])->name('admin.category.active');
        Route::delete('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');



    });

});

