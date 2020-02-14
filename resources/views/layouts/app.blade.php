<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard | SPP Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="{{url('main.css')}}" rel="stylesheet">
{{--    <link href="{{url('DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{url('DataTables/datatables.css')}}">
{{--    <link rel="stylesheet" href="{{url('assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">--}}
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('layouts.header')
        <div class="app-main">
                @include('layouts.sidebar')
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        @yield('content')
                    </div>
                      @include('layouts.footer')
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="{{url('assets/scripts/main.js')}}"></script>
    <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
{{--    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>--}}
{{--    <script src="{{url('DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.js')}}"></script>--}}
    <script src="{{url('DataTables/datatables.js')}}"></script>
{{--    <script src="{{url('assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{url('assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>--}}

    <script>
        $(function() {
            $('#dataTable').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        });
    </script>
    @yield('js')
</body>
</html>
