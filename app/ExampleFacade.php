<?php

namespace App;

use Illuminate\Support\Facades\Facade;

class ExampleFacade extends Facade

  {

    protected static function getFacadeAccessor()
    {
        return '\App\Example';
    }
   
  }