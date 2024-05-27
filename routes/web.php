<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stcontroller;
use App\Http\Controllers\teacherscontroller;
use App\Http\Controllers\coursecontroller;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('layout');
});


Route::resource('/students',stcontroller::class);
Route::resource('/teachers',teacherscontroller::class);
Route::resource('/course',coursecontroller::class);
Route::resource('/batches',BatchController::class);
Route::resource('/enrollments',EnrollmentController::class);
Route::resource('/payments',PaymentController::class);
Route::get('/report/report1/{pid}', [ReportController::class, 'report1']);
