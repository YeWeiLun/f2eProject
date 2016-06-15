<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class TestUser extends Model
{
  protected $table ='user';
  static function getTestUser()
  {
    $user = DB::select('select * from user');
    return $user[0];
  }
}
