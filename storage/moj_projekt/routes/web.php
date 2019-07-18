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





//prikaz i unos novog filma
Route::get('/', 'videoController@prikaz')->name("forma.film");
Route::post('/unos', 'videoController@unos_filma')->name("unos.film");

//brisanje filma
Route::get('/brisanje/filma/{id}', 'videoController@brisanje')->name("brisanje.filma");

//uredivanje filma
Route::get('/uredi//forma/{id}', 'videoController@uredjivanje')->name("uredjivanje.filma");
Route::post('/uredi/film/{id}' , 'videoController@uredi')->name("uredi");

//prikaz i unos novog žanra
Route::get('/author/zanr', 'videoController@prikaz_forme_zanr')->name("forma.zanr");
Route::post('/zanr/unos', 'videoController@unos_zanra')->name("unos.zanra");


//pretrazivanje po abecedi
Route::get('/pretrazi' , 'videoController@prikaz_pretrazivanja')->name('pretrazivanje');

//poslan i obrađen upit
Route::get('/pretrazi/novo/{slovo}' , "videoController@upit")->name('upit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
