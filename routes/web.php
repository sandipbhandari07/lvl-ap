<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [testController::class,'index'])->name('test.index');
Route::get('/test/create', [testController::class,'create'])->name('test.create');
Route::post('/test', [testController::class,'store'])->name('test.store');
Route::get('/test/{test}/edit', [testController::class,'edit'])->name('test.edit');
Route::put('/test/{test}/update', [testController::class,'update'])->name('test.update');
Route::delete('/test/{test}/destroy', [testController::class,'destroy'])->name('test.destroy');