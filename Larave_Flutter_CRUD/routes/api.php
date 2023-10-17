<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('api/user')->group(function () {
    Route::post('/', function () {
// Matches The "/admin/users" URL
    });
    Route::get('/', function () {
// Matches The "/admin/users" URL
    });
    Route::get('/{id}', function () {
// Matches The "/admin/users" URL
    });
    Route::put('/{id}', function () {
// Matches The "/admin/users" URL
    });
    Route::delete('/{id}', function () {
// Matches The "/admin/users" URL
    });
});

