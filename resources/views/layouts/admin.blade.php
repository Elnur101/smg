<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ADMIN</title>
    <meta
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        name="viewport"
    />
    <link
        rel="icon"
        href="{{asset("/dash/assets/img/kaiadmin/favicon.ico")}}"
        type="image/x-icon"
    />
    <!-- Fonts and icons -->
    <script src="{{asset('/dash/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{asset('/dash/assets/css/fonts.min.css')}}"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('/dash/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/dash/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/dash/assets/css/kaiadmin.min.css')}}" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
{{--    <link rel="stylesheet" href="{{asset('/dash/assets/css/demo.css')}}" />--}}
</head>
<body>
<div class="wrapper">
  @include('include-admin.sidebar')
    <div class="main-panel">
       @include('include-admin.main-header')
        <div class="container">
            <div class="page-inner">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->

<script src="{{asset("/dash/assets/js/core/jquery-3.7.1.min.js")}}"></script>
<script src="{{asset("/dash/assets/js/core/popper.min.js")}}"></script>
<script src="{{asset("/dash/assets/js/core/bootstrap.min.js")}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('/dash/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

<!-- Chart JS -->
<script src="{{asset('/dash/assets/js/plugin/chart.js/chart.min.js')}}"></script>

<!-- jQuery Sparkline -->
<script src="{{asset('/dash/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Chart Circle -->
<script src="{{asset('/dash/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('/dash/assets/js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
{{--<script src="{{asset('/dash/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>--}}

<!-- jQuery Vector Maps -->
<script src="{{asset('/dash/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
<script src="{{asset('/dash/assets/js/plugin/jsvectormap/world.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{asset('/dash/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Kaiadmin JS -->
<script src="{{asset('/dash/assets/js/kaiadmin.min.js')}}"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="{{asset('/dash/assets/js/setting-demo.js')}}"></script>
<script src="{{asset('/dash/assets/js/demo.js')}}"></script>
<script src="{{asset('/dash/assets/js/main.js')}}"></script>
<script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
    });
</script>
</body>
</html>

