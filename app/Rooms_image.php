<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms_image extends Model
{
    //
    public $table='rooms_images';
    public function room(){
        return $this->belongsTo('App\Room');
    }
}
