<?php

use App\Http\Controllers\Admin\ChatController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\ProductController;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\Admin\UnitController;
use \App\Http\Controllers\Admin\PostCategoryController;
use \App\Http\Controllers\Admin\CouponController;
use \App\Http\Controllers\Admin\PostController;
use \App\Http\Controllers\Admin\SettingController;
use \App\Http\Controllers\Admin\SliderController;
use \App\Http\Controllers\Admin\ContactController;
use \App\Http\Controllers\Admin\UserController;
use \App\Http\Controllers\Admin\Auth\LoginController;
use \App\Http\Controllers\Admin\StatisticalController;


//login admin
Route::get('login', [LoginController::class, 'getLogin'])->name('admin.login');
Route::post('login', [LoginController::class, 'postLogin']);
Route::get('logout', [LoginController::class, 'getLogout'])->name('admin.logout');

Route::group(['middleware' => 'auth:admin'], function () {
    //dashboard
    Route::get('', [DashboardController::class, 'index'])->name('admin.home');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

//Category
    Route::group(['prefix' => 'category'], function () {

        Route::get('', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('create', [CategoryController::class, 'store']);

        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('edit/{id}', [CategoryController::class, 'update']);

        Route::get('active/{id}', [CategoryController::class, 'active'])->name('admin.category.active');
        Route::delete('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');


    });

//Unit
    Route::group(['prefix' => 'unit'], function () {

        Route::get('', [UnitController::class, 'index'])->name('admin.unit.index');
        Route::get('create', [UnitController::class, 'create'])->name('admin.unit.create');
        Route::post('create', [UnitController::class, 'store']);

        Route::get('edit/{id}', [UnitController::class, 'edit'])->name('admin.unit.edit');
        Route::post('edit/{id}', [UnitController::class, 'update']);

        Route::get('active/{id}', [UnitController::class, 'active'])->name('admin.unit.active');
        Route::delete('delete/{id}', [UnitController::class, 'delete'])->name('admin.unit.delete');
    });

//Product
    Route::group(['prefix' => 'product'], function () {

        Route::get('', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('create', [ProductController::class, 'store']);

        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('edit/{id}', [ProductController::class, 'update']);

        Route::get('active/{id}', [ProductController::class, 'active'])->name('admin.product.active');
        Route::get('hot/{id}', [ProductController::class, 'hot'])->name('admin.product.hot');

        Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');

        Route::post('sendMail', [ProductController::class, 'sendMail'])->name('admin.product.sendMail');

    });

//Post
    Route::group(['prefix' => 'post'], function () {
//Category post
        Route::group(['prefix' => 'category'], function () {
            Route::get('', [PostCategoryController::class, 'index'])->name('admin.postcate.index');
            Route::get('create', [PostCategoryController::class, 'create'])->name('admin.postcate.create');
            Route::post('create', [PostCategoryController::class, 'store']);

            Route::get('edit/{id}', [PostCategoryController::class, 'edit'])->name('admin.postcate.edit');
            Route::post('edit/{id}', [PostCategoryController::class, 'update']);

            Route::get('active/{id}', [PostCategoryController::class, 'active'])->name('admin.postcate.active');
            Route::get('hot/{id}', [PostCategoryController::class, 'hot'])->name('admin.postcate.hot');

            Route::delete('delete/{id}', [PostCategoryController::class, 'delete'])->name('admin.postcate.delete');
        });

//Post
        Route::get('', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('create', [PostController::class, 'store']);

        Route::get('edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
        Route::post('edit/{id}', [PostController::class, 'update']);

        Route::get('active/{id}', [PostController::class, 'active'])->name('admin.post.active');
        Route::get('hot/{id}', [PostController::class, 'hot'])->name('admin.post.hot');

        Route::get('delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete');

//Post trash
        Route::get('trash', [PostController::class, 'trash'])->name('admin.post.trash');

        Route::post('sendMail', [PostController::class, 'sendMail'])->name('admin.post.sendMail');

    });

//Coupon
    Route::group(['prefix' => 'coupon'], function () {

        Route::get('', [CouponController::class, 'index'])->name('admin.coupon.index');
        Route::get('create', [CouponController::class, 'create'])->name('admin.coupon.create');
        Route::post('create', [CouponController::class, 'store']);

        Route::get('edit/{id}', [CouponController::class, 'edit'])->name('admin.coupon.edit');
        Route::post('edit/{id}', [CouponController::class, 'update']);

        Route::get('active/{id}', [CouponController::class, 'active'])->name('admin.coupon.active');
        Route::delete('delete/{id}', [CouponController::class, 'delete'])->name('admin.coupon.delete');

        Route::post('sendMail', [CouponController::class, 'sendMail'])->name('admin.coupon.sendMail');
    });

//Setting
    Route::group(['prefix' => 'setting'], function () {
        Route::get('admin', [SettingController::class, 'admin'])->name('admin.setting.admin');
        Route::post('admin', [SettingController::class, 'update_index']);

        Route::get('website', [SettingController::class, 'website'])->name('admin.setting.website');
        Route::post('website', [SettingController::class, 'update_website']);

        Route::get('social', [SettingController::class, 'social'])->name('admin.setting.social');
        Route::post('social', [SettingController::class, 'update_social']);


    });

//Slider
    Route::group(['prefix' => 'slider'], function () {

        Route::get('', [SliderController::class, 'index'])->name('admin.slider.index');
        Route::get('create', [SliderController::class, 'create'])->name('admin.slider.create');
        Route::post('create', [SliderController::class, 'store']);

        Route::get('edit/{id}', [SliderController::class, 'edit'])->name('admin.slider.edit');
        Route::post('edit/{id}', [SliderController::class, 'update']);

        Route::get('active/{id}', [SliderController::class, 'active'])->name('admin.slider.active');
        Route::delete('delete/{id}', [SliderController::class, 'delete'])->name('admin.slider.delete');
    });

//Contact
    Route::group(['prefix' => 'contact'], function () {

        Route::get('', [ContactController::class, 'index'])->name('admin.contact.index');

    });

//User - khách hàng
    Route::group(['prefix' => 'user'], function () {
        Route::get('', [UserController::class, 'index'])->name('admin.user.index');
    });

    Route::group(['prefix' => 'statistical'], function () {
        Route::get('', [StatisticalController::class, 'index'])->name('admin.statistical.index');
    });


    //chat
    Route::group(['prefix'=>'chat'], function (){
        Route::get('', [ChatController::class, 'index'])->name('admin.chat.index');
    });

    Route::get('test', [PostController::class, 'test']);
});

