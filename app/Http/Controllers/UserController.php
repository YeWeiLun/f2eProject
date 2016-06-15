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
      if(Cookie::has('acc')&&Cookie::has('pwd'))
        $user = User::get(Cookie::get('acc'),Cookie::get('pwd'));
      return View::make('\index',compact('user'));
    }

    function loginUser(Request $request)
    {
      Cookie::queue("acc",$request->input('acc'));
      Cookie::queue("pwd",$request->input('pwd'));
      return redirect("");
    }

    function logout(Request $request)
    {
      Cookie::queue(Cookie::forget("acc"));
      Cookie::queue(Cookie::forget("pwd"));
      return redirect("");
    }
}
