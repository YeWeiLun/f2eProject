<?php

namespace App\Http\Models;

use App\Http\Models\MyModel as MyModel;
use DB;

class Catalogues extends MyModel
{
    protected $table = 'Catalogue';

    function __construct()
    {
    }
}
