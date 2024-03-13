<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Conrrollers

use App\Http\Controllers\Api\ProjectController;

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


Route::name('api.')->group(function(){

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    // tramite la funzione only stabiliamo quali rotte saranno interessate

    Route::resource('projects', ProjectController::class)->only([
        'index','show',
    ]);
});