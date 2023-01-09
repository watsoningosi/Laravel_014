<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\New_;

/*app()->bind('example', function()
{   
    $foo = config('services.foo');
    return new \App\Models\Example($foo);
});

Route::get('/', function () 
{
   $example = app()->make(\App\Models\Example::class);

   ddd($example); 
});

Route::get('/','App\Http\Controllers\CollabController@home')->name('home');
*/


Route::get('/','App\Http\Controllers\CollabController@home')->name('home');