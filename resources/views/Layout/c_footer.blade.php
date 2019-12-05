<!--================ start footer Area  =================-->
<div class="footer row clear justify-content-center   " style="background: #122b40; padding: 10px;" align="center">
    <div class="" style="height:5%;" align="center">


        <div class="">
            <div class="">
                <h6 class="footer_title" ALIGN="center" style="font-family: 'tahoma', sans-serif">اكتشف الفندق الذكي</h6>
                <div class="row">
                    <div class="">
                        <ul class="list_style  ">
                            <li class="nav-item active col-sm-2" ><a style="color: white;" class="nav-link" href="{{ url('/c_index') }}"><i class="fa fa-home"></i> <div class="text-monospace"></div>  </a></li>

                            <li class="nav-item col-sm-3"><a style="color: white;" class="nav-link"  href="{{ url('/c_service') }}" >الخدمات</a></li>

                            <li class="nav-item col-sm-4"><a style="color: white;" class="nav-link" href="{{ url('/#c_rooms') }}">انواع الغرف</a></li>
                            @if(Auth::check())
                                @if(Auth::user()->state==5)
                                    <li class="nav-item col-sm-4"><a style="color: white;" class="nav-link" href="{{url('/c_account_statement')}}">كشف الحساب</a></li>
                                @endif
                                @if(Auth::user())
                                    <li class="nav-item col-sm-4"><a style="color: white;" class="nav-link" href="http://192.168.1.2:8000/">التحكم بالموارد</a></li>
                                @endif

                            @endif
                            <li class="nav-item col-sm-4"><a style="color: white;" class="nav-link" href="{{url ('/#contact_us')}}">تواصل معنا</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>



        <div class="row footer-bottom d-flex justify-content-between align-items-center" align="center">
            <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <script>document.write(new Date().getFullYear());</script>جميع الحقوق&copy; محفوظة لدى Smart Hotel
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>

            </div>
        </div>
    </div>

</div>
<!--================ End footer Area  =================-->
