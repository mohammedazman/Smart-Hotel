@if(Auth::user()->state==2)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">

    <!-- show table of statement of booking-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">بيانات كشف الحساب</div>
                <div class="panel-body">
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

                                        <th>رقم الحجز</th>
                                        <th>المبلغ المطلوب</th>
                                        <th>المبلغ المدفوع</th>
                                        <th>رصيد العميل</th>


                                        <th>الاحداث</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($reservations as $value )

                                        <br/>
                                        <tr>
                                            <td>{{$value->id}}</td>

                                            <td>
                                              <?php  $sum=0; ?>
                                                @foreach($value->bill as $value1 )
                                                      <?php  $sum=$sum+$value1->cost; ?>
                                                  @endforeach
                                                {{$sum}}


                                            </td>

                                            <td>
                                                <?php  $sum2=0; ?>
                                                @foreach($value->payment as $value2 )
                                                    <?php  $sum2=$sum2+$value2->count; ?>
                                                @endforeach
                                                {{$sum2}}


                                            </td>

                                            <td>
                                                <?php  $sum3=$sum2-$sum; ?>

                                                {{$sum3}}


                                            </td>
                                            <td >

                                                <a href="{{url('/statement_booking/details/'.$value->id.'')}}"  >
                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تفاصيل</button>
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
@endsection()

@endif

