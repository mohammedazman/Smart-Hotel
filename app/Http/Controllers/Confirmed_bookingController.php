<?php

namespace App\Http\Controllers;
use App\Bill;
use App\Payment;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Confirmed_bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $reservations =Reservation::all()->where('state','=','1');




        return view('Receptionist.confirmed_booking',compact('reservations'));
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

        //add new booking
        if($request->isMethod('post')){
            $this->validate($request,[
                'user_id'=> 'required',
                'room_id'=> 'required',
                'start_date'=> 'required',
                'end_date'=> 'required',
                'payment_state'=> 'required',
                'state'=> 'required',

            ],[
                'user_id'=> 'يجب تحديدالعميل',
                'room_id'=> 'يحب تحديد الغرفة',
                'start_date'=> 'يجب تحديد بداية فترة الحجز',
                'end_date'=> 'يجب تحديد نهاية فترة الحجز',
                'payment_state'=> 'يجب تحديد حالة الدفع',
                'state'=> 'يجب تحديد حالة الحجز',

            ]);



            $bo=new Reservation();
            $bo->user_id=$request->input('user_id');
            $bo->room_id=$request->input('room_id');
            $bo->start_date=$request->input('start_date');
            $bo->end_date=$request->input('end_date');
            $bo->payment_state=$request->input('payment_state');
            $bo->state=$request->input('state');



            $bo->save();
            event(new ConfirmBooking($bo));
            return redirect('confirmed_booking')->with('success','تم الاضافة بنجاح');

        }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $booking=Reservation::find($id);
        return view('Receptionist.confirmed_booking')->with('booking',$booking);
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
        //update booking data
        if($request->isMethod('post')){
            $this->validate($request,[
                'user_id'=> 'required',
                'room_id'=> 'required',
                'start_date'=> 'required',
                'end_date'=> 'required',
                'payment_state'=> 'required',
                'state'=> 'required',

            ],[
                'user_id'=> 'يجب تحديدالعميل',
                'room_id'=> 'يحب تحديد الغرفة',
                'start_date'=> 'يجب تحديد بداية فترة الحجز',
                'end_date'=> 'يجب تحديد نهاية فترة الحجز',
                'payment_state'=> 'يجب تحديد حالة الدفع',
                'state'=> 'يجب تحديد حالة الحجز',

            ]);



            $bo= Reservation::find($id);;
            $bo->user_id=$request->input('user_id');
            $bo->room_id=$request->input('room_id');
            $bo->start_date=$request->input('start_date');
            $bo->end_date=$request->input('end_date');
            $bo->payment_state=$request->input('payment_state');
            $bo->state=$request->input('state');



            $bo->update();
            event(new ConfirmBooking($bo));
            return redirect('confirmed_booking')->with('success','تم التحديث بنجاح ');
        }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete booking
        $booking=Reservation::find($id);
        $booking->delete();
        return redirect('confirmed_booking')->with('success','تم حذف الحجز بنجاح');
    }
}
