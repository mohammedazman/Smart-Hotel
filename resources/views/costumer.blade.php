<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Smart Hotel</title>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{!! asset('vendors/linericon/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/owl-carousel/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/nice-select/css/nice-select.css') !!}">

    <!-- main css -->


    <link rel="stylesheet" href="assets/css/style.css">


    <link rel="stylesheet" href="{!! asset('css/css/main.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/css/font-awesome.min.css') !!}">


    <!-- main css -->
    <link rel="stylesheet" href="{!! asset('css/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/css/responsive.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/css/bootstrap-rtl.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/css/me.css') !!}">

    <link href="{!! asset('css/css/bootstrap.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/css/font-awesome.min.css') !!}"rel="stylesheet">
    <link href=  "{!! asset('css/css/datepicker3.css') !!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/jqueryui.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/robotofont.css') !!}">
<link rel="stylesheet" href="{!! asset('css/style12.css') !!}"/>


    <!-- datepicker -->


    <!-- Main Style Css -->






    <!--Custom Font-->


    {{--<!--[if lt IE 9]>
        <script src=    "{!! asset('js/html5shiv.js') !!}"></script>
        <script src= "{!! asset('js/respond.min.js') !!}"></script>
        <![endif]-->--}}




</head>
<body style=" backgroundge: none;">




@include('Layout.c_nav')




<div style=" width: 50%;
margin-top: 200px;

    top: 150px;
    right: 25%;

    height: 100px; " >
@include('Layout.message')
</div>
@yield('content')

@yield('action')
@include('Layout.c_footer')














{{--
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
--}}


</body>

<script src="{!! asset('js/jquery-3.2.1.min.js') !!}"></script>

<script src="{!! asset('js/jquery-ui.min.js') !!}"></script>
<script src="{!! asset('js/main.js') !!}"></script>
<script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') !!}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{!! asset('js/jss/vendor/bootstrap.min.js') !!}"></script>

<script src="{!! asset('js/jss/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('js/jss/jquery.nice-select.min.js') !!}"></script>
<script src="{!! asset('js/jss/jquery.magnific-popup.min.js') !!}"></script>
<script src="{!! asset('js/jss/main.js') !!}"></script>

<script src="{!! asset('js/jss/popper.js') !!}"></script>
<script src="{!! asset('js/jss/bootstrap.min.js') !!}"></script>
<script src="{!! asset('vendors/owl-carousel/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('js/jss/jquery.ajaxchimp.min.js') !!}"></script>
<script src="{!! asset('js/jss/mail-script.js') !!}"></script>


<script src="{!! asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') !!}"></script>
<script src="{!! asset('vendors/nice-select/js/jquery.nice-select.js') !!}"></script>

<script src="{!! asset('js/jss/stellar.js') !!}"></script>
<script src="{!! asset('js/jss/custom.js') !!}"></script>


<script src="{!! asset('js/jquery.min.js') !!}"></script>

<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>

<script src="{!! asset('js/steps.js') !!}"></script>
<script>
    $(document).ready(function(){

        $("#finish").click(function(){
            $("form").submit();

    })

    });
</script>
<script type="text/javascript">

$(window).on('load',function (){
    $('#myModal').model();
});
</script>
</html>