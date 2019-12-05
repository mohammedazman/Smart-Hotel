@if(Auth::user()->state==1)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <div class="panel-heading">
        تعديل بيانات سداد رقم :  {{$box->id}}
    </div>
    <div class="form-group">
        <form class="form-horizontal" action="{{url('/box/edit/'.$box->id.'')}}" method="post">

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
                                            <th>الاسم</th>
                                            <th>الايميل</th>
                                            <th>الرسالة</th>



                                            <th>الاحداث</th>
                                        </tr>
                                        </thead>

                                        <tbody>


                                        <br/>
                                        <tr>
                                            <td>{{$box->id}}</td>

                                            <td>


                                                <input type="text" name="user_name" value="{{$box->user_name}}">

                                                @if ($errors->has('user_name'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                                @endif

                                            </td>







                                            <td>

                                                <input id="email" name="email" type="text" placeholder="التفاصيل" class="form-control" value="{{$box->email}}">
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif


                                            </td>

                                            <td>

                                                <input id="message" name="message" type="text" placeholder="التفاصيل" class="form-control" value="{{$box->box}}">
                                                @if ($errors->has('box'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('box') }}</strong>
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