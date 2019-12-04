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

Route::get('/', function () {
    return view('index');
});

Route::get('/bienvenue','Coif\MainController@bienvenue')->name('bienvenuepage');

Auth::routes();
//Affichage création compte
//Route::get('/register', 'Coif\MainController@enregistrement')->name('registerpage');
//Validation création compte
Route::get('/creer', 'Coif\MainController@register')->name('register');
//
//Route::get('/home', 'HomeController@index')->name('homeRegister');


Route::get('/register', 'Coif\MainController@enregistrement')->name('registerpage');


