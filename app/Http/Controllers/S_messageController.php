<?php

namespace App\Http\Controllers;

use App\Message;
use App\Reservation;
use Illuminate\Http\Request;

class S_messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $message=Message::all();
        $reservation=Reservation::all();
        return view('Supervisor.message',compact('message','reservation'));
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
                'message'=>'required',


            ],[
                'reservation_id'=>'يجب تحديد رقم مقدم الطلب',
                'message'=>'يجب اضافة تفاصيل الطلب'
            ]);
            $me=new message();
            $me->reservation_id=$request->input('reservation_id');
            $me->message=$request->input('message');
            $me->save();

            return redirect('s_message')->with('success','تم اضافة المبلغ بنجاح');



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
        $message=Message::find($id);
        $reservation=Reservation::all();


        return view('Supervisor.message_edit',compact('message','reservation'));
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
        $me=Message::find($id);
        $me->reservation_id=$request->input('reservation_id');
        $me->message=$request->input('message');
        $me->update();

        return redirect('s_message')->with('success','تم تحديث تفاصي الطلب بنجاح');
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
        $message=Message::find($id);
        $message->delete();
        return redirect('s_message')->with('success','تم حذف الطلب بنجاح');
    }
}
