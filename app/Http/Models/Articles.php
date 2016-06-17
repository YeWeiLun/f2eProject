<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Articles extends Model
{
    protected $table = 'Article';

    function __construct()
    {
    }
}
