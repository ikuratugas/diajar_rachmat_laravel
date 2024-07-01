<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class,'index']);

Route::get('/utamani', [StudentController::class,'utamanih']);
Route::get('/utamani/{nim}', [StudentController::class,'detail']);