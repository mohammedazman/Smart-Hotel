@if(Auth::user()->state==3)




    @extends('home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">

    <div class="panel-heading">
        تعديل بيانات الطلب الخاص رقم :  {{$message->id}}
    </div>
    <div class="form-group">
        <form class="form-horizontal" action="{{url('/s_message/edit/'.$message->id.'')}}" method="post">

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
                                            <th>تفاصيل الطلب</th>



                                            <th>الاحداث</th>
                                        </tr>
                                        </thead>

                                        <tbody>


                                        <br/>
                                        <tr>
                                            <td>{{$message->id}}</td>

                                            <td>


                                                <input list="reservation_id" name="reservation_id" value="{{$message->reservation_id}}">
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

                                                <input id="details" name="message" type="text" placeholder="التفاصيل" class="form-control" value="{{$message->message}}">
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