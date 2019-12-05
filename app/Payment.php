<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public $table='payments';
    public function  reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
}
