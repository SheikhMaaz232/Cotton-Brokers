<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {

    //City routes
    Route::group(['prefix' => 'city'], function () {
        Route::get('list', ['as' => 'city.list', 'uses' => 'App\Http\Controllers\CityController@index']);
        Route::get('create', ['as' => 'city.create', 'uses' => 'App\Http\Controllers\CityController@create']);
        Route::post('save', ['as' => 'city.save', 'uses' => 'App\Http\Controllers\CityController@store']);
        Route::get('edit/{id}', ['as' => 'city.edit', 'uses' => 'App\Http\Controllers\CityController@edit']);
        Route::post('update', ['as' => 'city.update', 'uses' => 'App\Http\Controllers\CityController@update']);
        Route::delete('delete/{id}', ['as' => 'city.delete', 'uses' => 'App\Http\Controllers\CityController@destroy']);
        Route::post('show/{id}', ['as' => 'city.show', 'uses' => 'App\Http\Controllers\CityController@show']);
         Route::get('search', ['as' => 'city.search', 'uses' => 'App\Http\Controllers\CityController@search']);

    });

    //Seller routes
    Route::group(['prefix' => 'seller'], function () {
        Route::get('list', ['as' => 'seller.list', 'uses' => 'App\Http\Controllers\SellerController@index']);
        Route::get('create', ['as' => 'seller.create', 'uses' => 'App\Http\Controllers\SellerController@create']);
        Route::post('save', ['as' => 'seller.save', 'uses' => 'App\Http\Controllers\SellerController@store']);
        Route::get('edit/{id}', ['as' => 'seller.edit', 'uses' => 'App\Http\Controllers\SellerController@edit']);
        Route::post('update', ['as' => 'seller.update', 'uses' => 'App\Http\Controllers\SellerController@update']);
        Route::delete('delete/{id}', ['as' => 'seller.delete', 'uses' => 'App\Http\Controllers\SellerController@destroy']);
        Route::post('show/{id}', ['as' => 'seller.show', 'uses' => 'App\Http\Controllers\SellerController@show']);
         Route::get('search', ['as' => 'seller.search', 'uses' => 'App\Http\Controllers\SellerController@search']);

    });


    //Buyer routes
    Route::group(['prefix' => 'buyer'], function () {
        Route::get('list', ['as' => 'buyer.list', 'uses' => 'App\Http\Controllers\BuyerController@index']);
        Route::get('create', ['as' => 'buyer.create', 'uses' => 'App\Http\Controllers\BuyerController@create']);
        Route::post('save', ['as' => 'buyer.save', 'uses' => 'App\Http\Controllers\BuyerController@store']);
        Route::get('edit/{id}', ['as' => 'buyer.edit', 'uses' => 'App\Http\Controllers\BuyerController@edit']);
        Route::post('update', ['as' => 'buyer.update', 'uses' => 'App\Http\Controllers\BuyerController@update']);
        Route::delete('delete/{id}', ['as' => 'buyer.delete', 'uses' => 'App\Http\Controllers\BuyerController@destroy']);
        Route::post('show/{id}', ['as' => 'buyer.show', 'uses' => 'App\Http\Controllers\BuyerController@show']);
         Route::get('search', ['as' => 'buyer.search', 'uses' => 'App\Http\Controllers\BuyerController@search']);
    });

        //Employee routes
        Route::group(['prefix' => 'employee'], function () {
            Route::get('list', ['as' => 'employee.list', 'uses' => 'App\Http\Controllers\EmployeeController@index']);
            Route::get('create', ['as' => 'employee.create', 'uses' => 'App\Http\Controllers\EmployeeController@create']);
            Route::post('save', ['as' => 'employee.save', 'uses' => 'App\Http\Controllers\EmployeeController@store']);
            Route::get('edit/{id}', ['as' => 'employee.edit', 'uses' => 'App\Http\Controllers\EmployeeController@edit']);
            Route::post('update', ['as' => 'employee.update', 'uses' => 'App\Http\Controllers\EmployeeController@update']);
            Route::delete('delete/{id}', ['as' => 'employee.delete', 'uses' => 'App\Http\Controllers\EmployeeController@destroy']);
            Route::post('show/{id}', ['as' => 'employee.show', 'uses' => 'App\Http\Controllers\EmployeeController@show']);
             Route::get('search', ['as' => 'employee.search', 'uses' => 'App\Http\Controllers\EmployeeController@search']);
        });

});
