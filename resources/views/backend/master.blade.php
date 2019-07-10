<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--favicon-->
    <link rel="icon" href="{{ asset('/backend') }}/assets/images/favicon.ico" type="image/x-icon" />
    <!-- Vector CSS -->
    <link href="{{ asset('/backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ asset('/backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('/backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--Data Tables -->
    <link href="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- animate CSS-->
    <link href="{{ asset('/backend') }}/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('/backend') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('/backend') }}/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('/backend') }}/assets/css/app-style.css" rel="stylesheet" />
    <style type="text/css">
        .coustom-btn {
            font-size: 20px;
            font-weight: 500;
            letter-spacing: 1px;
            padding: 0px 8px;
            border-radius: .25rem;
            text-transform: uppercase;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, .075);
        }
    </style>
</head>

<body>

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('backend.include.sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('backend.include.header')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!--Start Dashboard Content-->
                @yield('main-content')
                <!--End Dashboard Content-->
            </div>
            <!-- End container-fluid-->
        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Bulona Admin
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>
                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>
                <p class="mb-0">Gradient Background</p>
                <hr>
                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                </ul>

            </div>
        </div>
        <!--end color cwitcher-->
    </div>
    <!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/backend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="{{ asset('/backend') }}/assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="{{ asset('/backend') }}/assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="{{ asset('/backend') }}/assets/js/jquery.loading-indicator.html"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('/backend') }}/assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="{{ asset('/backend') }}/assets/plugins/Chart.js/Chart.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('/backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Easy Pie Chart JS -->
    <script src="{{ asset('/backend') }}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <!-- Sparkline JS -->
    <script src="{{ asset('/backend') }}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>
      <!--Data Tables js-->
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
    <script src="{{ asset('/backend') }}/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="{{ asset('/backend/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor1');
        CKEDITOR.replace( 'editor2');
        CKEDITOR.replace( 'editor3');
        CKEDITOR.replace( 'editor4');
    </script>
    <!-- Index js -->
    <script src="{{ asset('/backend') }}/assets/js/index.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            //Default data table
            $('#default-datatable').DataTable();
            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
            });
            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


</body>
</html>
