<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrisonerController;

Route::get('/prisoners', [PrisonerController::class, 'index']);
Route::get('/prisoners/PID/{PID}', [PrisonerController::class, 'show']);
Route::get('/prisoners/location/{location}', [PrisonerController::class, 'showByLocation']);
Route::get('/prisoners/name/{firstName}/{lastName}/dob/{dob}', [PrisonerController::class, 'showByCredentials']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
