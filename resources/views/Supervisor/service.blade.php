@if(Auth::user()->state==3)




    @extends('home')
@section('content')


    <!-- form to add user-->


    <!-- Name input-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">



        <h2 class="page-title">اضافة خدمة</h2>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">معلومات اساسية</div>
                    <div class="panel-body">
                        <form action="{{url('/s_service')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">

                                <label class="col-sm-2 control-label">السعر<span style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <input type="number" name="price" class="form-control" required>
                                </div>
                                @if ($errors->has('price'))
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif










                                <label class="col-sm-2 control-label">نوع الخدمة<span style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <input type="text" name="type" class="form-control" required>
                                </div>
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif




                            </div>




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
                                    Image  <span style="color:red">*</span><input type="file" name="image" >
                                </div>
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
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
                                    <button class="btn btn-primary col-sm-4" name="submit" type="submit" style="margin:10px">اضافة خدمة</button>
                                    <button class="btn btn-default col-sm-4" type="reset" style="margin:10px">الغاء</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div></div></div>







        <!-- show table of user-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">بيانات الخدمات</div>
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
                                            <th>#id</th>
                                            <th>نوع الخدمة</th>
                                            <th>التفاصيل</th>
                                            <th>الصورة</th>
                                            <th>السعر</th>
                                            <th>تاريخ الانشاء</th>
                                            <th>اخر تحديث</th>
                                            <th>الاحداث</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($services as $value)

                                            <br/>
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->type}}</td>
                                                <td>{{$value->details}}</td>
                                                <td>{{$value->image}}</td>
                                                <td>{{$value->price}}</td>

                                                <td>{{$value->created_at}}</td>
                                                <td>{{$value->updated_at}}</td>
                                                <td >

                                                    <a href="{{url('/s_service/edit/'.$value->id.'')}}"  >
                                                        <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تعديل</button>
                                                    </a>

                                                    <a href="{{url('/s_service/delete/'.$value->id.'')}}"  >
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

                </div></div></div></div></div></div></div></div>
@endsection()

@endif
