<?php

namespace App\Http\Controllers;

use App\Box;
use App\Message;
use App\Reservation;
use Illuminate\Http\Request;

class boxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $box=Box::all();
        $reservation=Reservation::all();
        return view('admin.box',compact('box','reservation'));
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
                'user_name'=>'required',
                'message'=>'required',


            ],[
                'user_name'=>'يجب تحديد رقم مقدم الطلب',
                'message'=>'يجب اضافة تفاصيل الطلب'
            ]);
            $me=new Box();
            $me->user_name=$request->input('user_name');
            $me->email=$request->input('email');
            $me->box=$request->input('message');
            $me->save();

            return redirect('box')->with('success','تم اضافة المبلغ بنجاح');



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
        $box=Box::find($id);
        $reservation=Reservation::all();


        return view('Admin.box_edit',compact('box','reservation'));
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
        $me=Box::find($id);
        $me->user_name=$request->input('user_name');
        $me->email=$request->input('email');
        $me->box=$request->input('message');
        $me->update();

        return redirect('box')->with('success','تم تحديث تفاصي الطلب بنجاح');
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
        $box=Box::find($id);
        $box->delete();
        return redirect('box')->with('success','تم حذف الطلب بنجاح');
    }
}
