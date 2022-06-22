<?php

use App\Http\Controllers\API\MovieAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
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

Route::prefix('v1') -> group(function() {

    Route::get('/view/movie/genre', [MovieAPIController::class, 'viewMovieGenre']);
    Route::get('/view/movie/timeslot', [MovieAPIController::class, 'viewMovieTimeSlot']);
    Route::get('/view/movie/theater', [MovieAPIController::class, 'viewMovieTheater']);
    Route::get('/view/movie/performer', [MovieAPIController::class, 'viewMoviePerformer']);
    Route::post('/store/movie/rating', [MovieAPIController::class, 'storeMovieRating']);
    Route::get('/view/movie/date', [MovieAPIController::class, 'viewMovieDate']);
    Route::post('/store/movie', [MovieAPIController::class, 'storeMovie']);
    
});




