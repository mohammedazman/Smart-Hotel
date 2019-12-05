@if(Auth::user()->state==2)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <div class="panel-heading">
        تعديل بيانات فاتورة رقم :  {{$bill->id}}
    </div>
    <div class="form-group">
        <form class="form-horizontal" action="{{url('/r_bill/edit/'.$bill->id.'')}}" method="post">

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
                                            <th>رقم الحجز</th>
                                            <th>المبلغ</th>
                                            <th>نوع البيان</th>
                                            <th>رقم طلب الخدمة</th>
                                            <th>رقم الطلب الخاص</th>
                                            <th>تفاصيل</th>



                                            <th>الاحداث</th>
                                        </tr>
                                        </thead>

                                        <tbody>


                                        <br/>
                                        <tr>
                                            <td>{{$bill->id}}</td>

                                            <td>


                                                <input list="reservation_id" name="reservation_id" value="{{$bill->reservation_id}}">
                                                <datalist id="reservation_id">
                                                    @foreach($reservation as $value)
                                                        <option value="{{$value->id}}">
                                                    @endforeach
                                                </datalist>

                                                @if ($errors->has('reservation_id'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('reservation_id') }}</strong>
                                    </span>
                                                @endif

                                            </td>

                                            <td>

                                                <input id="count" name="cost" type="number" placeholder="المبلغ" class="form-control" value="{{$bill->cost}}" required>
                                                @if ($errors->has('cost'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('cost') }}</strong>
                                    </span>
                                                @endif

                                            </td>

                                            <td>
                                                <select class="form-control" id="type" name="type">
                                                    <option value="1" @if($bill->type==1) selected @endif>مبلغ حجز</option>
                                                    <option value="2" @if($bill->type==2) selected @endif>مبلغ طلب خدمة </option>
                                                    <option value="3" @if($bill->type==3) selected @endif>مبلغ طلب خاص</option>
                                                </select>

                                                @if ($errors->has('state'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                                @endif

                                            </td>

                                            <td>

                                                <div class="col-md-2">


                                                    <input list="order_id" name="order_id" value="{{$bill->order_id}}">
                                                    <datalist id="order_id">
                                                        @foreach($order as $value)
                                                            <option value="{{$value->id}}">
                                                        @endforeach
                                                    </datalist>

                                                    @if ($errors->has('order_id'))
                                                        <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('order_id') }}</strong>
                                    </span>
                                                    @endif
                                                </div>

                                            </td>

                                            <td>

                                                <div class="col-md-2">


                                                    <input list="message_id" name="message_id" value="{{$bill->message_id}}">
                                                    <datalist id="message_id">
                                                        @foreach($message as $value)
                                                            <option value="{{$value->id}}">
                                                        @endforeach
                                                    </datalist>

                                                    @if ($errors->has('message_id'))
                                                        <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('message_id') }}</strong>
                                    </span>
                                                    @endif
                                                </div>

                                            </td>
                                            <td>

                                                <input id="details" name="details" type="text" placeholder="التفاصيل" class="form-control" value="{{$bill->details}}">
                                                @if ($errors->has('details'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                                                @endif


                                            </td>

                                            <td>
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