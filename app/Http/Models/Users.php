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

    static function get($uid)
    {
      $user = $user = DB::select('select * from user where uid = '.$uid);
      return $user[0];
    }


}
