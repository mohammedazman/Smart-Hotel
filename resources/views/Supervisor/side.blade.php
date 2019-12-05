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
        <li ><a href="#"><em class="fa fa-dashboard">&nbsp;</em> الرئيسية</a></li>

        <li class="{{Request::is('s_service*') ? 'active' : ''}}"><a href="{{ url('/s_service') }}"><em class="fa fa-clone">&nbsp;</em> ادارة الخدمات</a></li>

        <li class="parent {{Request::is('add_order*') ? 'active' : ''}}
        {{Request::is('manage_order*') ? 'active' : ''}}
        {{Request::is('current_order*') ? 'active' : ''}}
        {{Request::is('old_order*') ? 'active' : ''}}
        {{Request::is('canceled_order*') ? 'active' : ''}}"><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> إدارة الطلبات <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="{{ url('/add_order') }}">
                        <span class="fa fa-clone">&nbsp;</span>اضافة طلب
                    </a></li>

                <li><a class="" href="{{ url('/manage_order ') }}">
                        <span class="fa fa-clone">&nbsp;</span>ادارة جدول الطلبات
                    </a></li>

                <li><a class="" href="{{ url('/current_order') }}">
                        <span class="fa fa-clone">&nbsp;</span>طلبات قيد الانتضار
                    </a></li>

                <li><a class="" href="{{ url('/old_order') }}">
                        <span class="fa fa-clone">&nbsp;</span>طلبات منفذة
                    </a></li>

                <li><a class="" href="{{ url('/canceled_order') }}">
                        <span class="fa fa-clone">&nbsp;</span>طلبات مرفوضة
                    </a></li>



            </ul>
        </li>
        <li class="{{Request::is('s_message*') ? 'active' : ''}}"><a href="{{ url('/s_message') }}"><em class="fa fa-clone">&nbsp;</em> ادارة الطلبات الخاصة</a></li>


        <li class="parent
{{Request::is('s_room*') ? 'active' : ''}}
        {{Request::is('s_room_booking*') ? 'active' : ''}}
                "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em> الغرف <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a class="" href="{{ url('/s_room') }}">
                        <span class="fa fa-clone">&nbsp;</span>الغرف المتاحة
                    </a></li>
                <li><a class="" href="{{ url('/s_room_booking') }}">
                        <span class="fa fa-clone">&nbsp;</span>الغرف المحجوزة
                    </a></li>

            </ul>
        </li>



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
