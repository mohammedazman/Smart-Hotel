

@extends('costumer')
@section('content')




        <div class="" align="center">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-body">

                    <!-- show table of user-->
    <div >
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">



                        <div class="panel panel-container">

                            <div id="content">
                                <div class="container-fluid">

                                    <div class="card shadow mb-4">

                                        <div class="card-body">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered " id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <h3> يمكنك طلب الخدمات المقدمة التالية:</h3>
                                                        <th>نوع الخدمة</th>
                                                        <th>التفاصيل</th>

                                                        <th>السعر</th>

                                                        <th>الاحداث</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>

                                                    @foreach($services as $value)


                                                        <tr>

                                                            <td>{{$value->type}}</td>
                                                            <td>{{$value->details}}</td>

                                                            <td>{{$value->price}}</td>


                                                            <td >

                                                                <a href="{{url('/c_service/order/'.$value->id.'')}}"  >
                                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i>طلب الخدمة</button>
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

                </div></div></div></div></div></div></div></div>
    <div class="clearfix"></div>
    <br><br><br>
        <<div class="" align="center">


                        <!-- show table of user-->
                        <div >
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">



                                        <div class="panel panel-container">

                                            <div id="content">
                                                <div class="container-fluid">

                                                    <div class="card shadow mb-4">

                                                        <div class="card-body">
                                                            <h3>  طلبات الخدمات الخاصة بك :</h3>
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered " id="dataTable" width="100%" cellspacing="0">
                                                                    <thead>
                                                                    <tr>

                                                                        <th>نوع الخدمة</th>
                                                                        <th>الكمية</th>

                                                                        <th>السعر</th>
                                                                        <th>تاريخ تقديم الطلب</th>


                                                                        <th>حالة الطلب</th>
                                                                    </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                    <?php  $sum=0; ?>
                                                                    @foreach($order as $value)

                                                                        <?php
                                                                        if ($value->state==3){
                                                                            $sum=$sum+$value->service->price;}

                                                                        ?>
                                                                        <tr>

                                                                            <td>{{$value->service->type}}</td>
                                                                            <td>{{$value->count}}</td>

                                                                            <td>{{$value->service->price}}</td>

                                                                            <td>{{$value->created_at}}</td>
                                                                            <td >
                                                                           @if($value->state==1)

                                                                                    <button class="btn btn-default right"  ><i class="icon-pencil icon-white"></i>قيد الانتظار</button>
                                                                            @elseif($value->state==2)
                                                                                    <button class="btn btn-info right"  ><i class="icon-pencil icon-white"></i>قيد التنفيذ</button>
                                                                                @elseif($value->state==3)
                                                                                    <button class="btn btn-success right"  ><i class="icon-pencil icon-white"></i>تم التنفيذ</button>
                                                                                @elseif($value->state==0)
                                                                                    <button class="btn btn-danger right"  ><i class="icon-pencil icon-white"></i>طلب رفض الطلب</button>
                                                                                @endif

                                                                            </td>
                                                                        </tr>

                                                                    @endforeach
                                                                    <tr class="active">

                                                                        <td colspan="2">اجمالي المبالغ للطلبات التي تم تنفيذها</td>
                                                                        <td colspan="3">{{$sum}}</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div></div></div></div></div></div></div></div>
        <div class="clearfix"></div>
        <br><br><br>

@endsection()