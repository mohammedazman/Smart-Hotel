<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Message;
use App\Order;
use App\Reservation;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $order =Order::all();
        $message=Message::all();
        $reservation=Reservation::all();
        $bill=Bill::all();



        return view('Admin.bill',compact('order','reservation','message','bill'));
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
        if($request->isMethod('post')){
            $this->validate($request,[
                'reservation_id'=> 'required',


                'cost'=> 'required',
                'type'=> 'required',

            ],[
                'reservation_id'    => 'يجب تحديد رقم الحجز',


                'cost'    => 'يجب تحديد المبلغ ',
                'type' => 'يجب تحديد نوع البيان',


            ]);



            $bi=new Bill();
            $bi->reservation_id=$request->input('reservation_id');
            $bi->cost=$request->input('cost');
            $bi->type=$request->input('type');
            $bi->order_id=$request->input('order_id');
            $bi->message_id=$request->input('message_id');
            $bi->details=$request->input('details');
          ;

            $bi->save();
            return redirect('bill')->with('success','تم الاضافة بنجاح');


        }

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
        $bill=Bill::find($id);
        $order=Order::all();

        $message=Message::all();
        $reservation=Reservation::all();


        return view('Admin.bill_edit',compact('order','reservation','bill','message'));

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

        if($request->isMethod('post')){

            $bi=Bill::find($id);
            $bi->reservation_id=$request->input('reservation_id');
            $bi->cost=$request->input('cost');
            $bi->type=$request->input('type');
            $bi->order_id=$request->input('order_id');
            $bi->message_id=$request->input('message_id');
            $bi->details=$request->input('details');

            $bi->update();
            return redirect('bill')->with('success','تم التحديث بنجاح');


        }
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
        $bill=Bill::find($id);
        $bill->delete();
        return redirect('bill')->with('success','تم حذف الفاتورة بنجاح');
    }
}
