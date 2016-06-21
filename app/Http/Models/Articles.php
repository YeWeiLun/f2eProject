<?php

namespace App\Http\Models;

use App\Http\Models\MyModel as MyModel;
use DB;

class Articles extends MyModel
{
    protected $table = 'Article';

    function __construct()
    {
    }
}
