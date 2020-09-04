<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('debug')->get('/',formatAction('DebugController','create'));
Route::get('/',formatAction('DebugController','index'));
