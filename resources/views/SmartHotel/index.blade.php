

@extends('costumer')
@section('content')
    @if(session('success'))
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <strong>شكرا!</strong>  {{session('success')}}.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        </div>


    @endif



<div class="clearfix"></div>
    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/big_image_1.jpg'); border-radius:10px; ">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate fadeInUp element-animated">
                        <br><br><br><br><br><br>
                        <h1 style="font-family: 'tahoma', sans-serif">مرحبا بكم في Smart Hotel</h1>
                        <p>Discover our world's #1 Smart Hotel</p>
                        <a href="{{url('/c_booking_now/double')}}" class="btn theme_btn button_hover">احجز الان</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--================Banner Area =================-->

    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap" id="c_rooms">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">أنواع الغرف</h2>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room1.jpg" alt="">
                            <a href="{{url('/c_booking_now/double')}}" class="btn theme_btn button_hover">حجز الان</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">Double Room</h4></a>
                        <h5>$250<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room2.jpg" alt="">
                            <a href="{{url('/c_booking_now/single')}}" class="btn theme_btn button_hover">حجز الان</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">Single Room</h4></a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room3.jpg" alt="">
                            <a href="{{url('/c_booking_now/apartment')}}" class="btn theme_btn button_hover">حجز الان</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">شقق</h4></a>
                        <h5>$750<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room4.jpg" alt="">
                            <a href="{{url('/c_booking_now/vip')}}" class="btn theme_btn button_hover">حجز الان</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">VIP</h4></a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room4.jpg" alt="">
                            <a href="{{url('/c_booking_now/jna')}}" class="btn theme_btn button_hover">حجز الان</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">جناح</h4></a>
                        <h5>$1000<small>/night</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">الخدمات المتوفرة</h2>

            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>مطعم</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>نادي رياضي</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>حوض سباحة</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>مواقف سيارات</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="fa fa-wifi"></i>واي فاي </h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>شيش</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color" align="right">من نحن</h2>
                        <p align="right" style="font-size: 20px">نحن فندق Smart Hotel  يمكننا التحكم وإدارة عمليات الفندق عن طريق
                            الموقع والنظام المتواجد في الأجهزة الذكية للتواصل مع العميل بالواجهات الرسومية لتنفيذ طلباته.
                        </p>
                        <a href="#contact_us" class="button_hover theme_btn_two">تواصل معنا</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="image/about_bg.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!--================ Testimonial Area  =================-->

        <div class="testimonial_area section_gap jumbotron" align="center" id="contact_us">
            <h3>تواصل معانا</h3>
            <div style="width: 60%" >

                <br>
                <form  method="post" action="{{url('/contact_us')}}">
                    @csrf
                    @if(!Auth::check())
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" name="name" id="name"  class="form-control" placeholder="إسم المستخدم">
                        </div>

                        <div class="form-group">
                            <input type="text" name="email" id="email"  class="form-control" placeholder="الايميل">
                        </div>

                    </div>
                    @endif
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea name="message" rows="5"  id="message" class="form-control" placeholder="إكتب النص الذي تريد إرساله هنا"> </textarea>
                        </div>
                        <button type="submit" name="contact" class="btn btn-danger btn-lg btn-block">ارسال </button>

                    </div>
                </form>
<div class="clearfix"></div>
                <!-- End Contact Form -->
            </div>

        </div>

    <!--================ Testimonial Area  =================-->

    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area ">

    </section>
    <!--================ Recent Area  =================--
<div class="page-container">
        <section class="contact-us text-center">
                <div class="field" id="contact">
                  <div class="container">
                   <div class="row">

                       <i class="fa fa-headphones fa-5x"> </i>
                      <h1> أخبرنا عن رايك حول الموقع </h1>
                      <p class="lead">يمكنك التواصل معنا في أي وقت تريد </p>

                      <!--start Contact Form -->



@endsection()