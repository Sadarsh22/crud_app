<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [StudentController::class, 'index']);

Route::post('/store', [StudentController::class, 'store']);

Route::get('/listingPage', [StudentController::class, 'show']);

Route::get('/deleteStudent/{id}',[StudentController::class,'destroy']);

Route::get('/editStudent/{id}',[StudentController::class,'edit']);

Route::post('/update/{id}',[StudentController::class,'update']);

Route::get('/viewStudent/{id}',[StudentController::class,'view']);



