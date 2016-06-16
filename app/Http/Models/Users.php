<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model
{
    protected $table = 'user';

     function login($account)
    {

    }

    function get($acc,$pwd)
    {
      $condition = array('account'=>$acc,'pwd'=>$pwd);
      $user = DB::table($this->table)->where($condition)->get();
      return $user[0];
    }

    function isExist($acc,$pwd)
    {
      $condition = array('account'=>$acc,'pwd'=>$pwd);
      $user = DB::table($this->table)->where($condition)->get();
      if(count($user)>0)
        return true;
      return false;
    }

    function isDuplicate($acc)
    {
        $condition = array('account'=>$acc);
        $user = DB::table($this->table)->where($condition)->get();
        if(count($user)>0)
          return true;
        return false;
    }

    function createUser($data)
    {
      DB::table($this->table)->insert($data);
    }


}
