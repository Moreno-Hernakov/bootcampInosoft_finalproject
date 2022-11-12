    <?php

use App\Http\Controllers\CostController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\InternalController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use MongoDB\Operation\InsertOne;

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

            // modify
            Route::put('edit_instruction', [InstructionController::class, 'edit']);
            Route::put('edit_cost', [CostController::class, 'edit']);
            Route::put('edit_invoice', [InvoiceController::class, 'edit']);
            Route::put('/edit_internal', [InternalController::class, 'edit']);

            // receive invoice
            Route::put('/recieve_invoice', [InstructionController::class, 'recieveInvoice']);
            Route::get('/complete_instruction',[InstructionController::class, 'showComplete']);    
            Route::get('/exportpdf/{id}',[InstructionController::class, 'exportpdf'])->name('exportpdf');    
          
            
            
        });
    });
});
