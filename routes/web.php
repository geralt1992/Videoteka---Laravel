<?php

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



//pocetna
Route::get('/pocetna' , 'videoController@pocetna')->name('pocetna');

//odabrani film
Route::get('/odabir/{kljuc}' , 'videoController@odabir')->name('odabir')->middleware('auth');


//prikaz i unos novog filma
Route::get('/glavna', 'videoController@prikaz')->name("forma.film")->middleware('auth');
Route::post('/unos', 'videoController@unos_filma')->name("unos.film")->middleware('auth');

//brisanje filma
Route::get('/brisanje/filma/{id}', 'videoController@brisanje')->name("brisanje.filma")->middleware('auth');

//uredivanje filma
Route::get('/uredi//forma/{id}', 'videoController@uredjivanje')->name("uredjivanje.filma");
Route::post('/uredi/film/{id}' , 'videoController@uredi')->name("uredi")->middleware('auth');

//prikaz i unos novog žanra
Route::get('/author/zanr', 'videoController@prikaz_forme_zanr')->name("forma.zanr")->middleware('auth');
Route::post('/zanr/unos', 'videoController@unos_zanra')->name("unos.zanra")->middleware('auth');


//pretrazivanje po abecedi
Route::get('/pretrazi' , 'videoController@prikaz_pretrazivanja')->name('pretrazivanje')->middleware('auth');

//poslan i obrađen upit
Route::get('/pretrazi/novo/{slovo}' , "videoController@upit")->name('upit')->middleware('auth');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
