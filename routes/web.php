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

// Route::get('/', function () {
//     return view('homepage');
// });

// Route::get('/opleidingen', function () {
//     return view('opleidingen');
// });

// Route::get('/artikel-op-nummer/nummer--{nummer}', 'ArticleController@showArticle')
//     ->where('nummer', '\d+')
//     ->name('artikel.opnummer')
// ;

Route::get('/test'. 'TestController@index');

Route::get('/', function () {
    return view('homepage');

})->name('home');
Route::get('/menu', function () {
    return view('menu');

})->name('menu');
Route::get('/contact', function () {
    return view('contact');

})->name('reservations');
Route::get('/reservations', function () {
    return view('reservations');

})->name('contact');
Route::get('/registratie', 'FormController@showForm')
 ->name('registration.form');

 Route::post('/registratie', 'FormController@handleForm')
 ->name('registration.form.handle');
 
 Route::get('/registratie/bevestiging', 'FormController@confirmationPage')
 ->name('confirmation');
Route::get('/test', 'TestController@index');