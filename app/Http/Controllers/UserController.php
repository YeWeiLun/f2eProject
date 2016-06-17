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
      if(Session::has('user'))
      {
        $user = Session::get('user');
        $condition=array('account'=>$user[0]['acc'],'pwd'=>$user[0]['pwd']);
        if(!$this->model->isExist($condition))
        {
          Session::forget('user');
        }
      }
      return View::make('\index');
    }

    function login($data)
    {
      $acc = $data['account'];
      $pwd = $data['pwd'];
      if($this->model->isExist($data)){
        $result = $this->model->get($data);
        $name = $result[0]->name;
        $user = array("acc"=>$acc,"pwd"=>$pwd,"name"=>$name);
        Session::push("user",$user);
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
      //Duplicate Check
      if($this->model->isExist(['account'=>$acc]))
      {
        Session::flash("notice","帳號重複");
      }
      else
      {
        if(strlen($acc)==0||strlen($pwd)==0||strlen($name)==0)
          Session::flash("notice","請正確輸入帳號密碼以及使用者名稱");
        else {
          $user = array(
            "account"=>$acc,
            "pwd"=>$pwd,
            "name"=>$name
          );
          $this->model->insert($user);
          Session::flash("notice","註冊成功!");
          $this->login($user);
        }
      }
      return redirect("");
    }

}
