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
        <li class="parent {{Request::is('account') ? 'active' : ''}}  "><a data-toggle="collapse" href="#sub-item-1">

                <em class="fa fa-navicon">&nbsp;</em> إدارة الحسابات <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse  " id="sub-item-1">
                <li><a class="" href="{{ url('/account') }}">
                        <span class="fa fa-clone">&nbsp;</span>حسابات المستخدمين
                    </a></li>



            </ul>
        </li>
        <li class="parent {{Request::is('room*') ? 'active' : ''}}"><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em> الغرف <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a class="" href="{{ url('/room') }}">
                        <span class="fa fa-clone">&nbsp;</span>ادارة الغرف
                    </a></li>
                <li><a class="" href="{{ url('/room_state') }}">
                        <span class="fa fa-clone">&nbsp;</span>حالة الغرف
                    </a></li>

            </ul>
        </li>

        <li class="{{Request::is('service*') ? 'active' : ''}}"><a href="{{ url('/service') }}"><em class="fa fa-clone">&nbsp;</em> الخدمات</a></li>
        <li class="{{Request::is('booking*') ? 'active' : ''}}"><a href="{{ url('/booking') }}"><em class="fa fa-clone">&nbsp;</em> الحجوزات</a></li>
        <li class="parent {{Request::is('order*') ? 'active' : ''}} {{Request::is('bill*') ? 'active' : ''}} {{Request::is('payment*') ? 'active' : ''}}
        {{Request::is('message*') ? 'active' : ''}}  {{Request::is('box*') ? 'active' : ''}} "><a data-toggle="collapse" href="#sub-item-4">
            <em class="fa fa-navicon">&nbsp;</em> العملاء <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-4">
            <li class=""><a class="" href="{{ url('/order') }}">
                    <span class="fa fa-clone">&nbsp;</span>طلبات العملا
                </a></li>
            <li class=""><a class="" href="{{ url('/bill') }}">
                    <span class="fa fa-clone">&nbsp;</span>مبالغ على العملا
                </a></li>
            <li class=""><a class="" href="{{ url('/payment') }}">
                    <span class="fa fa-clone">&nbsp;</span>مدفوعات العملا
                </a></li>
            <li class=""><a class="" href="{{ url('/message') }}">
                    <span class="fa fa-clone">&nbsp;</span>رسائل العملاء
                </a></li>
            <li class=""><a class="" href="{{ url('/box') }}">
                    <span class="fa fa-clone">&nbsp;</span>بريد العملاء
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
