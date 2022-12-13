<?php

use App\Http\Controllers\DailyDoseController;
use App\Models\DailyDose;
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
Route::resource('daily-doses', DailyDoseController::class);

// Route::get('/daily-doses', [DailyDoseController::class, 'index']);
// Route::post('/daily-doses', [DailyDoseController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
