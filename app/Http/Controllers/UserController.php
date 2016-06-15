<?php

namespace App\Http\Controllers;
use App\Http\Models\Users as User;
use App\Http\Controllers\Controller as Controller;
use View;
use Cookie;
use Illuminate\Http\Request;
class UserController extends Controller
{
    function getUser()
    {
      if(Cookie::has('uid'))
        $user = User::get(Cookie::get('uid'));
      return View::make('\index',compact('user'));
    }

    function loginUser(Request $request)
    {
      Cookie::queue("uid",$request->input('test'));
      return redirect("");
    }

    function logout(Request $request)
    {
      Cookie::queue(Cookie::forget("uid"));
      return redirect("");
    }
}
