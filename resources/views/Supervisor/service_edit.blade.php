@if(Auth::user()->state==3)




    @extends('home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">

    <div class="panel-heading">
        تعديل بيانات {{$service->type}}
    </div>
    <div class="form-group">
        <form class="form-horizontal" action="{{url('/s_service/edit/'.$service->id.'')}}" method="post">

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
                                            <th>النوع</th>
                                            <th>التفاصيل</th>
                                            <th>السعر</th>
                                            <th>الصورة</th>


                                            <th>الاحداث</th>
                                        </tr>
                                        </thead>

                                        <tbody>


                                        <br/>
                                        <tr>
                                            <td>{{$service->id}}</td>
                                            <td>
                                                <input id="type" name="type" type="text" placeholder="اسم المستخدم" class="form-control" value="{{$service->type}}">
                                                @if ($errors->has('type'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <input id="details" name="details" type="text" placeholder=" رقم الهاتف المحمول او الايميل" class="form-control" value="{{$service->details}}">
                                                @if ($errors->has('details'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                                            @endif

                                            <td>
                                                <input id="price" name="price" type="number"  class="form-control col-sm-3" value="{{$service->price}}">
                                                @if ($errors->has('price'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                                @endif
                                            </td>



                                            <td>
                                                <div class="col-sm-6">
                                                    <img src="/storage/service_image/{{$service->image}}" class="img-responsive" alt="Cinque Terre"><input type="file" name="image" >
                                                </div>
                                                @if ($errors->has('image'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                                @endif
                                            </td>

                                            <td >


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