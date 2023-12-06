<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\StagesController;

Route::get('/', function () {
    return view('site.general');
});

Route::get('/cards/{id?}',[TextController::class,'index']);

Route::post('/cards/save',[TextController::class, 'save']);

Route::get('/allcards',[CardsController::class, 'index']);

Route::delete('/cards/{delete}',[CardsController::class, 'delete']);

Route::post('/cards/edit',[CardsController::class,'update']);

Route::get('/stages' ,[StagesController::class,'index']);

Route::post('/stages',[StagesController::class, 'create']);

Route::get('/allstages' ,[StagesController::class,'show']);
