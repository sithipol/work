<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZappModel extends Model
{
    protected $connection = 'warehouse';
    protected $table = 'bank';
  
}
