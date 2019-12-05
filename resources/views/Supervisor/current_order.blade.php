@if(Auth::user()->state==3)




    @extends('home')
@section('content')


    <!-- form to add user-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">





    <!-- show table of user-->
    <div class="row">


        <div class="panel panel-container">

            <div id="content">
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="panel-heading"> طلبات قيد الانتظار:</div>
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
                                                <a href="{{url('/current_order/in/'.$value->id.'')}}"  >
                                                    <button class="btn btn-info right"  ><i class="icon-pencil icon-white"></i> قيد التنفيذ</button>
                                                </a>


                                                <a href="{{url('/current_order/done/'.$value->id.'')}}"  >
                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تم التنفيذ</button>
                                                </a>

                                                <a href="{{url('/current_order/cancel/'.$value->id.'')}}"  >
                                                    <button class="btn btn-danger right"  ><i class="icon-pencil icon-white"></i> رفض الطلب</button>
                                                </a>


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
