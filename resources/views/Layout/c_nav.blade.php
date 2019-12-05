
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ url('/c_index') }}"><img src="image/Logo.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{ url('/c_index') }}"><i class="fa fa-home"></i> <div class="text-monospace"></div>  </a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('/c_service') }}" >الخدمات</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('/#c_rooms') }}">انواع الغرف</a></li>
                    <!--<li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li> -->
                    @if(Auth::check())
                    @if(Auth::user()->state==5)
                    <li class="nav-item"><a class="nav-link" href="{{url('/c_account_statement')}}">كشف الحساب</a></li>
                    @endif
                    @if(Auth::user())
                    <li class="nav-item"><a class="nav-link" href="{{url('/c_control')}}">التحكم بالموارد</a></li>
                    @endif

                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{url ('/#contact_us')}}">تواصل معنا</a></li>

                </ul>
            </div>
            <div class="button-group-area mt-10">
                @if(Auth::check())
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="genric-btn danger-border circle">
                        <em class="fa fa-power-off">&nbsp;</em> تسجيل الخروج
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                @elseif(1)
                    <a href="{{url('/c_sign_in')}}" class="genric-btn info-border circle">إنشاء حساب </a>
                    <a href="{{url('/c_login')}}" class="genric-btn success-border circle">تسجيل الدخول</a>
@endif
            </div>
        </nav>
    </div>
</header>
<!--================Header Area =================-->