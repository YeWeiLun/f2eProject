<?php

namespace App\Http\Controllers;
use App\Http\Models\Users as User;
use App\Http\Controllers\Controller as Controller;
use View;
use Cookie;
use Session;
use Illuminate\Http\Request;
class UserController extends Controller
{
    protected $model = "";
    function __construct()
    {
      $this->model = new User;
    }
    function index()
    {
      return View::make('\index');
    }

    function login($data)
    {
      $acc = $data['account'];
      $pwd = $data['pwd'];
      if($this->model->isExist($acc,$pwd)){
        $name = $this->model->get($acc,$pwd)->name;
        $user = array("acc"=>$acc,"name"=>$name);
        Session::push("user",$user);
        // Cookie::queue("acc",$acc);
        // Cookie::queue("pwd",$pwd);
        // Cookie::queue("name",$name);
      }
      else
      {
        Session::flash("notice","帳號密碼錯誤");
      }
    }

    function loginUser(Request $request)
    {
      $acc = $request->input('acc');
      $pwd = $request->input('pwd');
      $this->login(['account'=>$acc,'pwd'=>$pwd]);
      return redirect("");
    }

    function logout(Request $request)
    {
      Session::forget("user");
      // Cookie::queue(Cookie::forget("acc"));
      // Cookie::queue(Cookie::forget("pwd"));
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
      if($this->model->isDuplicate($acc))
      {
        Session::flash("notice","帳號重複");
      }
      else
      {
        if(strlen($acc)==0||strlen($pwd)==0||strlen($name)==0)
          Session::flash("notice","請輸入帳號密碼以及使用者名稱");
        else {
          $user = array(
            "account"=>$acc,
            "pwd"=>$pwd,
            "name"=>$name
          );
          $this->model->createUser($user);
          $this->login($user);
        }
      }
      return redirect("");
    }

}
