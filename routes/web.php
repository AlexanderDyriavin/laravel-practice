<?php

use Illuminate\Support\Facades\Route;

Route::match(['any'],'/*',function (){
   return response(['status' => 'not found'],404);
});
