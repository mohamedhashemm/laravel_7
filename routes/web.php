<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', function () {
            return view('welcome');
        });

        Auth::routes();

        //Normal Users Routes List
        Route::middleware(['auth', 'checkAdmin:user'])->group(function () {

            Route::get('/user/home', [HomeController::class, 'index'])->name('home');
            Route::get('/user/eventlist', 'EventListController@index')->name('eventlist');
            Route::get('/user/eventDetails', 'EventDetailsController@index')->name('eventDetails');

            //add new member in template
            Route::post('/user/addMember', 'MemberController@addMember')->name('addMember');
        });

        //Admin Routes List
        Route::middleware(['auth', 'checkAdmin:admin'])->group(function () {

            Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

            Route::get('/admin/category', 'CategoryController@index')->name('cate');
            Route::get('/admin/product', 'ProductController@index')->name('product');


            // crud operations Category
            Route::get('/admin/category/show/{id}', 'CategoryController@show')->name('category.show');
            Route::get('/admin/category/delete/{id}', 'CategoryController@delete')->name('category.delete');
            Route::get('/admin/category/edit/{id}', 'CategoryController@edit')->name('category.edit');

            // create new categories
            Route::get('/admin/category/create', 'CategoryController@create')->name('category.create');

            // save categories
            Route::post('/admin/category/save', 'CategoryController@save')->name('category.save');

            // update save category after edit
            Route::post('/admin/category/update', 'CategoryController@update')->name('category.update');

            // crud operation Product
            Route::get('/admin/product/show/{id}', 'ProductController@show')->name('product.show');
            Route::get('/admin/product/delete/{id}', 'ProductController@delete')->name('product.delete');
            Route::get('/admin/product/edit/{id}', 'ProductController@edit')->name('product.edit');

            // create new product
            Route::get('/admin/product/create', 'ProductController@create')->name('product.create');

            // save product
            Route::post('/admin/product/save', 'ProductController@save')->name('product.save');
            Route::post('/admin/product/update', 'ProductController@update')->name('product.update');
        });

        //Admin Routes List
        Route::middleware(['auth', 'checkAdmin:manager'])->group(function () {

            Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

        });
    }
);
