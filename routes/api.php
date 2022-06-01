<?php
use App\Http\Controllers\LoadController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
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
// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/loads', [LoadController::class, 'store']);

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/loads', [LoadController::class, 'index']);
    Route::get('/vehicles', [VehicleController::class, 'index']);
    Route::get('/vehicles/search/{category}', [VehicleController::class, 'search']);
    Route::get('/vehicles/{id}', [VehicleController::class, 'show']);
    Route::post('/vehicles', [VehicleController::class, 'store']);
    Route::put('/vehicles/{id}', [VehicleController::class, 'update']);
    Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
// 

// 

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 