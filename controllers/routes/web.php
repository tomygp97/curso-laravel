<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index'); //? Primer valor del array es el controlador y el segundo es que funcion del controlador