<?php

use App\Http\Controllers\BooksController;
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

Route::get('getRandomColor',function (Request $request) {
        return "green";
});

Route::apiResource('books',BooksController::class);

Route::post('/bookCreate',function (Request $request) {
    if($request->hasFile('image'))
    dd("han image h ");
    return $request->all();
});