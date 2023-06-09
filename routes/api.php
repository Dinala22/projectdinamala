<?php

use App\Http\Controllers\API\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('products')->group(function(){
    Route::get('', [ProductController::class,'index']);
    Route::post('', [ProductController::class,'store']);
    Route::put('/{id}', [ProductController::class,'update']);
    Route::get('/{id}', [ProductController::class,'show']);
    Route::delete('/{id}', [ProductController::class,'destroy']);
});
