<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model
{
    protected $table = 'user';

    static function login($account)
    {

    }

    static function get($acc,$pwd)
    {
      $condition = array('account'=>$acc,'pwd'=>$pwd);
      $user = DB::table('user')->where($condition)->get();
      return $user[0];
    }

    static function isExist($acc,$pwd)
    {

    }


}
