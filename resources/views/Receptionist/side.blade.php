<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{ asset('img/no-photo-male.png')}}" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>{{Auth::user()->name}}</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class=""><a href="#"><em class="fa fa-dashboard">&nbsp;</em> الرئيسية</a></li>
        <li class="parent  {{Request::is('add_booking*') ? 'active' : ''}}
        {{Request::is('manage_booking*') ? 'active' : ''}}
        {{Request::is('order_booking*') ? 'active' : ''}}
        {{Request::is('confirmed_booking*') ? 'active' : ''}}
        {{Request::is('canceled_booking*') ? 'active' : ''}}
                "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> إدارة الحجوزات <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="{{ url('/add_booking') }}">
                        <span class="fa fa-clone">&nbsp;</span>اضافة حجز
                    </a></li>

                <li><a class="" href="{{ url('/manage_booking ') }}">
                        <span class="fa fa-clone">&nbsp;</span>ادارة جدول الحجز
                    </a></li>

                <li><a class="" href="{{ url('/order_booking') }}">
                        <span class="fa fa-clone">&nbsp;</span>ادارة طلبات الحجز
                    </a></li>

                <li><a class="" href="{{ url('/confirmed_booking') }}">
                        <span class="fa fa-clone">&nbsp;</span>الحجوزات المؤكدة
                    </a></li>

                <li><a class="" href="{{ url('/canceled_booking') }}">
                        <span class="fa fa-clone">&nbsp;</span>الحجوزات الملغية
                    </a></li>



            </ul>
        </li>
        <li class="parent {{Request::is('r_room*') ? 'active' : ''}}
        {{Request::is('r_room_booking*') ? 'active' : ''}}
                "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em> الغرف <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a class="" href="{{ url('/r_room') }}">
                        <span class="fa fa-clone">&nbsp;</span>الغرف المتاحة
                    </a></li>
                <li><a class="" href="{{ url('/r_room_booking') }}">
                        <span class="fa fa-clone">&nbsp;</span>الغرف المحجوزة
                    </a></li>

            </ul>
        </li>

        <li class="{{Request::is('p_payment*') ? 'active' : ''}}"><a href="{{ url('/p_payment') }}"><em class="fa fa-clone">&nbsp;</em> ادارة السدادات</a></li>
        <li  class="{{Request::is('r_bill*') ? 'active' : ''}}"><a href="{{ url('/r_bill') }}"><em class="fa fa-clone">&nbsp;</em> ادارة الفواتير</a></li>

        <li  class="{{Request::is('statement_booking*') ? 'active' : ''}}"><a href="{{ url('/statement_booking') }}"><em class="fa fa-clone">&nbsp;</em> كشف الحساب</a></li>




        <li><a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <em class="fa fa-power-off">&nbsp;</em> تسجيل الخروج
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form></li>
    </ul>
</div><!--/.sidebar-->
