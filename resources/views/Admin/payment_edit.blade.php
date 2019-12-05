@if(Auth::user()->state==1)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <div class="panel-heading">
        تعديل بيانات سداد رقم :  {{$payment->id}}
    </div>
    <div class="form-group">
        <form class="form-horizontal" action="{{url('/payment/edit/'.$payment->id.'')}}" method="post">

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
                                            <th>تفاصيل</th>



                                            <th>الاحداث</th>
                                        </tr>
                                        </thead>

                                        <tbody>


                                        <br/>
                                        <tr>
                                            <td>{{$payment->id}}</td>

                                            <td>


                                                <input list="reservation_id" name="reservation_id" value="{{$payment->reservation_id}}">
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

                                                <input id="count" name="count" type="number" placeholder="المبلغ" class="form-control" value="{{$payment->count}}" required>
                                                @if ($errors->has('count'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('count') }}</strong>
                                    </span>
                                                @endif

                                            </td>






                                            <td>

                                                <input id="details" name="details" type="text" placeholder="التفاصيل" class="form-control" value="{{$payment->details}}">
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





</form>
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