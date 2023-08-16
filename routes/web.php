<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;






Route::get('/',[TaskController::class,'index'])->name('tasks');
Route::post('/add_task',[TaskController::class,'addTask'])->name('add.task');
Route::post('/update_task',[TaskController::class,'updateTask'])->name('update.task');
Route::post('/delete_task',[TaskController::class,'deleteTask'])->name('delete.task');
