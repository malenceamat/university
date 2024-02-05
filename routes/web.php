<?php

use App\Http\Controllers\BlockHideController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\StagesController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ZagolovokController;
use App\Http\Controllers\AudienceController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\PossibilitiesController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\ShowController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return redirect('/cards');
})->middleware(['auth'])->name('dashboard');
Route::get('/',[ShowController::class,'show']);
Route::middleware(['auth'])->group(function () {

    Route::get('/cards/{id?}',[TextController::class,'index']);
    Route::post('/cards/save',[TextController::class, 'save']);
    Route::get('/allcards',[CardsController::class, 'index']);
    Route::delete('/cards/{delete}',[CardsController::class, 'delete']);
    Route::post('/cards/edit',[CardsController::class,'update']);
    Route::get('/stages/{id?}' ,[StagesController::class,'index']);
    Route::post('/stages/save',[StagesController::class, 'create']);
    Route::get('/allstages' ,[StagesController::class,'show']);
    Route::post('/stages/edit', [StagesController::class, 'update']);
    Route::delete('/stages/{delete}',[StagesController::class, 'delete']);
    Route::get('/selection' ,[SelectionController::class,'index']);
    Route::post('/selection',[SelectionController::class, 'create'])->name('selection');
    Route::get('/additional' ,[AdditionalController::class,'index']);
    Route::post('/additional',[AdditionalController::class, 'create'])->name('additional');
    Route::get('/team/{id?}' ,[TeamController::class,'index']);
    Route::post('/team/save',[TeamController::class, 'create']);
    Route::get('/allteam' ,[TeamController::class,'show']);
    Route::delete('/team/{delete}',[TeamController::class, 'delete']);
    Route::post('/team/edit',[TeamController::class,'update']);
    Route::get('/result' ,[ResultController::class,'index']);
    Route::post('/result',[ResultController::class, 'create'])->name('results');
    Route::get('/partners/{id?}',[PartnersController::class,'index']);
    Route::post('/partners/save',[PartnersController::class, 'create']);
    Route::get('/allpartners',[PartnersController::class, 'show']);
    Route::delete('/partners/{delete}',[PartnersController::class, 'delete']);
    Route::post('/partners/edit',[PartnersController::class,'update']);
    Route::get('/contact' ,[ContactController::class,'index']);
    Route::post('/contact',[ContactController::class, 'create'])->name('contact');
    Route::get('/allaudience' ,[ZagolovokController::class,'index']);
    Route::post('/allaudience',[ZagolovokController::class, 'create'])->name('zagolovok');
    Route::get('/audience/{id?}' ,[AudienceController::class,'index']);
    Route::post('/audience/save',[AudienceController::class, 'create']);
    Route::delete('/audience/{delete}',[AudienceController::class, 'delete']);
    Route::post('/audience/edit',[AudienceController::class,'update']);
    Route::get('/statistics/{id?}' ,[StatisticsController::class,'index']);
    Route::post('/statistics/save',[StatisticsController::class, 'create']);
    Route::get('/allstatistics' ,[StatisticsController::class,'show']);
    Route::post('/statistics/edit', [StatisticsController::class, 'update']);
    Route::delete('/statistics/{delete}',[StatisticsController::class, 'delete']);
    Route::get('/possibilities/{id?}' ,[PossibilitiesController::class,'index']);
    Route::post('/possibilities/save',[PossibilitiesController::class, 'create']);
    Route::get('/allpossibilities' ,[PossibilitiesController::class,'show']);
    Route::post('/possibilities/edit', [PossibilitiesController::class, 'update']);
    Route::delete('/possibilities/{delete}',[PossibilitiesController::class, 'delete']);
    Route::get('/banner' ,[BannersController::class,'index']);
    Route::post('/banner',[BannersController::class, 'create'])->name('banner');
    Route::get('hide',[BlockHideController::class,'index']);
});

require __DIR__.'/auth.php';
