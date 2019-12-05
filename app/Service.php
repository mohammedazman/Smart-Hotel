<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    public $table='services';
    public function  order()
    {
        return $this->hasMany('App\Order');
    }
}
