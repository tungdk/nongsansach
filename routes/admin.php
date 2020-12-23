<?php

use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PartnerController;
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
use \App\Http\Controllers\Admin\AuthController;
use \App\Http\Controllers\Admin\PolicyController;


//login admin
Route::get('login', [AuthController::class, 'getLogin'])->name('admin.login');
Route::post('login', [AuthController::class, 'postLogin']);
Route::get('logout', [AuthController::class, 'getLogout'])->name('admin.logout');

Route::group(['middleware' => 'auth:admin'], function () {
    //dashboard
    Route::get('', [DashboardController::class, 'index'])->name('admin.home');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

//Category
    Route::group(['prefix' => 'category'], function () {

        Route::get('', [CategoryController::class, 'index'])->name('admin.category.index');
//        Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::get('create', [CategoryController::class, 'get_data_index'])->name('admin.category.get_data_index');
        Route::post('create', [CategoryController::class, 'store'])->name('admin.category.create');
        Route::get('load-data', [CategoryController::class, 'load_data'])->name('admin.category.load_data');

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

    //account admin
    Route::group(['prefix'=> 'account'], function (){
        Route::get('', [AuthController::class, 'index'])->name('admin.account.index');
        Route::post('change-password', [AuthController::class, 'change_password'])->name('admin.account.change_password');
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
        Route::get('status/{id}/{status}', [ContactController::class, 'status'])->name('admin.contact.status');

    });

//User - khách hàng
    Route::group(['prefix' => 'user'], function () {
        Route::get('', [UserController::class, 'index'])->name('admin.user.index');
    });


    Route::group(['prefix' => 'partner'], function () {

        Route::get('', [PartnerController::class, 'index'])->name('admin.partner.index');
        Route::get('create', [PartnerController::class, 'create'])->name('admin.partner.create');
        Route::post('create', [PartnerController::class, 'store']);

        Route::get('edit/{id}', [PartnerController::class, 'edit'])->name('admin.partner.edit');
        Route::post('edit/{id}', [PartnerController::class, 'update']);

        Route::get('active/{id}', [PartnerController::class, 'active'])->name('admin.partner.active');
        Route::delete('delete/{id}', [PartnerController::class, 'delete'])->name('admin.partner.delete');
    });

//Policy
    Route::group(['prefix' => 'policy'], function () {

        Route::get('', [PolicyController::class, 'index'])->name('admin.policy.index');
        Route::get('create', [PolicyController::class, 'create'])->name('admin.policy.create');
        Route::post('create', [PolicyController::class, 'store']);

        Route::get('edit/{id}', [PolicyController::class, 'edit'])->name('admin.policy.edit');
        Route::post('edit/{id}', [PolicyController::class, 'update']);

        Route::get('active/{id}', [PolicyController::class, 'active'])->name('admin.policy.active');
        Route::get('hot/{id}', [PolicyController::class, 'hot'])->name('admin.policy.hot');

        Route::delete('delete/{id}', [PolicyController::class, 'delete'])->name('admin.policy.delete');

        Route::post('sendMail', [PolicyController::class, 'sendMail'])->name('admin.policy.sendMail');

    });

//order
    Route::group(['prefix' => 'order'], function () {

        Route::get('', [OrderController::class, 'index'])->name('admin.order.index');

        Route::post('view-order', [OrderController::class, 'view_order'])->name('admin.order.view');

        Route::get('action/{action}/{id}', [OrderController::class, 'getAction'])->name('admin.order.action');

        Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('admin.order.delete');
    });

    //Comment
    Route::group(['prefix' => 'comment'], function () {

        Route::get('', [CommentController::class, 'index'])->name('admin.comment.index');

        Route::post('show-home', [CommentController::class, 'show_home'])->name('admin.comment.show_home');


        Route::get('create', [CommentController::class, 'create'])->name('admin.comment.create');
        Route::post('create', [CommentController::class, 'store']);

        Route::get('edit/{id}', [CommentController::class, 'edit'])->name('admin.comment.edit');
        Route::post('edit/{id}', [CommentController::class, 'update']);

        Route::get('active/{id}', [CommentController::class, 'active'])->name('admin.comment.active');
        Route::get('hot/{id}', [CommentController::class, 'hot'])->name('admin.comment.hot');

        Route::delete('delete/{id}', [CommentController::class, 'delete'])->name('admin.comment.delete');

    });

    //chat
    Route::group(['prefix' => 'chat'], function () {
        Route::get('', [ChatController::class, 'index'])->name('admin.chat.index');
    });

    Route::get('test', [PostController::class, 'test']);
});

