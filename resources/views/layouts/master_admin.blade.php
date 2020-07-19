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

  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  

  <!-- Font Awesome Icons -->

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Center navbar links --> 
    <ul class="navbar-nav ml-auto">
    <h1>@yield('judul')</h1>
    </ul>
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"  class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><h2>Flourisch</h2></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a  href="/admin/dashboard/"class="nav-link {{Request::is('admin/dashboard') ? 'active' : ''}}">
            <img src="/../../assets/assets/img/icon/home.png" class="mr-2"style="width:30px;"alt="">
            <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a  href="/admin/dashboard/order"class="nav-link {{Request::is('admin/dashboard/order') ? 'active' : ''}}">    
          <img src="/../../assets/assets/img/icon/calendar.png" class="mr-2"style="width:30px;"alt="">
          <p>
                Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/dashboard/event" class="nav-link {{Request::is('admin/dashboard/event') ? 'active' : ''}}">
            <img src="/../../assets/assets/img/icon/discount.png" class="mr-2"style="width:30px;"alt="">
              <p>
                Event
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
            <img src="/../../assets/assets/img/icon/turn-off.png" class="mr-2"style="width:30px;"alt="">
              <p>{{ __('Logout') }} 
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
      @yield('content')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
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
  <footer class="main-footer mt-4">
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<!-- <script src="assets/js/jquery.min.js"></script> -->

<script src="/../../assets/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/../../assets/js/bootstrap.bundle.min.js"></script>

<!-- <script src="assets/js/bootstrap.min.js"></script> -->
<!-- AdminLTE App -->
<script src="../../../assets/js/adminlte.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
