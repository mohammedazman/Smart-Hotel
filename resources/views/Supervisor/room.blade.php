@if(Auth::user()->state==3)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">




    <div class="well well-sm"><h3>الغرف المتاحة : </h3></div>






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
                                        <th>تفاصيل الغرفة</th>
                                        <th>السعر</th>
                                        <th>حالة الغرفة</th>
                                        <th>نوع الغرفة</th>
                                        <th>تاريخ الانشاء</th>
                                        <th>اخر تحديث</th>
                                        <th>الاحداث</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($rooms as $value)

                                        <br/>
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->details}}</td>
                                            <td>{{$value->price}}</td>
                                            <td>{{$value->state}}</td>
                                            <td>{{$value->room_type}}</td>

                                            <td>{{$value->created_at}}</td>
                                            <td>{{$value->updated_at}}</td>
                                            <td >

                                                <a href="{{url('/s_room/edit/'.$value->id.'')}}"  >
                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تعديل</button>
                                                </a>

                                                <a href="{{url('/s_room/delete/'.$value->id.'')}}"  >
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
    </div></form>
                </div></div></div>
    </div>
@endsection()

@endif
