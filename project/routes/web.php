<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movie/{ id }', 'SabaController@showMovie');
Route::get('/movies', 'movieController@list');
Route::get('/movies/create', 'movieController@create');


Route::get('/indexPage', 'formController@indexPage'); 
 Route::view('/registrationForm', 'registrationForm');
Route::post('/registrationForm', 'formController@create');