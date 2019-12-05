<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    public $table='bills';
    public function  reservation()
    {
        return $this->belongsTo('App\Reservation')->withDefault();
    }
    public function  order()
    {
        return $this->belongsTo('App\Order')->withDefault();
    }
    public function  message()
    {
        return $this->belongsTo('App\Message')->withDefault();
    }
}
