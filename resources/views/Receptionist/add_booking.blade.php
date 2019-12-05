

    @if(Auth::user()->state==2)




        @extends('home')
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">معلومات اساسية</div>
                    <div class="panel-body">

        <div class="page-content" style="background-image: url('images/wizard-v3.jpg'); direction: rtl; text-align: right;" >
            <div class="wizard-v3-content">
                <div class="wizard-form">
                    <div class="wizard-header">
                        <h3 class="heading">ادخال بيانات انشاء حجز</h3>
                        <p>قم بتعبة جميع البيانات للانتقال للخطوة التالية</p>
                    </div>
                    <form class="form-register" action="{{url('/c_booking_sub')}}" method="post" id="form-b">
                        {{csrf_field()}}

                        <div id="form-total">




                            <!-- SECTION 1 -->


                                <h2>
                                    <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                                    <span class="step-text">حول</span>
                                </h2>
                                <section >
                                    <div class="inner">
                                        <h3>المعلومات الشخصية:</h3>
                                        <label class="col-md-2 control-label" for="name">اسم المستخدم</label>
                                        <div class="col-md-6">
                                            <input id="name" name="name" type="text" placeholder="اسم المستخدم" value="{{old('name')}}" class="form-control" required>

                                        </div>

                                    </div>
                                    <br><br>

                                    <div class="inner" >

                                        <h3>معلومات الحساب:</h3>
                                        <div class="form-row  ">

                                            <label class="col-md-2 control-label" for="email" > رقم الهاتف المحمول او الايميل</label>
                                            <div class="col-md-6">
                                                <input id="email" name="email" value="{{old('email')}}" type="text" placeholder=" رقم الهاتف المحمول او الايميل" class="form-control" required>

                                            </div>

                                        </div>
                                        <div class="form-row">

                                            <label class="col-md-2 control-label" for="password">كلمة السر</label>
                                            <div class="col-md-6">
                                                <input id="password" name="password" type="password" placeholder="كلمة السر" class="form-control" value="{{old('password')}}" required >

                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-row">

                                            <label class="col-md-2 control-label" for="password">تاكيد كلمة السر</label>
                                            <div class="col-md-6">
                                                <input id="confirm_password" name="confirm_password" type="password" placeholder="كلمة السر" value="{{old('password')}}" class="form-control" required>

                                            </div>
                                        </div>
                                    </div>


                                </section>

                        <!-- SECTION 2 -->

                            <h2>
                                <span class="step-icon"><i class="zmdi zmdi-hotel"></i></span>
                                <span class="step-text">الحجز</span>
                            </h2>
                            <section>
                                <div class="inner">
                                    <div class="form-heading">
                                        <h3>معلومات الحجز</h3>
                                        <span>2/3</span>
                                    </div>




                                    <div class="form-holder form-holder-2">
                                        <label for="room" class="form-row-inner">اختيار غرفة    </label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="room_type"  required>

                                                <option value="1" @if(old('room_type')==1) selected @endif> Double Room </option>
                                                <option value="2" @if(old('room_type')==2) selected @endif> Single Room </option>
                                                <option value="3" @if(old('room_type')==3) selected @endif> شقق </option>
                                                <option value="4" @if(old('room_type')==4) selected @endif> VIP </option>





                                            </select>
                                        </div>



                                    </div>

                                </div>
                                <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                <div class="form-group">
                                    <label class="col-md-1 control-label" for="email" > يبداء بتاريخ</label>
                                    <div class="col-md-4">
                                        <input id="start_date" name="start_date" value="{{old('start_date')}}" type="date" placeholder=" يبداء بتاريخ" class="form-control"  min="" required>

                                    </div>


                                    <label class="col-md-1 control-label" for="end_date" >ينتهي بتاريخ</label>
                                    <div class="col-md-4">
                                        <input id="end_date" name="end_date" value="{{old('end_date')}}"  type="date" placeholder=" ينتهي بتاريخ"  min="" class="form-control" required>

                                    </div>

                                </div>

                            </section>

                            <!-- SECTION 3 -->
                            <div class="clearfix"></div>

                            <h2>
                                <span class="step-icon"><i class="zmdi zmdi-money-box"></i></span>
                                <span class="step-text">الدفع</span>
                            </h2>

                            <section >



                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 " >
                                            <label for="payment_type" class="special-label-1">اختيار طريقة للدفع:</label>
                                            <select class="form-control" id="payment_state" name="payment_state" value={{old('payment_state')}} >
                                                <option value="0"  @if(old('payment_state')==0) selected @endif>الدفع كاش</option>
                                                <option value="1" @if(old('payment_state')==1) selected @endif > الدفع الالكتروني</option>

                                            </select>



                                        </div>
                                    </div>

                            </section>
                            <!-- SECTION 4 -->


                        </div>
                        <div class="form-group" style="margin:10px">
                            <div class="col-sm-12 col-sm-offset-2" style="margin:10px">
                                <button class="btn btn-primary col-sm-4" name="submit" type="submit" style="margin:10px">رفع البيانات</button>
                                <button class="btn btn-default col-sm-4" type="reset" style="margin:10px">الغاء</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
        </div>
                </div></div></div>
    @endsection()

    @endif