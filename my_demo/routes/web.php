<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\sessionController;

Route::view('/','home');

Route::controller(JobController::class)->group(function() {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit'); 
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
}); 

Route::view('/contact', 'contact');

Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);

Route::get('/login', [sessionController::class, 'create']);
Route::post('/login', [sessionController::class, 'store']);
Route::post('/logout', [sessionController::class, 'destroy']);