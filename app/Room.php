<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public $table='rooms';
    public function  reservation()
    {
        return $this->hasMany('App\Reservation');
    }
    public function rooms_image(){
        return $this->hasOne('App\Rooms_image');
    }
}
