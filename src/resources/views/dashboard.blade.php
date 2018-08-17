@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Admin Page
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="info-box" href="{{ url('admin/pages') }}" style="display: block">
                <span class="info-box-icon bg-aqua"><i class="fa fa-edit"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Content Management</span>
                    {{--<span class="info-box-number">90<small>%</small></span>--}}
                </div>
                <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="info-box" href="{{ url('assets') }}" style="display: block">
                <span class="info-box-icon bg-red"><i class="fa fa-folder-open"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Assets Management</span>
                    {{--<span class="info-box-number">41,410</span>--}}
                </div>
                <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="info-box" href="{{ url('users') }}" style="display: block">
                <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Users Management</span>
                    {{--<span class="info-box-number">760</span>--}}
                </div>
                <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="info-box" href="{{ url('settings') }}" style="display: block">
                <span class="info-box-icon bg-yellow"><i class="fa fa-cogs"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Configuration</span>
                    {{--<span class="info-box-number">2,000</span>--}}
                </div>
                <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="info-box" href="{{ url('stats') }}" style="display: block">
                <span class="info-box-icon bg-green"><i class="fa fa-percent"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Executive Dashboard</span>
                    {{--<span class="info-box-number">760</span>--}}
                </div>
                <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection

@section('scripts')
    <!-- FastClick -->
    <script src="{{ asset('vendor/adminlte/plugins/fastclick/fastclick.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('vendor/adminlte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{ asset('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{ asset('vendor/adminlte/plugins/chartjs/Chart.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('vendor/adminlte/dist/js/pages/dashboard2.js') }}"></script>
@endsection
