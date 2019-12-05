@if(Auth::user()->state==2)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <!-- form to add user-->
    <form class="form-horizontal" action="{{url('/manage_booking')}}" method="post">

    {{csrf_field()}}


    <!-- Name input-->
        <div class="form-group">

            <label class="col-md-1 control-label" for="name">رقم العميل</label>
            <div class="col-md-2">
                <input id="name" name="user_id" type="number" placeholder="رقم العميل" class="form-control" required>
                @if ($errors->has('user_id'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                @endif
            </div>

            <label class="col-md-1 control-label" for="name">رقم الغرفة</label>
            <div class="col-md-2">
                <input id="name" name="room_id" type="number" placeholder="رقم الغرفة" class="form-control" required>
                @if ($errors->has('room_id'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('room_id') }}</strong>
                                    </span>
                @endif
            </div>



            <label class="col-md-1 control-label" for="email" > يبداء بتاريخ</label>
            <div class="col-md-2">
                <input id="start_date" name="start_date" type="date" placeholder=" يبداء بتاريخ" class="form-control"  min="" required>
                @if ($errors->has('start_date'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                @endif
            </div>


            <label class="col-md-1 control-label" for="end_date" >ينتهي بتاريخ</label>
            <div class="col-md-2">
                <input id="end_date" name="end_date" type="date" placeholder=" ينتهي بتاريخ"  min="" class="form-control" required>
                @if ($errors->has('end_date'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                @endif
            </div>


            <label class="col-md-1 control-label" for="payment_state">حالة الدفع</label>
            <div class="col-md-2">


                <select class="form-control" id="payment_state" name="payment_state">
                    <option value="1" selected> مدفوع كاملا</option>
                    <option value="2">تم دفع جز </option>
                    <option value="0">لم يتم الدفع</option>
                </select>

                @if ($errors->has('payment_state'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('payment_state') }}</strong>
                                    </span>
                @endif
            </div>


            <label class="col-md-1 control-label" for="state" >حالة الحجز</label>
            <div class="col-md-2">
                <select class="form-control" name="state"  required>
                    <option  disabled hidden  >إختيار </option>

                    <option value="1"  selected>محجوز </option>
                    <option value="2" > قيد الانتضار</option>
                    <option value="0" >حجز مرفوض </option>



                </select>
                @if ($errors->has('state'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                @endif
            </div>




            <br>
            <div class="form-group" style="margin:10px">
                <div class="col-sm-12 col-sm-offset-2" style="margin:10px">
                    <button class="btn btn-primary col-sm-4" name="submit" type="submit" style="margin:10px">رفع البيانات</button>
                    <button class="btn btn-default col-sm-4" type="reset" style="margin:10px">الغاء</button>
                </div>
            </div>
        </div>
    </form>








    <!-- show table of booking-->
    <div class="row">


        <div class="panel panel-container">

            <div id="content">
                <div class="container-fluid">

                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>رقم العميل</th>
                                        <th>رقم الغرفة</th>
                                        <th>يبدا بتاريخ</th>
                                        <th>وينتهي بتاريخ</th>
                                        <th>حالة الدفع</th>
                                        <th>حالة الحجز</th>
                                        <th>تاريخ الحجز</th>
                                        <th>الاحداث</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($reservations as $value)

                                        <br/>
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->user_id}}</td>
                                            <td>{{$value->room_id}}</td>
                                            <td>{{$value->start_date}}</td>
                                            <td>{{$value->end_date}}</td>
                                            <td>{{$value->payment_state}}</td>
                                            <td>{{$value->state}}</td>
                                            <td>{{$value->created_at}}</td>
                                            <td >

                                                <a href="{{url('/manage_booking/edit/'.$value->id.'')}}"  >
                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تعديل</button>
                                                </a>

                                                <a href="{{url('/manage_booking/delete/'.$value->id.'')}}"  >
                                                    <button class="btn btn-danger" id="_token" value="{{ csrf_token() }}"  onclick="deleterep({{ $value->id }})"    >
                                                        <i class="icon-remove icon-white" ></i> حذف </button>

                                                </a>

                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
                </div></div></div></div>

@endsection()

@endif
