<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/avtorizacia', 'login')->name('login');
Route::post('/avtorizacia', 'formController@login');
Route::get('/logout', 'formController@logout');

Route::view('logined', 'logined');

Route::group(['middleware' => 'auth'], function(){
    Route::post('/addMovies', 'movieController@addMovies'); 
    Route::view('/addMovies', 'addMovies');
    });
Route::get("/movieList", "movieController@movieList");

    Route::get('/indexPage', 'formController@indexPage'); 

    Route::post('/registrationForm', 'formController@create');
    Route::view('/registrationForm', 'registrationForm');