<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
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

Route::prefix("auth")->group(function () {
    Route::post('/register', [AuthController::class, "register"]);
    Route::post('/login', [AuthController::class, "login"]);
});

Route::middleware('auth')->controller(TodoController::class)->prefix("todo")->group(function () {
    Route::get('/', [TodoController::class, "index"]);
    Route::get('/{id}', [TodoController::class, "show"]);
    Route::post('/', [TodoController::class, "create"]);
    Route::put('/{id}', [TodoController::class, "update"]);
    Route::delete('/{id}', [TodoController::class, "delete"]);
});


Route::fallback(function () {
    return response()->json([
        'message' => 'Không tồn tại Route này !!!'
    ], 404);
});
