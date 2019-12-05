@if(Auth::user()->state==3)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <!-- form to add user-->
    <form class="form-horizontal" action="{{url('/s_box')}}" method="post">

    {{csrf_field()}}


    <!-- Name input-->




        <h2 class="page-title">اضافة طلبات خاصة بالنزلاء</h2>






        <!-- Name input-->
        <div class="form-group">
            <div class="form-group">
                <label class="col-md-1 control-label" for="reservation_id">الاسم</label>
                <div class="col-md-2">

                    <input type="text" name="user_name" >

                </div>
                @if ($errors->has('user_name'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                @endif






            </div>
            <div class="form-group">
                <label class="col-md-1 control-label" for="email">الايميل</label>
                <div class="col-md-2">

                    <input type="text" name="email" >

                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif






            </div>


            <div class="form-group">


                <label class="col-sm-2 control-label">الرسالة<span style="color:red">*</span></label>
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
                                        <th>الاسم</th>
                                        <th> الايميل</th>
                                        <th>الرسالة</th>
                                        <th>الاحداث</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($box as $value)


                                        <br/>
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->user_name}}</td>


                                            <td>{{$value->email}}</td>
                                            <td>{{$value->box}}</td>
                                            <td >

                                                <a href="{{url('/s_box/edit/'.$value->id.'')}}"  >
                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تعديل</button>
                                                </a>

                                                <a href="{{url('/s_box/delete/'.$value->id.'')}}"  >
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
