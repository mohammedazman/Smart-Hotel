<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services =Service::all();


        return view('Admin.service',compact('services'));
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
        //add new user
        if($request->isMethod('post')){
            $this->validate($request,[
                'price'=> 'required',
                'type'=> 'required',
                'details'=> 'required',


            ],[
                'price'    => 'يجب تضمين سعر الخدمة',
                'type'    => 'يجب تحديد النوع',
                'details' => 'يجب تضمين التفاصيل',



            ]);



            $sr=new Service();
            $sr->price=$request->input('price');
            $sr->type=$request->input('type');
            $sr->details=$request->input('details');



//add image for service
            if($file=$request->file('image')){
                $FileNameWithExtention=$file->file('image')->getClientOriginalName();
                $FileName=pathinfo($FileNameWithExtention,PATHINFO_FILENAME);
                $extension=$file->file('image')->getClientOriginalExtension();
                $FileNameStore=$FileName.'_'.time().'.'.$extension;
                $Path=$file->file('image')->storeAs('Public/room_image',$FileNameStore);

            }
            else {
                $FileNameStore='noImage.jpg';}


            $sr->image=$FileNameStore;
            $sr->save();
            return redirect('service')->with('success','تم الاضافة بنجاح');


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
        $service=Service::find($id);




        return view('Admin.service_edit')->with('service',$service);
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
            $this->validate($request,[
                'price'=> 'required',
                'type'=> 'required',
                'details'=> 'required',


            ],[
                'price'    => 'يجب تضمين سعر الخدمة',
                'type'    => 'يجب تحديد النوع',
                'details' => 'يجب تضمين التفاصيل',



            ]);



            $sr= Service::find($id);
            $sr->price=$request->input('price');
            $sr->type=$request->input('type');
            $sr->details=$request->input('details');



//add image for service
            if($file=$request->file('image')){
                $FileNameWithExtention=$file->file('image')->getClientOriginalName();
                $FileName=pathinfo($FileNameWithExtention,PATHINFO_FILENAME);
                $extension=$file->file('image')->getClientOriginalExtension();
                $FileNameStore=$FileName.'_'.time().'.'.$extension;
                $Path=$file->file('image')->storeAs('Public/room_image',$FileNameStore);

            }
            else {
                $FileNameStore='noImage.jpg';}


            $sr->image=$FileNameStore;
            $sr->update();
            return redirect('service')->with('success','تم الاضافة بنجاح');




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
        $service=Service::find($id);
        $service->delete();
        return redirect('service')->with('success','تم حذف الخدمة بنجاح');
    }
}
