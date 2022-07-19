<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         $users=User::all();
//         return view('admin.index');
//     })->name('dashboard');
// });





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


        });


    });




Route::get('/user/logout' , [UserController::class , 'Logout'])->name('user.logout');


