

@extends('costumer')
@section('content')

<br><br><br>


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
                    @if (!Auth::check())

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
@endif
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
                                    <div class="form-images">
                                        <img src="images/wizard_v6.jpg" alt="wizard_v6">
                                    </div>



                                        <div class="form-holder form-holder-2">
                                            <label for="room" class="form-row-inner">اختيار غرفة    </label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="room_type"  required>

                                                    <option value="1" @if(old('room_type')==1) selected @endif> Double Room </option>
                                                    <option value="2" @if(old('room_type')==2) selected @endif> Single Room </option>
                                                    <option value="3" @if(old('room_type')==3) selected @endif> شقق </option>
                                                    <option value="4" @if(old('room_type')==4) selected @endif> VIP </option>

                                                    <option value="5" @if(old('room_type')==5) selected @endif> جناح </option>





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

                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-money-box"></i></span>
                            <span class="step-text">الدفع</span>
                        </h2>

                        <section >


                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2 " >
                                        <label for="payment_type" class="special-label-1">اختيار طريقة للدفع:</label>
                                        <select class="form-control" id="payment_state" name="payment_state" value={{old('payment_state')}} >
                                            <option value="0"  @if(old('payment_state')==0) selected @endif>الدفع كاش</option>
                                            <option value="1" @if(old('payment_state')==1) selected @endif > الدفع الالكتروني</option>

                                        </select>



                                    </div>
                                    <a href="#e_payment" data-toggle="collapse" > (الدفع الان): </a>
                                    <span class="select-btn">
											<i class="zmdi zmdi-chevron-down">
                                            </i>
										</span>
                                </div>

                                <div id="e_payment" class="collapse">
                                <h3>معلومات الدفع:</h3>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <input type="radio" name="radio1" id="pay-1" value="pay-1" checked>
                                        <label class="pay-1-label" for="pay-1"><img src="images/wizard_v3_icon_1.png" alt="pay-1">Credit Card</label>
                                        <input type="radio" name="radio1" id="pay-2" value="pay-2">
                                        <label class="pay-2-label" for="pay-2"><img src="images/wizard_v3_icon_2.png" alt="pay-2">Paypal</label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="holder" name="holder" required>
                                            <span class="label">اسم القابض*</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="card" name="card" required>
                                            <span class="label">رقم الكارد*</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                    <div class="form-holder">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="cvc" name="cvc" required>
                                            <span class="label">CVC*</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            </div>
                        </section>
                        <!-- SECTION 4 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                            <span class="step-text">تاكيد</span>
                        </h2>
                        <section>
                            <div class="inner">

                            </div>

                        </section>
                </div>
                <input type="submit" value="Submit"  hidden>
            </form>

        </div>
            </div>

        </div>
    </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection()