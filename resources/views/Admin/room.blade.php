@if(Auth::user()->state==1)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <!-- form to add user-->
    <form class="form-horizontal" action="{{url('/room')}}" method="post">

    {{csrf_field()}}


    <!-- Name input-->




                        <h2 class="page-title">اضافة غرفة</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">معلومات اساسية</div>
                                    <div class="panel-body">
                                        <form action="/room/add" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-group">

                                                <label class="col-sm-2 control-label">السعر<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="number" name="price" class="form-control" required>
                                                </div>
                                                @if ($errors->has('price'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                                @endif

                                                    <label class="col-sm-2 control-label">نوع الغرفة<span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" name="room_type" required>

                                                            <option value="1"> Double Room </option>
                                                            <option value="2"> Single Room </option>
                                                            <option value="3"> شقق </option>
                                                            <option value="4"> VIP </option>
                                                            <option value="5"> جناح </option>





                                                        </select>
                                                    </div>
                                                @if ($errors->has('room_type'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('room_type') }}</strong>
                                    </span>
                                                @endif


                                    </div>



                                            <label class="col-sm-2 control-label">حالة الغرفة<span style="color:red">*</span></label>
                                            <div class="col-sm-4">
<form>
                                                <label class="radio-inline"><input type="radio" name="room_state" value="1" checked >متوفر</label>
                                                <label class="radio-inline"><input type="radio" name="room_state" value="0" >غير متوفر</label>
                                                <label class="radio-inline"><input type="radio" name="room_state" value="2" >محجوز</label>
</form>
                                            </div>
                                            @if ($errors->has('room_state'))
                                                <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('room_state') }}</strong>
                                    </span>
                                            @endif
                                            <div style="clear: both; margin-bottom: 50px; "></div>

                                            <label class="col-sm-2 control-label">التفاصيل<span style="color:red">*</span></label>
                                            <div class="col-sm-8">

                                                <textarea name="details" rows="10" cols="50" class="form-control">
                                                </textarea>

                                            </div>
                                            @if ($errors->has('details'))
                                                <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                                        @endif
                                            <!-- second row -->
                                            <div class="hr-dashed"></div>




                                            <div class="hr-dashed"></div>


                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <h4><b>رفع الصورة</b></h4>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    Image 1 <input type="file" name="image1"   >
                                                </div>
                                                @if ($errors->has('image1'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('image1') }}</strong>
                                    </span>
                                                @endif

                                            </div>

                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <div class="col-sm-12">

                                                </div>
                                            </div>



                                            <div class="hr-dashed"></div>
                                            <div class="form-group" style="margin:10px">
                                                <div class="col-sm-12 col-sm-offset-2" style="margin:10px">
                                                    <button class="btn btn-primary col-sm-4" name="submit" type="submit" style="margin:10px">رفع البيانات</button>
                                                    <button class="btn btn-default col-sm-4" type="reset" style="margin:10px">الغاء</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div></div></div>







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

                                                <a href="{{url('/room/edit/'.$value->id.'')}}"  >
                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تعديل</button>
                                                </a>

                                                <a href="{{url('/room/delete/'.$value->id.'')}}"  >
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

    </form></div></div></div></div>
@endsection()

@endif
