<?php

use App\Http\Controllers\EstudioController;
use App\Http\Controllers\Paginas;
use Illuminate\Support\Facades\Route;


Route::get("/", [Paginas::class, "index"])->name("Inicio");
Route::get("/contacto",[Paginas::class, "contacto"])->name("Contacto");
Route::get("/estudio",[EstudioController::class, "index"])->name("Estudio");
