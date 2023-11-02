<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register',[ApiController::class,'register']);
Route::post('/login',[ApiController::class,'login']);
Route::get('/detail',[ApiController::class,'detail'])
            ->middleware('auth:sanctum');
Route::get('user/{id}',[ApiController::class,'user']);
Route::get('users',[ApiController::class,'getAllUsers']);

Route::apiResource('/student',StudentController::class);