<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/forms', 'FormController@index');
Route::post('/proses', 'FormController@proses');
