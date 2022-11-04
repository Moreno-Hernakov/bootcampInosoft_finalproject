<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'auth'
], function() {
    Route::post('login', 'App\Http\Controllers\UserController@login');
    Route::post('register','App\Http\Controllers\UserController@register');
    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::post('logout','App\Http\Controllers\UserController@logout');
        Route::post('refresh','App\Http\Controllers\UserController@refresh');
        
        Route::prefix('instruction')->group(function() {
            Route::post('add_instruction','App\Http\Controllers\InstructionController@add');    
            Route::get('show_instruction','App\Http\Controllers\InstructionController@show');    
            Route::get('detail_instruction/{id}','App\Http\Controllers\InstructionController@detail');
            
            Route::post('add_cost','App\Http\Controllers\CostController@add');  
            Route::post('add_internal','App\Http\Controllers\InternalController@add');
            Route::post('add_invoice','App\Http\Controllers\InvoiceController@add');
            
        });
    });
});
