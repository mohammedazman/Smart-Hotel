<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all users
        $users =User::all();


        return view('Admin.account',compact('users'));
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
        //add new user
        if($request->isMethod('post')){
$this->validate($request,[
                'name'=> 'required',
                'email'=> 'required|unique:users|max:255',
                'password'=> 'required',],[
                'name'    => 'يجب تضمين الاسم',
                'email.unique'    => 'رقم الهاتف او الايميل المدخل موجود مسبقا',
                'email.required' => 'يجب تضمين الايميل',
                'email.max' => 'يجب تضمين عدد اقل من الاحرف',
                'password' => 'يجب تضمين كلمة السر',

            ]);



            $us=new User();
            $us->name=$request->input('name');
            $us->email=$request->input('email');
            $us->password=Hash::make($request->input('password'));
            $us->state=$request->input('state');
            if($us->state==5){
                $us->type='Customer';
            }
            elseif ($us->state>0){
                if ($us->state==1){
                    $us->type='Admin';
                }
                elseif ($us->state==2){
                    $us->type='Receptionist';

                }
                elseif ($us->state==3){
                    $us->type='Supervisor';
                }
                else{
                    $us->type='Blocked';
                }

            }
            $us->save();
            return redirect('account')->with('success','تم الاضافة بنجاح');


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
        $user=User::find($id);
        return view('Admin.account_edit')->with('user',$user);


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
        //update user

        if($request->isMethod('post')){
            $this->validate($request,[
                'name'=> 'required',
                'email'=> 'required|max:200|unique:users,id,'.$id,
                'password'=> 'required',],[
                'name'    => 'يجب تضمين الاسم',
                'email.unique'    => 'رقم الهاتف او الايميل المدخل موجود مسبقا',
                'email.required' => 'يجب تضمين الايميل',
                'email.max' => 'يجب تضمين عدد اقل من الاحرف',
                'password' => 'يجب تضمين كلمة السر',

            ]);



            $us= User::find($id);
            $us->name=$request->input('name');
            $us->email=$request->input('email');
            if($request->input('password') !=$us->password){
            $us->password=Hash::make($request->input('password'));}
            $us->state=$request->input('state');
            if($us->state==5){
                $us->type='Customer';
            }
            elseif ($us->state>0) {
                if ($us->state == 1) {
                    $us->type = 'Admin';
                } elseif ($us->state == 2) {
                    $us->type = 'Receptionist';

                } elseif ($us->state == 3) {
                    $us->type = 'Supervisor';
                } else {
                    $us->type = 'Blocked';
                }
            }
                $us->update();
            return redirect('account')->with('success','تم التحديث بنجاح');
    }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user=User::find($id);
        $user->delete();
        return redirect('account')->with('success','تم حذف المستخدم بنجاح');

    }
}
