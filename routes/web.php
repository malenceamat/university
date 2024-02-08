<?php

use App\Http\Controllers\BlockHideController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\StagesController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ZagolovokController;
use App\Http\Controllers\AudienceController;
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
    Route::get('/about_us' ,[AdditionalController::class,'index']);
    Route::post('/about_us',[AdditionalController::class, 'create'])->name('about_us');
    Route::get('/partners/{id?}',[PartnersController::class,'index']);
    Route::post('/partners/save',[PartnersController::class, 'create']);
    Route::get('/allpartners',[PartnersController::class, 'show']);
    Route::delete('/partners/{delete}',[PartnersController::class, 'delete']);
    Route::post('/partners/edit',[PartnersController::class,'update']);

    Route::get('/team/{id?}' ,[TeamController::class,'index']);
    Route::post('/team/save',[TeamController::class, 'create']);
    Route::get('/allteam' ,[TeamController::class,'show']);
    Route::delete('/team/{delete}',[TeamController::class, 'delete']);
    Route::post('/team/edit',[TeamController::class,'update']);


    Route::get('/contact' ,[ContactController::class,'index']);
    Route::post('/contact',[ContactController::class, 'create'])->name('contact');
    Route::get('/allaudience' ,[ZagolovokController::class,'index']);
    Route::post('/allaudience',[ZagolovokController::class, 'create'])->name('zagolovok');
    Route::get('/audience/{id?}' ,[AudienceController::class,'index']);
    Route::post('/audience/save',[AudienceController::class, 'create']);
    Route::delete('/audience/{delete}',[AudienceController::class, 'delete']);
    Route::post('/audience/edit',[AudienceController::class,'update']);
    Route::get('/banner' ,[BannersController::class,'index']);
    Route::post('/banner',[BannersController::class, 'create'])->name('banner');
    Route::get('hide',[BlockHideController::class,'index']);
    Route::get('/faq',[FaqController::class,'index']);
    Route::post('faq',[FaqController::class,'create'])->name('faqs');
    Route::delete('/faq/{id}',[FaqController::class,'delete']);
    Route::post('/faq_edit/{id}',[FaqController::class,'show'])->name('qwe');
    Route::post('/question',[FaqController::class,'question'])->name('response');
    Route::delete('/ask_delete/{id}',[FaqController::class,'delete_ask']);

    Route::post('/form',[ContactController::class,'contact'])->name('form');
    Route::delete('/contact/{id}',[ContactController::class,'delete']);

    Route::post('/hide_save',[BlockHideController::class,'create']);


    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/dashboard-create/{id?}' ,[DashboardController::class,'new']);
    Route::post('/dashboard-create/save',[DashboardController::class, 'create']);
    Route::post('/dashboard-create/edit', [DashboardController::class, 'update']);
    Route::delete('/dashboard/{delete}',[DashboardController::class, 'delete']);


});

require __DIR__.'/auth.php';
