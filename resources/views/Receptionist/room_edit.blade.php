@if(Auth::user()->state==2)




    @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">معلومات اساسية</div>
                <div class="panel-body">
    <!-- form to add user-->
    <form class="form-horizontal" action="{{url('/r_room')}}" method="post">

    {{csrf_field()}}


    <!-- Name input-->




        <h2 class="page-title">تعديل بينات الغرف</h2>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">معلومات اساسية</div>
                    <div class="panel-body">
                        <form action="/room/add" method="post" class="form-horizontal" enctype="multipart/control-data">
                            <div class="form-group">

                                <label class="col-sm-2 control-label">السعر<span style="color:red">*</span></label>
                                <div class="col-sm-4">
                                    <input type="number" name="price" class="form-control" value="{{$room->price}}" required>
                                </div>
                                @if ($errors->has('price'))
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif

                                <label class="col-sm-2 control-label">نوع الغرفة<span style="color:red">*</span></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="room_type" required>

                                        <option value="1" @if($room->type==1) selected @endif> Double Room </option>
                                        <option value="2" @if($room->type==2) selected @endif> Single Room </option>
                                        <option value="3" @if($room->type==3) selected @endif> شقق </option>
                                        <option value="4" @if($room->type==4) selected @endif> VIP </option>





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
                                    <label class="radio-inline"><input type="radio" name="room_state" value="1" @if($room->room_state==1) checked @endif >متوفر</label>
                                    <label class="radio-inline"><input type="radio" name="room_state" value="0" @if($room->room_state==0) checked @endif>غير متوفر</label>
                                    <label class="radio-inline"><input type="radio" name="room_state" value="2" @if($room->room_state==2) checked @endif >محجوز</label>
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
                                    Image 1 <span style="color:red">*</span><input type="file" name="image1"  >
                                </div>
                                @if ($errors->has('image1'))
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('image1') }}</strong>
                                    </span>
                                @endif
                                <img src="/storage/room_image/{{$room_image->image1}}" class="img-responsive" alt="Cinque Terre">
                                <div class="col-sm-6">
                                    Image 2<span style="color:red">*</span><input type="file" name="image2" " >
                                </div>
                                @if ($errors->has('image2'))
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('image2') }}</strong>
                                    </span>
                                @endif

                                <div class="col-sm-6">
                                    Image 3<span style="color:red">*</span><input type="file" name="image3" >
                                </div>
                                @if ($errors->has('image3'))
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('image3') }}</strong>
                                    </span>
                                @endif

                                <div class="col-sm-6">
                                    Image 4 <span style="color:red">*</span><input type="file" name="image4"  >

                                </div>
                                @if ($errors->has('image4'))
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('image4') }}</strong>
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
                                    <button class="btn btn-primary col-sm-4" name="submit" type="submit" style="margin:10px">رفع المنتج</button>
                                    <button class="btn btn-default col-sm-4" type="reset" style="margin:10px">الغاء</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div></div></div>







        <!-- show table of user-->
    </form>

                </div></div></div></div>
@endsection()

@endif
