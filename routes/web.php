<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperationsController;


Route::get('/',[OperationsController::class,'index']);
Route::get('delete/{id}',[OperationsController::class,'destroy']);

Route::get('create',[OperationsController::class,'create']);
Route::post('create_submit',[OperationsController::class,'store']);

Route::get('edit/{id}',[OperationsController::class,'edit']);
Route::post('update/{id}',[OperationsController::class,'update']);


