@if(Auth::user()->state==1)




@extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">    <div class="panel-heading">
        تعديل بيانات {{$user->name}}
    </div>
    <div class="form-group">
    <form class="form-horizontal" action="{{url('/account/edit/'.$user->id.'')}}" method="post">

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
                                        <th>كلمة السر</th>
                                        <th>نوع المستخدم</th>

                                        <th>الاحداث</th>
                                    </tr>
                                    </thead>

                                    <tbody>


                                    <br/>
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>
                                                <input id="name" name="name" type="text" placeholder="اسم المستخدم" class="form-control" value="{{$user->name}}">
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </td>
                                        <td>
                                                <input id="email" name="email" type="text" placeholder=" رقم الهاتف المحمول او الايميل" class="form-control" value="{{$user->email}}">
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif

                                        <td>
                                                <input id="password" name="password" type="password"  class="form-control col-sm-3" value="{{$user->password}}">
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                           </td>
                                        <td>
                                                <select class="form-control" name="state" >


                                                    <option value="1"  @if($user->state==1) selected @endif>مدير </option>
                                                    <option value="2" @if($user->state==2) selected @endif> موظف الاستقبال</option>
                                                    <option value="3"  @if($user->state==3) selected @endif>مشرف الغرف </option>
                                                    <option value="4" @if($user->state==4) selected @endif > عامل</option>
                                                    <option value="5" @if($user->state==5) selected @endif > عميل</option>
                                                    <option value="0" @if($user->state==0) selected @endif > حساب موقف</option>


                                                </select>
                                                @if ($errors->has('state'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                        <strong>{{ $errors->first('state') }}</strong>
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