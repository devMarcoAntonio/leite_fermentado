<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LojaController;


Route::get('/', [LojaController::class,'index']);
