<?php

namespace App\Http\Controllers;

use App\Box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($request->isMethod('post')) {
            $bo = new Box();
            if (Auth::check()) {
                $bo->user_name = Auth::user()->name;
                $bo->email = Auth::user()->email;
            } else {
                $this->validate($request, [
                    'name' => 'required',


                    'email' => 'required',
                    'message' => 'required',

                ], [
                    'name' => 'يجب تضمين الاسم',


                    'email' => 'يجب تضمين الايميل',
                    'message' => 'يجب تضمين الرسالة',


                ]);

                $bo->user_name = $request->input('name');
                $bo->email = $request->input('email');
            }

            $bo->box = $request->input('message');
            $bo->save();
            return redirect('/')->with('success','تم الاضافة بنجاح');
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
