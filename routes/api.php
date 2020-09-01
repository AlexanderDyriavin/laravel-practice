<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/','CityController@index');
Route::get('/',formatAction('DebugController','generate'));
