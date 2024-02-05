<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowStudentController;


Route::get('/',[ShowStudentController::class,'showStudent']);