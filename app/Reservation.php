<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public $table='reservations';
    public function  room()
    {
        return $this->belongsTo('App\Room');
    }
    public function  message()
    {
        return $this->hasMany('App\Message');
    }
    public function  order()
    {
        return $this->hasMany('App\Order');
    }
    public function  bill()
    {
        return $this->hasMany('App\Bill');
    }
    public function  payment()
    {
        return $this->hasMany('App\Payment');
    }
    public function  user()
    {
        return $this->belongsTo('App\User');
    }

}
