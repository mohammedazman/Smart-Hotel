<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public $table='messages';
    public function  reservation()
    {
        return $this->belongsTo('App\Reservation');
    }

    public function  bill()
    {
        return $this->hasOne('App\Bill');
    }
}
