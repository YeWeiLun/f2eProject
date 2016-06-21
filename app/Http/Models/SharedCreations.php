<?php

namespace App\Http\Models;

use App\Http\Models\MyModel as MyModel;
use DB;

class SharedCreations extends MyModel
{
    protected $table = 'SharedCreation';

    function __construct()
    {
    }
}
