@if(Auth::user()->state==1)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <div class="panel-heading">
        تعديل بيانات الطلب رقم :  {{$order->id}}
    </div>
    <div class="form-group">
        <form class="form-horizontal" action="{{url('/order/edit/'.$order->id.'')}}" method="post">

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
                                            <th>حالة الطلب</th>
                                            <th>نوع الطلب</th>
                                            <th>رقم الحجز</th>
                                            <th>الكمية</th>


                                            <th>الاحداث</th>
                                        </tr>
                                        </thead>

                                        <tbody>


                                        <br/>
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>
                                                <select class="form-control" id="state" name="state">
                                                        <option value="1" @if($order->state==1) selected @endif>قيد الانتضار</option>
                                                        <option value="2" @if($order->state==2)  selected @endif>قيدالتنفيذ </option>
                                                        <option value="3" @if($order->state==3)  selected @endif>تم التنفيذ</option>
                                                        <option value="0" @if($order->state==0)  selected @endif>رفض الطلب</option>
                                                    </select>

                                                    @if ($errors->has('state'))
                                                        <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                                    @endif

                                            </td>
                                            <td>



                                                    <select class="form-control" id="service_id" name="service_id">
                                                        @foreach($service as $value)
                                                            <option value="{{$value->id}}" @if($order->service_id==$value->id) selected @endif>{{$value->type}}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('service_id'))
                                                        <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('service_id') }}</strong>
                                    </span>
                                                    @endif


                                            <td>


                                                    <input list="reservation_id" name="reservation_id" value="{{$order->reservation_id}}">
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

                                                    <input id="count" name="count" type="number" placeholder="كمية الطلب" class="form-control" value="{{$order->count}}" required>
                                                    @if ($errors->has('count'))
                                                        <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('count') }}</strong>
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