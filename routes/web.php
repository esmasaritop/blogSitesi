<?php

use App\Http\Controllers\FilmsController;
use App\Http\Controllers\YorumController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Film Routeları
Route::get('/films',[FilmsController::class,'index'])->name('films_index');
Route::get('/films/createPage',[FilmsController::class,'createPage'])->name('films_createPage');
Route::post('/films/addFilms',[FilmsController::class,'addFilms'])->name('films_addFilms');



Route::get('/', function () {
    return view('welcome');
});


//anasayfa front
//Route::get('/anasayfa', function () {
  // return view('front.films.index');
//});


//Route::get('/anasayfa', [FilmsController::class, 'index'])->name('films_index');

Route::get('/anasayfa', [FilmsController::class, 'veriAlma'])->name('anasayfa');


// Film detay sayfası için route
Route::get('/detay/{id}', [FilmsController::class, 'detail'])->name('films_detail');
//Route::post('/detay/comment', [FilmsController::class, 'addComment'])->name('films_addComment');

//Yorum route

Route::get('/detay/comment',[YorumController::class,'index'])->name('comment');
Route::get('/yorumlar/createPage',[YorumController::class,'createPage'])->name('yorum_createPage');
Route::post('/yorumlar/addYorum/{id}',[YorumController::class,'addYorum'])->name('yorum_addNote');











//Route::get('/adminPanelTest', function () {
//return view('adminPanel.films.index');
//});






//jetstream
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //kişilerin login olmadan görmemesini istediğimiz yapılardır

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});


