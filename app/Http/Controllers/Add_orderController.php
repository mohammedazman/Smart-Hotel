<?php

namespace App\Http\Controllers;

use App\Order;
use App\Reservation;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Add_orderController extends Controller
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
        $service=Service::all();
        $reservation=Reservation::all();


        return view('Supervisor.add_order',compact('order','reservation','service'));
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
        //add new order
        if($request->isMethod('post')){
            $this->validate($request,[
                'state'=> 'required',
                'service_id'=> 'required',
                'reservation_id'=> 'required',
            ],[
                'state'    => 'يجب تضمين حالة الطلب',
                'service_id'    => 'يجب تحديد نوع الخدمة ',
                'reservation_id' => 'يجب تحديد رقم العميل',


            ]);



            $or=new Order();
            $or->state=$request->input('state');
            $or->service_id=$request->input('service_id');
            $or->reservation_id=$request->input('reservation_id');
            $or->count=$request->input('count');

            $or->save();
            return redirect('add_order')->with('success','تم الاضافة بنجاح');


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
