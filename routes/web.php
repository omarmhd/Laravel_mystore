<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {

    //product
    Route::post('/store-product', 'ProductController@store')->name('product.store');
    Route::get('/create-product', 'ProductController@create');
    Route::get('/view-product', 'ProductController@index')->name('product.index');
    Route::get('/delete-product/{id}', 'ProductController@destroy');
    Route::get('/edit-product/{id}', 'ProductController@edit')->name('product.edit');
    Route::put('/update-product/{id}', 'ProductController@update')->name('product.update');

    //category

    Route::get('/view-category', 'CategoryController@index')->name('category.index');;
    Route::post('/store-category', 'CategoryController@store')->name('category.store');
    Route::get('/create-category', 'CategoryController@create')->name('category.create');
    Route::get('/delete-category/{id}', 'CategoryController@destroy')->name('category.delete');
    Route::get('/edit-category/{id}', 'CategoryController@edit')->name('category.edit');
    Route::put('/update-category/{id}', 'CategoryController@update')->name('category.update');

    //role3

    Route::get('/view-role', 'RoleController@index')->name('role.index');;
    Route::post('/store-role', 'RoleController@store')->name('role.store');
    Route::get('/create-role', 'RoleController@create')->name('role.create');
    Route::get('/delete-role/{id}', 'RoleController@destroy')->name('role.delete');
    Route::get('/edit-role/{id}', 'RoleController@edit')->name('role.edit');
    Route::put('/update-role/{id}', 'RoleController@update')->name('role.update');

    //users

    Route::get('/view-user', 'UserController@index')->name('user.index');;
    Route::get('/delete-user/{id}', 'UserController@destroy')->name('user.delete');
    Route::get('/edit-user/{id}', 'UserController@edit')->name('user.edit');
    Route::put('/update-user/{id}', 'UserController@update')->name('user.update');


    Route::get('/order-user','OrderController@index')->name('user.order');
    Route::get('/order-status/{id}','OrderController@update')->name('status.update.order');
    Route::get('/order-remove/{id}','OrderController@destory')->name('status.remove.order');


});


    Route::get('/category_products/{id}', 'HomeController@category_products')->name('home.category_products');
    Route::get('/show_product/{id}', 'HomeController@show')->name('home.show');

        Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');
    Route::post('/store_cart/{id}', 'CartController@store')->name('cart.store')->middleware('auth');
    Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');

    Route::get('/checkout', function () {
         return view('checkout');  })->name('checkout.index');

   Route::post('/store-order','OrderController@store')->name('order.store');
