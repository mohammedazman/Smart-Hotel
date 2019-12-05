<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Payment;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Statement_bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bills=DB::table('reservations')
            ->leftJoin('bills', 'reservations.id', '=', 'bills.reservation_id')
            ->selectRaw('reservations.id as id,sum(bills.cost)AS cost')
            ->groupBy('reservations.id');

        $payments=DB::table('reservations')
            ->leftjoin('payments', 'reservations.id', '=', 'payments.reservation_id')
            ->selectRaw('reservations.id as id,sum(payments.count) as count')
            ->groupBy('reservations.id')->unionAll($bills)->get();

$reservations=Reservation::with(['bill','payment'])->get();


        //


        return view('Receptionist.statement_booking',compact('reservations','payments','bills'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ids=DB::table('reservations')->where('user_id','=',$id)->value('id');

        $bills=Bill::all()->where('reservation_id','=',$ids);

        $payments=Payment::all()->where('reservation_id','=',$ids);



        //


        return view('Receptionist.statement_booking_details',compact('ids','payments','bills'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
