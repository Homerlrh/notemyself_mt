<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::middleware('auth','verified')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('/notes',[App\Http\Controllers\NotesController::class, 'store']);

    Route::post('/websites',[App\Http\Controllers\WebsitesController::class, 'store']);

    Route::post('/todos',[App\Http\Controllers\TodoController::class, 'store']);

    Route::post('/todos/{todo:id}',[App\Http\Controllers\TodoController::class, 'isDone']);

    Route::delete('/todos/{todo:id}',[App\Http\Controllers\TodoController::class, 'remove']);

    Route::post("/images",[\App\Http\Controllers\ImagesController::class,"save"]);

    Route::delete('/images/{image}',[\App\Http\Controllers\ImagesController::class,"delete"]);

    Route::get('/session', [App\Http\Controllers\HomeController::class, 'session']);

    Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'show']);

    Route::post('/profile',[\App\Http\Controllers\ProfileController::class,'update']);

});


Route::post("/verify",[\App\Http\Controllers\VerifyController::class,'veri']);

Route::post("/emailReset",[\App\Http\Controllers\Auth\ForgotPasswordController::class,"resetWithEmail"]);

