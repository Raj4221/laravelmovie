<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>RAJ CINEMA</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href={{asset('admin/plugins/fontawesome-free/css/all.min.css')}}>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href={{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}>
<!-- iCheck -->
<link rel="stylesheet" href={{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}>
<!-- JQVMap -->
<link rel="stylesheet" href={{asset('admin/plugins/jqvmap/jqvmap.min.css')}}>
<!-- Theme style -->
<link rel="stylesheet" href={{asset("admin/dist/css/adminlte.min.css")}}>
<!-- overlayScrollbars -->
<link rel="stylesheet" href={{asset("admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}>
<!-- Daterange picker -->
<link rel="stylesheet" href={{asset("admin/plugins/daterangepicker/daterangepicker.css")}}>
<!-- summernote -->
<link rel="stylesheet" href={{asset("admin/plugins/summernote/summernote-bs4.min.css")}}>
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>


    <script>
            function update(){
                swal({
                    text: "Book Succesfull",
                    icon: "success",
                    button: false,
                });
            }
            function insert(){
                swal({
                    text: "Insert Succesfull",
                    icon: "success",
                    button: false,
                });
            }
            function delete(){
                swal({
                    text: "Insert Succesfull",
                    icon: "success",
                    button: false,
                });
            }
    </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">



<!-- ======= Header ======= -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 " id="offcanvas">

        <span class="brand-text font-weight-light" style="color:white; font-size: 25px;font-weight: bold; margin: 10px;">RAJ CINEMA</span>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="font-weight: bold;font-size: 10px">Raj Desai</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="header" style="font-size: 18px;color: #cccccc;">DASHBOARD</li>
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/insert" class="nav-link">
                                <p style="color:#1aa67d;font-size: 15px">Add Movies</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/viewmovies" class="nav-link">
                                <p style="color:#1aa67d;font-size: 15px">View Movies</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/viewtheatre" class="nav-link">
                                <p style="color:#1aa67d;font-size: 15px">View Theatre</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/viewactor" class="nav-link">
                                <p style="color:#1aa67d;font-size: 15px">View Actors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <p style="color:#1aa67d;font-size: 15px">Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>

    </div>
    <!-- /.sidebar -->
</aside>

<div class="wrapper">
            @yield('page_content')
</div>


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer class="main-footer">
    <strong>Copyright &copy; 2016-{{ Carbon\Carbon::now()->year }} <a href="https://adminlte.io">Raj Desai</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0-rc
    </div>

    <script src={{asset("admin/plugins/jquery/jquery.min.js")}}></script>
    <!-- jQuery UI 1.11.4 -->
    <script src={{asset("admin/plugins/jquery-ui/jquery-ui.min.js")}}></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src={{asset("admin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <!-- ChartJS -->
    <script src={{asset("admin/plugins/chart.js/Chart.min.js")}}></script>
    <!-- Sparkline -->
    <script src={{asset("admin/plugins/sparklines/sparkline.js")}}></script>
    <!-- JQVMap -->
    <script src={{asset("admin/plugins/jqvmap/jquery.vmap.min.js")}}></script>
    <script src={{asset("admin/plugins/jqvmap/maps/jquery.vmap.usa.js")}}></script>
    <!-- jQuery Knob Chart -->
    <script src={{asset("admin/plugins/jquery-knob/jquery.knob.min.js")}}></script>
    <!-- daterangepicker -->
    <script src={{asset("admin/plugins/moment/moment.min.js")}}></script>
    <script src={{asset("admin/plugins/daterangepicker/daterangepicker.js")}}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{asset("admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>
    <!-- Summernote -->
    <script src={{asset("admin/plugins/summernote/summernote-bs4.min.js")}}></script>
    <!-- overlayScrollbars -->
    <script src={{asset("admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>
    <!-- AdminLTE App -->
    <script src={{asset("admin/dist/js/adminlte.js")}}></script>
    <script src={{asset("admin/plugins/summernote/summernote-bs4.min.js")}}></script>
    <!-- AdminLTE for demo purposes -->
{{--    <script src={{asset("admin/dist/js/demo.js")}}></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src={{asset("admin/dist/js/pages/dashboard.js")}}></script>

    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote()
            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

    @section('footerSection')
    @show
</footer>
© 2021 GitHub, Inc.<!-- End Footer -->

</body>

</html>
