<?php

namespace App\Http\Models;

use App\Http\Models\MyModel as MyModel;
use DB;

class Users extends MyModel
{
    protected $table = 'user';

    function __construct()
    {

    }
}
