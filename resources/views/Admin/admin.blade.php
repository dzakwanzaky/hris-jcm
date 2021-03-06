<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminHRD | HRIS JCM</title>

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.min.css') }}">
  <!-- Icons Ion -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin/header')
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin/sidebar')

      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <!-- Main content -->
        <section class="content container-fluid">
          <section class="content-header">
            <h2>
              Dashboard Karyawan <br />
               <small>JCM - HRIS</small>
            </h2>
        </section>
      <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
              <div class="small-box bg-red">
                 <div class="inner">
                 <!-- TABLE BUKAN SETELAH APPROVE PIHAK DEPARTEMEN -->
                  <h3>{{ DB::table('model_izins')->where('status','Disetujui Manager/Supervisor')->count()}}</h3>
                    <p>Pengajuan Izin</p>
                 </div>
              <div class="icon">
            <i class="ion icon ion-pie-graph"></i>
              </div>
                  <a href="/izindiajukan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
        </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                  <!-- TABLE BUKAN SETELAH APPROVE PIHAK DEPARTEMEN -->
                  <h3>{{ DB::table('model_cutis')->where('status','Disetujui Manager/Supervisor')->count()}}</h3>
                    <p>Pengajuan Cuti</p>
                </div>
              <div class="icon">
            <i class="ion ion-stats-bars"></i>
              </div>
                  <a href="/cutidiajukan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
        </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>{{ DB::table('model_karyawans')->where('status','aktif')->count()}}</h3>
                    <p>Karyawan Aktif</p>
                </div>
              <div class="icon">
          <i class="ion icon ion-ios-people"></i>
              </div>
                  <a href="/datakaryawan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h3>{{ DB::table('users')->where('role', 'admin')->count()}}</h3>
                      <p>Admin HR</p>
                </div>
              <div class="icon">
            <i class="ion icon ion-person-stalker"></i>
              </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
          </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
                 <div class="small-box bg-pink">
                    <div class="inner">
                       <h3>{{ DB::table('users')->where('role', 'admin-departemen')->count()}}</h3>
                         <p>Admin Departemen</p>
                  </div>
               <div class="icon">
            <i class="ion icon ion-person-stalker"></i>
              </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <!-- ./col -->
        </div>
      </div>
        <!--------------------------
          | Your Page Content Here |
          -------------------------->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid"> 
    @yield('content')    
    <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Main Footer -->
  @include('admin/footer')
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/lte/dist/js/adminlte.min.js') }}"></script>
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{ asset('/lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
</body>
</html>
