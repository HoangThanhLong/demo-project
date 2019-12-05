<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    {{--    <link rel="stylesheet" href="{{ asset('back-end/theme-assets/css/vendors.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('back-end/theme-assets/vendors/css/charts/chartist.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('back-end/theme-assets/css/app-lite.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('back-end/theme-assets/css/core/menu/menu-types/vertical-menu.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('back-end/theme-assets/css/core/colors/palette-gradient.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('back-end/theme-assets/css/pages/dashboard-ecommerce.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('back-end2/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('back-end2/vendor/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{ asset('back-end2/css/sb-admin.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/c006c97f7f.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body id="page-top">
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div class="row">
    <div id="wrapper">
        <div>
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Posts</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="{{route('posts.list')}}">All Post</a>
                        <a class="dropdown-item" href="{{route('posts.create')}}">Add New</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Media</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="login.html">All Post</a>
                        <a class="dropdown-item" href="register.html">Add New</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Comments</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Contact</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.container-fluid -->
    <div class="col">
        @yield('content')
    </div>
</div>
<!-- Sticky Footer -->

{{--<footer class="sticky-footer">--}}
{{--    <div class="container my-auto">--}}
{{--        <div class="copyright text-center my-auto">--}}
{{--            <span>Copyright © Your Website 2019</span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
<!-- /.content-wrapper -->


{{--    <script src="{{ asset('back-end/theme-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('back-end/theme-assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('back-end/theme-assets/js/core/app-menu-lite.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('back-end/theme-assets/js/core/app-lite.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('back-end/theme-assets/js/scripts/pages/dashboard-lite.js') }}" type="text/javascript"></script>--}}
<script src="{{ asset('back-end2/vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('back-end2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('back-end2/vendor/jquery-easing/jquery.easing.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/sb-admin.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/demo/datatables-demo.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/demo/chart-area-demo.js')}}" type="text/javascript"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script> CKEDITOR.replace('editor1'); </script>
</body>
</html>
