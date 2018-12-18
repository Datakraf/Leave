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

Route::prefix('leaves')->group(function () {
    Route::get('/', 'LeavesController@index')->name('leave.index');
    Route::post('/', 'LeavesController@store')->name('leave.store');
    Route::get('/apply', ['uses' => 'LeavesController@showLeaveApplicationForm', 'as' => '']);
    Route::group(['prefix' => 'administration'], function () {
        Route::group(['prefix' => 'leave-types'], function () {
            Route::get('/', ['uses' => 'LeaveTypesController@index', 'as' => 'leave-type.index']);
            Route::post('store', ['uses' => 'LeaveTypesController@store', 'as' => 'leave-type.store']);
            Route::post('{id}/update', ['uses' => 'LeaveTypesController@update', 'as' => 'leave-type.update']);
            Route::get('{id}/edit', ['uses' => 'LeaveTypesController@edit', 'as' => 'leave-type.edit']);
            Route::delete('{id}/delete', ['uses' => 'LeaveTypesController@destroy', 'as' => 'leave-type.destroy']);
        });
    });

});
