<?php

namespace App\Http\Controllers;
use App\Http\Models\Users as User;
use App\Http\Controllers\Controller as Controller;
use View;
use Cookie;
use Illuminate\Http\Request;
class UserController extends Controller
{
    protected $model = "";
    function __construct()
    {
      $this->model = new User;
    }
    function getUser()
    {
      if(Cookie::has('acc')&&Cookie::has('pwd'))
        $user = $this->model->get(Cookie::get('acc'),Cookie::get('pwd'));
      return View::make('\index',compact('user'));
    }

    function loginUser(Request $request)
    {
      $acc = $request->input('acc');
      $pwd = $request->input('pwd');
      if($this->model->isExist($acc,$pwd)){
        Cookie::queue("acc",$request->input('acc'));
        Cookie::queue("pwd",$request->input('pwd'));
      }
      else
      {

      }
      return redirect("");
    }

    function logout(Request $request)
    {
      Cookie::queue(Cookie::forget("acc"));
      Cookie::queue(Cookie::forget("pwd"));
      return redirect("");
    }

    function signIn()
    {
      return View::make('sign\signIn');
    }

    function signUp()
    {
      return View::make('sign\signUp');
    }

    function createUser(Request $request)
    {
      $acc = $request->input('acc');
      $pwd = $request->input('pwd');
      $name = $request->input('name');
    }

}
