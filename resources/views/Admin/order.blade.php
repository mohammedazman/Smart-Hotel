@if(Auth::user()->state==1)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <!-- form to add user-->
    <form class="form-horizontal" action="{{url('/order')}}" method="post">

    {{csrf_field()}}


    <!-- Name input-->




        <h2 class="page-title">اضافة طلبات</h2>






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
                <div class="form-group" style="margin:10px">
                    <div class="col-sm-12 col-sm-offset-2" style="margin:10px">
                        <button class="btn btn-primary col-sm-4" name="submit" type="submit" style="margin:10px">رفع البيانات</button>
                        <button class="btn btn-default col-sm-4" type="reset" style="margin:10px">الغاء</button>
                    </div>
                </div>
            </div>
        </form>







        <!-- show table of user-->
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
                                            <th>حالة الطلب</th>
                                            <th>نوع الخدمة</th>
                                            <th>رقم الحجز</th>
                                            <th>الكمية</th>
                                            <th>تاريخ الانشاء</th>
                                            <th>اخر تحديث</th>
                                            <th>الاحداث</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($order as $value)


                                            <br/>
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->state}}</td>
                                                <td>{{$value->service->type}}</td>
                                                <td>{{$value->reservation_id}}</td>
                                                <td>{{$value->count}}</td>

                                                <td>{{$value->created_at}}</td>
                                                <td>{{$value->updated_at}}</td>
                                                <td >

                                                    <a href="{{url('/order/edit/'.$value->id.'')}}"  >
                                                        <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تعديل</button>
                                                    </a>

                                                    <a href="{{url('/order/delete/'.$value->id.'')}}"  >
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
