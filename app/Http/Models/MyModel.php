<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class MyModel extends Model
{
    protected $table = '';

      function isExist($condition)
      {
        $result = DB::table($this->table)->where($condition)->get();
        if(count($result)>0)
          return true;
        return false;
      }

      function get($condition)
      {
        $result = DB::table($this->table)->where($condition)->get();
        return $result;
      }

      function insert($data)
      {
        DB::table($this->table)->insert($data);
      }

}
