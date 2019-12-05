@if(Auth::user()->state==2)




    @extends('home')
@section('content')

    <div class="" align="center">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">
{{$ids}}


                    <div class="container">
                        <div class=" col-md-10 "  style="margin: 0em;">

                            <div class="panel-body">
                                <div class="content" style="direction: rtl; text-align: right; ">
                                    <div class="well well-sm"><h3>كشف حساب بالمبالغ المقيدة عليك : </h3></div>


                                    <!-- show table of booking-->


                                    <div class="panel panel-container">

                                        <div id="content">
                                            <div class="container-fluid">

                                                <div class="card shadow mb-4">

                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped  table-hover table-condensed" id="dataTable" width="100%" cellspacing="0">
                                                                <thead>
                                                                <tr>
                                                                    <th>#id</th>
                                                                    <th>المبلغ</th>
                                                                    <th>المقابل</th>
                                                                    <th>التفاصيل</th>
                                                                    <th>تاريخ تقييد المبلغ</th>

                                                                </tr>
                                                                </thead>

                                                                <tbody>
                                                                <?php  $sum=0; ?>
                                                                @foreach($bills as $value)

                                                                    <?php  $sum=$sum+$value->cost; ?>
                                                                    <br/>
                                                                    <tr>
                                                                        <td>{{$value->id}}</td>
                                                                        <td>{{$value->cost}}</td>

                                                                        @if($value->type==1)
                                                                            <td> مبلغ حجز</td>
                                                                        @elseif($value->type==2)
                                                                            <td>    مبلغ طلب خدمة</td>
                                                                        @elseif($value->type==3)
                                                                            <td>  مبلغ طلب خاص</td>
                                                                        @else
                                                                            <td>   لم يتم التحديد يرجى مراجعة الادارة</td>
                                                                        @endif


                                                                        <td>{{$value->details}}</td>
                                                                        <td>{{$value->updated_at}}</td>





                                                                    </tr>

                                                                @endforeach
                                                                <thead>
                                                                <tr>
                                                                    <th colspan="2">
                                                                        اجمالي المبالغ المقيدة :
                                                                    </th>
                                                                    <th colspan="3">
                                                                        {{$sum}}ريال
                                                                    </th>

                                                                </tr>
                                                                </thead>                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div></div></div>
    <div class="" align="center">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">

                <div class="" align="center">
                                <div class="col-md-12">
                                    <div class="panel panel-default">

                                        <div class="panel-body">

                            <div class="container col-sm-10 " style="direction: rtl; text-align: right; ">

                                <div class="well well-sm"><h3>كشف حساب بالمبالغ التي تم تسديدها : </h3></div>


                                <!-- show table of booking-->



                                <div class="panel panel-container ">

                                    <div id="content">
                                        <div class="container-fluid">

                                            <div class="card shadow mb-4">

                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped  table-hover table-condensed" id="dataTable" width="100%" cellspacing="0">
                                                            <thead>
                                                            <tr>
                                                                <th>#id</th>
                                                                <th>المبلغ المسدد</th>
                                                                <th>التفاصيل</th>
                                                                <th>تاريخ تسديد المبلغ</th>

                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                            <?php  $sum1=0; ?>
                                                            @foreach($payments as $value)

                                                                <?php  $sum1=$sum1+$value->count; ?>
                                                                <br/>
                                                                <tr>
                                                                    <td>{{$value->id}}</td>
                                                                    <td>{{$value->count}}</td>

                                                                    <td>{{$value->details}}</td>
                                                                    <td>{{$value->updated_at}}</td>





                                                                </tr>

                                                            @endforeach
                                                            <thead>
                                                            <tr>
                                                                <th colspan="2">
                                                                    اجمالي المبالغ المسددة :
                                                                </th>
                                                                <th colspan="2">
                                                                    {{$sum1}}ريال
                                                                </th>

                                                            </tr>
                                                            </thead>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                                    </div></div></div></div></div></div></div>
                        <?php  $sum2=$sum1-$sum; ?>
    <div class="" align="center">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">

                        <div class="container col-sm-10 " style="direction: rtl; text-align: right; ">
                            <div class="well well-sm " >   <h2>كشف مختصر</h2></div>
                            <div class="list-group col- ">
                                <div class="col-sm-12">
                                    <a href="#" class="list-group-item ">اجمالي المبالغ المقيدة(عليك): {{$sum}}  ريال </a>
                                    <a href="#" class="list-group-item">اجمالي المبالغ المسددة(لك): {{$sum1}}  ريال </a>


                                    @if($sum2>=0)
                                        <a href="#" class="list-group-item disabled">اجمالي المبلغ المتبقي لك: {{$sum2}}  ريال </a>
                                    @else
                                        <a href="#" class="list-group-item disabled">اجمالي المبلغ المتبقي عليك: {{$sum2}}   ريال</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>

    </div></div></div></div>
    <div class="clearfix"></div>
    <br><br><br>
@endsection()

@endif

