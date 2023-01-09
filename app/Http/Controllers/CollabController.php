<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class CollabController extends Controller
{
  /*  public function home(Example $example)
    {
     ddd(resolve('App\Models\Example'),resolve('App\Models\Example') );
    }
    */

    public function home(Filesystem $file)
    {
     /* Cache::remember('wat', 60, fn()=> 'billions');

      return Cache::get('wat');

      */
      #return File::get(public_path('index.php'));
      #return $request->input('name', 'watson');
      #return request('name');
       return view('welcome'); 
    # return View::make('welcome');
    }
}
