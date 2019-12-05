<?php

namespace App\Listeners;

use App\Bill;
use App\Events\ConfirmBooking;
use App\Reservation;
use App\Room;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmBookingListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ConfirmBooking  $event
     * @return void
     */
    public function handle(ConfirmBooking $event)
    {
        if ($event->reservation->state==1){
            //-

        $room= Room::find($event->reservation->room_id);
        $room->state=2;
        $price=$room->price;
        $room->update();
        $bi=new Bill();
        $bi->reservation_id= $event->reservation->id;
        $bi->cost=$price;
        $bi->type=1;
         $bi->details='مقابل سعر الغرفة المحجوزة';

        $bi->save();

        }
    }
}
