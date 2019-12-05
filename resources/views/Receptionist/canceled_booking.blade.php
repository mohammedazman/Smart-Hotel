@if(Auth::user()->state==2)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <!-- form to add user-->

    <div class="well well-sm"><h3>الحجوزات الملغية : </h3></div>


    <!-- Name input-->








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

                                                <a href="{{url('/canceled_booking/edit/'.$value->id.'')}}"  >
                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تعديل</button>
                                                </a>

                                                <a href="{{url('/canceled_booking/delete/'.$value->id.'')}}"  >
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
