<?php

use App\Http\Controllers\Site\AboutUsController;
use App\Http\Controllers\Site\CheckoutController;
use App\Http\Controllers\Site\FavouriteController;
use App\Http\Controllers\Site\PolicyController;
use App\Http\Controllers\Site\PostCategoryController;
use App\Http\Controllers\Site\PostController;
use App\Http\Controllers\Site\SearchController;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Site\HomeController;
use \App\Http\Controllers\Site\ContactController as SiteContactController;
use \App\Http\Controllers\Site\CartController as SiteCartController;
use \App\Http\Controllers\Site\CategoryController as SiteCategoryController;

use \App\Http\Controllers\Site\UserController as SiteUserController;
use \App\Http\Controllers\Site\AuthController;
use \App\Http\Controllers\Site\Auth\SocialController;
use \App\Http\Controllers\Site\SiteController;
use \App\Http\Controllers\Site\CommentController as SiteCommentController;

use \App\Http\Controllers\Site\ProductController as SiteProductController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;

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




//website
Route::get('',  [HomeController::class,'index']);
Route::get('home',  [HomeController::class,'index'])->name('site.home');

//login
Route::get('login',  [AuthController::class,'login'])->name('site.login.get');
Route::post('login',  [AuthController::class,'postLogin'])->name('site.login.post');

Route::get('register', [AuthController::class, 'register'])->name('site.register');
Route::post('register', [AuthController::class, 'postRegister'])->name('site.register.post');

//logout
Route::get('logout',  [AuthController::class,'logout'])->name('site.logout');


//Xác thực link đã gửi qua mail
Route::get('register/verify/{code}', [AuthController::class, 'verify_register']);

//Gửi lại mail xác thực
Route::post('resend/verify/email', [AuthController::class, 'resend_email'])->name('site.resend.email');

//login social (facebook + google)
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);

//product
Route::get('product',  [SiteProductController::class,'detail'])->name('detail');

//contact
Route::get('contact', [SiteContactController::class, 'index'])->name('site.contact.index');
Route::post('contact', [SiteContactController::class, 'store'])->name('site.contact.store');

Route::group(['middleware'=>'auth:web'], function (){

    //cart
    Route::group(['prefix'=>'cart'], function (){
        Route::get('', [SiteCartController::class, 'index'])->name('site.cart.index');
        Route::get('add/{id}/{quantity}', [SiteCartController::class, 'add'])->name('site.cart.add');
        Route::post('update', [SiteCartController::class, 'update'])->name('site.cart.update');
        Route::post('delete', [SiteCartController::class, 'delete'])->name('site.cart.delete');
    });

    //user
    Route::group(['prefix'=>'user'], function (){
        Route::get('', [SiteUserController::class, 'index'])->name('site.user.index');
        Route::group(['prefix'=>'account'], function (){
            Route::get('profile', [SiteUserController::class, 'profile'])->name('site.user.account.profile');
            Route::post('profile', [SiteUserController::class, 'update_profile'])->name('site.user.account.update_profile');
            Route::get('password', [SiteUserController::class, 'password'])->name('site.user.account.password');
            Route::post('password', [SiteUserController::class, 'change_password'])->name('site.user.account.change_password');

        });
        Route::get('purchase', [SiteUserController::class, 'purchase'])->name('site.user.purchase');
        Route::post('cancel_order', [SiteUserController::class, 'cancel_order'])->name('site.user.cancel_order');
        Route::post('view-order', [SiteUserController::class, 'view_order'])->name('site.order.view');


        Route::get('comment', [SiteUserController::class, 'comment'])->name('site.user.comment');

        Route::get('favourite', [SiteUserController::class, 'favourite'])->name('site.user.favourite');
        Route::post('delete-favourite', [SiteUserController::class, 'delete_favourite'])->name('site.user.delete_favourite');
    });


    Route::group(['prefix'=>'favourite'], function (){
        Route::get('add/{id}', [FavouriteController::class, 'add'])->name('site.favourite.add');
    });

    Route::get('check-out', [CheckoutController::class, 'index'])->name('site.checkout.index');
    Route::post('check-out', [CheckoutController::class, 'check_out'])->name('site.checkout.post');

    Route::post('check_coupon', [CheckoutController::class, 'check_coupon'])->name('site.check_coupon');

    Route::post('comment', [SiteCommentController::class, 'store'])->name('site.comment.store');

});



Route::get('product/{id}/{slug}', [SiteProductController::class, 'detail_product'])
    ->name('site.product.detail');

//category
Route::get('category/{id}/{slug}',[SiteCategoryController::class, 'detail'])->name('site.category.detail');
Route::get('category',[SiteCategoryController::class, 'index'])->name('site.category.index');


Route::post('subscribe', [SiteController::class, 'subscribe'])->name('site.subscribe');

Route::get('auth/email/verify', [AuthController::class, 'verify'])->name('auth.email.verify');

Route::post('load_comment', [SiteCommentController::class, 'load_comment'])->name('site.comment.load');

Route::post('count_cart', [SiteController::class, 'count_cart'])->name('site.count.cart');

Route::get('policy/{id}/{slug}', [PolicyController::class, 'detail'])->name('site.policy.detail');

//post
Route::get('posts', [PostController::class, 'index'])->name('site.post.index');
Route::get('post/{id}/{slug}', [PostController::class, 'detail'])->name('site.post.detail');
Route::get('post/search', [PostController::class, 'search'])->name('site.post.search');

//post_category
Route::get('post_category/{id}/{slug}', [PostCategoryController::class, 'detail'])->name('site.post_category.detail');

Route::get('about_us', [AboutUsController::class, 'index'])->name('site.about_us.index');

Route::get('search', [SearchController::class, 'index'])->name('site.search.index');

Route::get('test', [\App\Http\Controllers\Site\UserController::class, 'purchase']);
