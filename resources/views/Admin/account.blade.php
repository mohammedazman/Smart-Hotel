@if(Auth::user()->state==1)




    @extends('home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">اضافة المستخدمين</div>
                <div class="panel-body">

    <!-- form to add user-->
    <form class="form-horizontal" action="{{url('/account')}}" method="post">

    {{csrf_field()}}


    <!-- Name input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="name">اسم المستخدم</label>
            <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="اسم المستخدم" class="form-control" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>

            <label class="col-md-2 control-label" for="email" > رقم الهاتف المحمول او الايميل</label>
            <div class="col-md-4">
                <input id="email" name="email" type="text" placeholder=" رقم الهاتف المحمول او الايميل" class="form-control" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>

        </div>
        <label class="col-md-2 control-label" for="password">كلمة السر</label>
        <div class="col-md-4">
            <input id="password" name="password" type="password" placeholder="كلمة السر" class="form-control" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="state" >حالة الحساب</label>
            <div class="col-md-4">
                <select class="form-control" name="state"  required>
                    <option  disabled hidden  >إختيار </option>

                    <option value="1"  selected>مدير </option>
                    <option value="2" > موظف الاستقبال</option>
                    <option value="3" >مشرف الغرف </option>
                    <option value="4" > عامل</option>
                    <option value="5" > عميل</option>
                    <option value="0" > حساب موقف</option>


                </select>
                @if ($errors->has('chosen'))
                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('chosen') }}</strong>
                                    </span>
                @endif
            </div>
        </div>



        <br>
        <div class="form-group">
            <div class="form-group" style="margin:10px">
                <div class="col-sm-12 col-sm-offset-2" style="margin:10px">
                    <button class="btn btn-primary col-sm-4" name="submit" type="submit" style="margin:10px">رفع البيانات</button>
                    <button class="btn btn-default col-sm-4" type="reset" style="margin:10px">الغاء</button>
                </div>
            </div>
            {{--  <div class="col-md-6 ">
              <button type="reset" class="btn  btn-default">إلغــاء</button>
          </div>--}}
        </div>

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
                                    <th>الايميل</th>
                                    <th>حالة الحساب</th>
                                    <th>نوع المستخدم</th>
                                    <th>تاريخ الانشاء</th>
                                    <th>اخر تحديث</th>
                                    <th>الاحداث</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($users as $value)

                                        <br/>
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->state}}</td>
                                            <td>{{$value->type}}</td>
                                            <td>{{$value->created_at}}</td>
                                            <td>{{$value->updated_at}}</td>
                                            <td >

                                                <a href="{{url('/account/edit/'.$value->id.'')}}"  >
                                                    <button class="btn btn-primary right"  ><i class="icon-pencil icon-white"></i> تعديل</button>
                                                </a>

                                                <a href="{{url('/account/delete/'.$value->id.'')}}"  >
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
