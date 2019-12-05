<?php

namespace App\Listeners;

use App\Bill;
use App\Events\FulfillmentOrderEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class FulfillmentOrderListener
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
     * @param  FulfillmentOrderEvent  $event
     * @return void
     */
    public function handle(FulfillmentOrderEvent $event)
    {
        //
        if ($event->order->state==3){
            //-



            $bi=new Bill();
            $bi->reservation_id= $event->order->reservation_id;
            $bi->cost=$event->order->service->price;
            $bi->type=2;
            $bi->order_id=$event->order->id;
            $bi->details=$event->order->service->id.' :مقابل سعر الخدمة رقم';

            $bi->save();}
    }
}
