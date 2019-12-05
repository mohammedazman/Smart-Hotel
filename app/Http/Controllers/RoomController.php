<?php

namespace App\Http\Controllers;

use App\Room;
use App\Rooms_image;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Array_;
use Illuminate\Support\Facades\DB;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms =Room::all();


        return view('Admin.room',compact('rooms'));
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
                'room_type'=> 'required',
                'room_state'=> 'required',
                'details'=> 'required',
                'image1'=>'',
                'image2'=>'',
                'image3'=>'',
                'image4'=>'',
                ],[
                'price'    => 'يجب تضمين سعر الغرفة',
                'room_type'    => 'يجب تحديد النوع',
                'room_state' => 'يجب تحديد حالة الغرفة',
                'details' => 'يجب تضمين التفاصيل',
                'image1.image'=>'يجب ان يكون الملف المضمن من نوع صورة ',
                'image2'=>'يجب ان يكون الملف المضمن من نوع صورة ',
                'image3'=>'يجب ان يكون الملف المضمن من نوع صورة ',
                'image4'=>'يجب ان يكون الملف المضمن من نوع صورة ',


            ]);



            $ro=new Room();
            $ro->price=$request->input('price');
            $ro->room_type=$request->input('room_type');
            $ro->state=$request->input('room_state');
            $ro->details=$request->input('details');

            $ro->save();

//add image for room
            if($file=$request->file('image1')){
                $FileNameWithExtention=$file->file('image1')->getClientOriginalName();
                $FileName=pathinfo($FileNameWithExtention,PATHINFO_FILENAME);
                $extension=$file->file('image1')->getClientOriginalExtension();
                $FileNameStore=$FileName.'_'.time().'.'.$extension;
                $Path=$file->file('image1')->storeAs('Public/room_image',$FileNameStore);

            }
else {
    $FileNameStore='noImage.jpg';}
           $im=new Rooms_image();
            $im->room_id=$ro->id;
            $im->image1=$FileNameStore;
            $im->save();
            return redirect('room')->with('success','تم الاضافة بنجاح');


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
        $room=Room::find($id);


        $room_image=DB::table('rooms_images')->where('room_id', $room->id)->first();
        $arr=array('room'=>$room,'room_image'=>$room_image);
        return view('Admin.room_edit',$arr);

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
