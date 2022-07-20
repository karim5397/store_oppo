<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimomialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    return view('website_en.home');
});

Route::group( ['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
    {


        Route::middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified'
        ])->group(function () {
            Route::get('/dashboard', function () {
                $users=User::all();
                return view('admin.index');
            })->name('dashboard');
        });


        //admin route
        Route::prefix('admin')->middleware(['auth'])->group(function(){
            //products route
            Route::get('/all-products' , [ProductController::class , 'index'])->name('all.products');
            Route::get('/create/product' , [ProductController::class , 'create'])->name('create.product');
            Route::post('/store/product' , [ProductController::class , 'store'])->name('store.product');
            Route::get('/edit/product/{id}' , [ProductController::class , 'edit'])->name('edit.product');
            Route::post('/update/product/{id}' , [ProductController::class , 'update'])->name('update.product');
            Route::get('/delete/product/{id}' , [ProductController::class , 'destroy'])->name('delete.product');


            Route::resource('prices', PricingController::class); //prices
            Route::resource('users' ,UserController::class); //users
            Route::resource('contacts' ,ContactController::class); //contacts
            Route::resource('features' ,FeatureController::class); //features
            Route::resource('gallery' ,GalleryController::class); //gallery
            Route::resource('services' ,ServiceController::class); //services
            Route::resource('slider' ,SliderController::class); //slider
            Route::resource('members' ,MemberController::class); //members
            Route::resource('testimonials' ,TestimomialController::class); //testimonials
        });


    });




Route::get('/user/logout' , [UserController::class , 'Logout'])->name('user.logout');


