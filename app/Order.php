<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public $table='orders';
    public function  reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
    public function  service()
    {
        return $this->belongsTo('App\Service');
    }
    public function  bill()
    {
        return $this->hasOne('App\Bill');
    }
}
