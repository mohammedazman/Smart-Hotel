@if(Auth::user()->state==2)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <div class="panel-heading">
        تعديل بيانات حجز رقم :  {{$booking->id}}
    </div>
    <div class="form-group">
        <form class="form-horizontal" action="{{url('/booking/edit/'.$booking->id.'')}}" method="post">

            {{csrf_field()}}

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
                                            <th>يبداء بتاريخ</th>
                                            <th>ينتهي بتاريخ</th>
                                            <th>حالة الدفع</th>
                                            <th>حالة الحجز</th>

                                            <th>الاحداث</th>
                                        </tr>
                                        </thead>

                                        <tbody>


                                        <br/>
                                        <tr>
                                            <td>{{$booking->id}}</td>
                                            <td class="col-md-1">
                                                <input id="user_id" name="user_id" type="number" placeholder="رقم العميل" class="form-control" value="{{$booking->user_id}}">
                                                @if ($errors->has('user_id'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                                @endif
                                            </td>
                                            <td class="col-md-1">
                                                <input id="room_id" name="room_id" type="number" placeholder=" رقم الغرفة" class="form-control" value="{{$booking->room_id}}">
                                                @if ($errors->has('room_id'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('room_id') }}</strong>
                                    </span>
                                            @endif

                                            <td class="col-md-1">
                                                <input id="start_date" name="start_date" type="date"  class="form-control col-sm-3" value="{{$booking->start_date}}">
                                                @if ($errors->has('start_date'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                                @endif
                                            </td>
                                            <td class="col-md-1">
                                                <input id="end_date" name="end_date" type="date"  class="form-control col-sm-3" value="{{$booking->end_date}}" >
                                                @if ($errors->has('end_date'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <select class="form-control" name="payment_state" >


                                                    <option value="1" @if($booking->payment_state==1) selected @endif>مدفوع كاملا </option>
                                                    <option value="2" @if($booking->payment_state==2) selected @endif> تم دفع جز</option>
                                                    <option value="0" @if($booking->payment_state==0) selected @endif>لم يتم الدفع </option>

                                                </select>
                                                @if ($errors->has('payment_state'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('payment_state') }}</strong>
                                    </span>
                                                @endif
                                            </td>

                                            <td>
                                                <select class="form-control" name="state" >


                                                    <option value="1"  @if($booking->state==1) selected @endif>محجوز</option>
                                                    <option value="2" @if($booking->state==2) selected @endif> قيد الانتظار</option>
                                                    <option value="0"  @if($booking->state==0) selected @endif>حجز مرفوض </option>

                                                </select>
                                                @if ($errors->has('state'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                                @endif
                                            </td>

                                            <td >


                                                <button type="submit" class="btn  btn-primary ">تحديث </button>





                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <!-- Name input-->


</form>



    </div>




    </div>



    <br>

    {{--  <div class="col-md-6 ">
      <button type="reset" class="btn  btn-default">إلغــاء</button>
  </div>--}}
    </div>

    </form>




</div></div>

@endsection()


@endif