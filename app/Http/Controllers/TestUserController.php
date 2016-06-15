<?php

namespace App\Http\Controllers;
use App\Http\Models\TestUser;
use App\Http\Controllers\Controller as Controller;
use View;

use Cookie;

class TestUserController extends Controller
{
    function test()
    {
      if(Cookie::has('asdasd'))
        var_dump(Cookie::get('asdasd'));
      return View::make('\index');
    }
}
