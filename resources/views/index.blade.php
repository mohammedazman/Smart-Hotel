<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartHotel</title>
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/font-awesome.min.css') !!}"rel="stylesheet">
    <link href=  "{!! asset('css/datepicker3.css') !!}" rel="stylesheet">



    <link href="{!! asset('css/bootstrap-rtl.min.css') !!}" rel="stylesheet">

    <!--Custom Font-->
    <link href="{!! asset('css/sb-admin-2.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/dataTables.bootstrap4.min.css') !!}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src=    "{!! asset('js/html5shiv.js') !!}"></script>
    <script src= "{!! asset('js/respond.min.js') !!}"></script>
    <![endif]-->
    <link href= "{!! asset('css/styles.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/mystyle.css') !!}" rel="stylesheet">
</head>
<body>




@include('Layout.nav')

@if(Auth::user()->state==1)
    @include('Admin.side')
@elseif(Auth::user()->state==2)
    @include('Receptionist.side')
@elseif(Auth::user()->state==3)
    @include('Supervisor.side')
    {{--@include('Admin.main')--}}
@endif
<div class="col-sm-6 col-sm-offset-4 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home">الإدارة/ {{Auth::user()->type}}</em>
                </a></li>
            <li class="active"></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-11">
            <h1 class="page-header"></h1>
        </div>
    </div><!--/.row-->
    @include('Layout.message')
    @yield('content')
    {{-- <div class="panel panel-default">


     </div>--}}




    @include('Layout.footer')
</div>




<script src="{!! asset('js/jquery-1.11.1.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/chart.min.js') !!}"></script>
<script src="{!! asset('js/chart-data.js') !!}"></script>
<script src="{!! asset('js/easypiechart.js') !!}"></script>
<script src="{!! asset('js/easypiechart-data.js') !!}"></script>
<script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
<script src="{!! asset('js/custom.js') !!}"></script>
<script src="{!! asset('js/jquery.min.js') !!}"></script>

<script src="{!! asset('js/jquery.dataTables.min.js') !!}"></script>

<script src="{!! asset('js/dataTables.bootstrap4.min.js') !!}"></script>

<script src="{!! asset('js/datatables-demo.js') !!}"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>
</html>