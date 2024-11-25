<?php

use App\Http\Controllers\TareaController;
use App\Http\Controllers\TrabajadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/tareas/index', [TareaController::class,'index']);
Route::get('/tareas/create',[TareaController::class, 'create']);
Route::post('/tareas/store',[TareaController::class, 'store']);
Route::put("/tareas/edit/{id}",[TareaController::class, "edit"]);
Route::get("/tareas/update/{id}",[TareaController::class, "update"]);
Route::delete("/tareas/destroy/{id}",[TareaController::class,"delete"]);

Route::get('/trabajador/index', [TrabajadorController::class,'index']);
Route::get('/trabajador/create',[TrabajadorController::class, 'create']);
Route::post('/trabajador/store',[TrabajadorController::class, 'store']);
Route::get('/trabajador/show/{id}',[TrabajadorController::class, 'show']);