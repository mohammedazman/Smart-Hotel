@if(Auth::user()->state==3)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <!-- form to add user-->
    <form class="form-horizontal" action="{{url('/add_order')}}" method="post">

    {{csrf_field()}}


    <!-- Name input-->





        <h2 class="page-title">اضافة طلبات</h2>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">معلومات اساسية</div>
                    <div class="panel-body">


        <!-- Name input-->
        <div class="form-group">


            <label class="col-md-1 control-label" for="state">حالة الطلب</label>
            <div class="col-md-2">


                <select class="form-control" id="state" name="state">
                    <option value="1" selected>قيد الانتضار</option>
                    <option value="2">قيدالتنفيذ </option>
                    <option value="3">تم التنفيذ</option>
                    <option value="0">رفض الطلب</option>
                </select>

                @if ($errors->has('state'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                @endif
            </div>

            <label class="col-md-1 control-label" for="service_id">نوع الخدمة</label>
            <div class="col-md-2">


                <select class="form-control" id="service_id" name="service_id">
                    @foreach($service as $value)
                        <option value="{{$value->id}}">{{$value->type}}</option>
                    @endforeach
                </select>

                @if ($errors->has('service_id'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('service_id') }}</strong>
                                    </span>
                @endif
            </div>

            <label class="col-md-1 control-label" for="reservation_id">رقم الحجز</label>
            <div class="col-md-2">

                <input list="reservation_id" name="reservation_id">
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
            </div>


            <label class="col-md-1 control-label" for="count">الكمية</label>
            <div class="col-md-2">
                <input id="count" name="count" type="number" placeholder="كمية الطلب" class="form-control" required>
                @if ($errors->has('count'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('count') }}</strong>
                                    </span>
                @endif
            </div>














            <br>
            <div class="form-group">
                <div class="form-group" style="margin:10px">
                    <div class="col-sm-12 col-sm-offset-2" style="margin:10px">
                        <button class="btn btn-primary col-sm-4" name="submit" type="submit" style="margin:10px">اضافة طلب</button>
                        <button class="btn btn-default col-sm-4" type="reset" style="margin:10px">الغاء</button>
                    </div>
                </div>
                {{--  <div class="col-md-6 ">
                  <button type="reset" class="btn  btn-default">إلغــاء</button>
              </div>--}}
            </div>
        </div>
                    </div>  </div></div></div></form>









    <!-- show table of user-->

                </div></div></div></div>

@endsection()

@endif
