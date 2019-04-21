<?php

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


// Admin routes
Route::group([
    'prefix' => 'administration/visa',
    'middleware' => 'auth:admin'
], function(){

    Route::resource('transportation','TransportationController');
    Route::resource('government','GovernmentController', [
        'only' => ['index', 'edit','update']
    ]);
    Route::resource('visa-service','VisaServiceController');


    Route::resource('order','Admin\OrderController');
    Route::resource('visa_discount','VisaDiscountController');
    
    Route::get('order/{id}/view-pdf/{type}','Admin\OrderController@viewPDF')->name('pdf.view');
});

