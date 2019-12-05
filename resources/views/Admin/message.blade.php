@if(Auth::user()->state==1)




    @extends('home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">

    <!-- form to add user-->
    <form class="form-horizontal" action="{{url('/message')}}" method="post">

    {{csrf_field()}}


    <!-- Name input-->




        <h2 class="page-title">اضافة طلبات خاصة بالنزلاء</h2>






        <!-- Name input-->
        <div class="form-group">
            <div class="form-group">
                <label class="col-md-1 control-label" for="reservation_id">رقم الحجز</label>
                <div class="col-md-2">

                    <input list="reservation_id" name="reservation_id" >
                    <datalist id="reservation_id">
                        @foreach($reservation as $value)
                            <option value="{{$value->id}}">
                        @endforeach
                    </datalist>
                </div>
                @if ($errors->has('reservation_id'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('reservation_id') }}</strong>
                                    </span>
                @endif






            </div>


            <div class="form-group">


                <label class="col-sm-2 control-label">تفاصيل الطلب<span style="color:red">*</span></label>
                <div class="col-sm-5">

                                                <textarea name="message" rows="1" cols="20" class="form-control">
                                                </textarea>

                </div>
                @if ($errors->has('message'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                @endif

            </div>




            <br>











            <br>
            <div class="form-group" style="margin:10px">
                <div class="col-sm-12 col-sm-offset-2" style="margin:10px">
                    <button class="btn btn-primary col-sm-4" name="submit" type="submit" style="margin:10px">اضافة الطلب</button>
                    <button class="btn btn-default col-sm-4" type="reset" style="margin:10px">الغاء</button>
                </div>
            </div>
        </div>
        {{--  <div class="col-md-6 ">
          <button type="reset" class="btn  btn-default">إلغــاء</button>
      </div>--}}
    </form>








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
                                        <th>رقم الحجز</th>
                                        <th>تفاصيل الطلب</th>
                                        <th>تاريخ تقديم الطلب</th>
                                        <th>الاحداث</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($message as $value)


                                        <br/>
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->reservation_id}}</td>


                                            <td>{{$value->message}}</td>
                                            <td>{{$value->created_at}}</td>
                                            <td >

                                                <a href="{{url('/message/edit/'.$value->id.'')}}"  >
                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تعديل</button>
                                                </a>

                                                <a href="{{url('/message/delete/'.$value->id.'')}}"  >
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
