<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\tareasController;
use App\Http\Controllers\inscripcionesController;
use App\Http\Controllers\sneackersController;
use App\Http\Controllers\appsController;
use App\Http\Controllers\libreriasController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('librerias')->group(function (){
    Route::get('/get', [libreriasController::class, 'get']);
    Route::get('/get/{id}', [libreriasController::class, 'getById']);
    Route::post('/', [libreriasController::class, 'create']);
    Route::put('/{id}', [libreriasController::class, 'update']);
    Route::delete('/{id}', [libreriasController::class, 'delete']);
});

Route::prefix('apps')->group(function (){
    Route::get('/get', [appsController::class, 'get']);
    Route::get('/{id}', [appsController::class, 'getById']);
    Route::post('/', [appsController::class, 'create']);
    Route::put('/{id}', [appsController::class, 'update']);
    Route::delete('/{id}', [appsController::class, 'delete']);
});

Route::prefix('sneackers')->group(function () {
    Route::get('/get', [sneackersController::class, 'get']);
    Route::post('/', [sneackersController::class, 'create']);
    Route::put('/{id}', [sneackersController::class, 'update']);
    Route::delete('/{id}', [sneackersController::class, 'delete']);
    Route::get('/{id}', [sneackersController::class, 'getById']);
    Route::put('/sumSize/{id}', [sneackersController::class, 'sumSize']);
    Route::put('/resSize/{id}', [sneackersController::class, 'resSize']);
});

Route::prefix('getinfo')->group(function () {
    Route::get('/get', [tareasController::class, 'get']);
    Route::post('/', [tareasController::class, 'create']);
    Route::put('/{id}', [tareasController::class, 'update']);
    Route::delete('/{id}', [tareasController::class, 'delete']);
    Route::get('/{id}', [tareasController::class, 'getById']);
});

Route::prefix('getinfo')->group(function () {
    Route::get('/get', [inscripcionesController::class, 'get']);
    Route::post('/', [inscripcionesController::class, 'create']);
    Route::put('/{id}', [inscripcionesController::class, 'update']);
    Route::delete('/{id}', [inscripcionesController::class, 'delete']);
    Route::get('/{id}', [inscripcionesController::class, 'getById']);
});