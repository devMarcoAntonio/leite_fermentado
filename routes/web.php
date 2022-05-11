<?php

use Illuminate\Support\Facades\Route;

use leite_fermentado\app\Http\Controllers\LojaController.php

Route::get('/', [LojaController::class,'index']);
