
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>create category</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('adminpanel/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{asset('adminpanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('adminpanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('adminpanel/plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('adminpanel/dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('adminpanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('adminpanel/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('adminpanel/plugins/summernote/summernote-bs4.css')}}">
 <!-- DataTables -->
 <link rel="stylesheet" href="{{asset('adminpanel/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
 <link rel="stylesheet" href="{{asset('adminpanel/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin/side')
    <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" style="min-height: 116px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-success">@yield('title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
      @yield('content')
        </div>
    </section>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</div>
<!-- jQuery -->
<script src="{{asset('adminpanel/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminpanel/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{asset('adminpanel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminpanel/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('adminpanel/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('adminpanel/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('adminpanel/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminpanel/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('adminpanel/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('adminpanel/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminpanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('adminpanel/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminpanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- DataTables -->
<script src="{{ asset('adminpanel/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminpanel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminpanel/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('adminpanel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('adminpanel/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminpanel/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminpanel/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('adminpanel/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminpanel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminpanel/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('adminpanel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>


<!-- Toastr -->
<script src="{{ asset('adminpanel/plugins/toastr/toastr.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminpanel/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminpanel/dist/js/demo.js')}}"></script>
<!-- page script -->
<script src="{{ asset('adminpanel/plugins/sweetalert2/sweetalert.min.js')}}"></script>


<script>
  $(function () {

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
     "columnDefs": [
            { width: 200, targets: 0 }
        ],
    });


  });

</script>

@yield('script')

</body>
</html>
