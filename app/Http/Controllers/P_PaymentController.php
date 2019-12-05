<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Reservation;
use Illuminate\Http\Request;

class P_PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment=Payment::all();
        $reservation=Reservation::all();



        return view('Receptionist.payment',compact('payment','reservation'));
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
                'reservation_id'=>'required',
                'count'=>'required',


            ],[
                'reservation_id'=>'يجب تحديد العميل المسدد',
                'count'=>'يجب تحديد المبلغ المسدد'
            ]);
            $pa=new Payment();
            $pa->reservation_id=$request->input('reservation_id');
            $pa->count=$request->input('count');
            $pa->details=$request->input('details');
            $pa->save();

            return redirect('payment')->with('success','تم اضافة المبلغ بنجاح');



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
        $payment=Payment::find($id);
        $reservation=Reservation::all();
        return view('Receptionist.payment_edit',compact('payment','reservation'));

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
        $pa=Payment::find($id);
        $pa->reservation_id=$request->input('reservation_id');
        $pa->count=$request->input('count');
        $pa->details=$request->input('details');
        $pa->update();

        return redirect('payment')->with('success','تم تحديث بيان التسديد بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $payment=Payment::find($id);
        $payment->delete();
        return redirect('payment')->with('success','شكرا تم حذف بيان التسديد بنجاح');
    }
}
