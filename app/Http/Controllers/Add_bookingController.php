<?php

namespace App\Http\Controllers;

use App\Events\ConfirmBooking;
use App\Reservation;
use App\Room;
use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class Add_bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Receptionist.add_booking');
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
        if($request->isMethod('post')) {

            $this->validate($request, [

                'start_date' => 'required',
                'end_date' => 'required',
                'payment_state' => 'required',
                'room_type' => ['exists:rooms,room_type',
                    Rule::exists('rooms')->where(function ($query) {
                        $query->where('state', '=', '1');}),
                ],

            ], [

                'start_date' => 'يجب تحديد بداية فترة الحجز',
                'end_date' => 'يجب تحديد نهاية فترة الحجز',
                'payment_state' => 'يجب تحديد حالة الدفع',
                'room_type.exists' =>'عذرا لايوجد غرف متاحة الان حسب احتياجك',



            ]);

            $bo = new Reservation();
            if (Auth::check()) {
                $bo->user_id = Auth::id();

            }
            else {

                $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|unique:users|max:255',
                        'password' => 'required',]
                    ,
                    [
                        'name' => 'يجب تضمين الاسم',
                        'email.unique' => 'رقم الهاتف او الايميل المدخل موجود مسبقا',
                        'email.required' => 'يجب تضمين الايميل',
                        'email.max' => 'يجب تضمين عدد اقل من الاحرف',
                        'password' => 'يجب تضمين كلمة السر',

                    ]);


                $us = new User();
                $us->name = $request->input('name');
                $us->email = $request->input('email');
                $us->password = Hash::make($request->input('password'));

                $us->type = 'Customer';


                $us->save();
                Auth::login($us, true);
                $bo->user_id =$us->id;
            }

            //add new booking


//chose first room if exist depend type of room

            $bo->room_id=$request->input('room_type');

            $bo->start_date = $request->input('start_date');
            $bo->end_date = $request->input('end_date');
            $bo->payment_state = $request->input('payment_state');
            $bo->state=2;
            $bo->save();

            return redirect()->back()->with('success', 'تم الحجز بنجاح');


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
