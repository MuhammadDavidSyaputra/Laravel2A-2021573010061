<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


    class PageController extends Controller
    {
      //...
      public function cobaClass()
      {
      $foo = new \App\Http\Controllers\Coba\Foo();
      echo $foo->bar();
      }
    }
