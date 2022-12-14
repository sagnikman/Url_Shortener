<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

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

Route::get('/url',[UrlController::class,'all'])->name('url.all');
Route::get('/url/{id}',[UrlController::class,'index']);
Route::post('/url',[UrlController::class,'store'])->name('create');
Route::put('/url/{id}',[UrlController::class,'update']);
Route::delete('/url/{id}',[UrlController::class,'destroy']);
