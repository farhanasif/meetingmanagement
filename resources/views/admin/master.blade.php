<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
 @include('admin.partials._css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.partials._header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.partials._sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('container')
  <!-- /.content-wrapper -->
  <!-- footer -->
  @include('admin.partials._footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.partials._script')
</body>
</html>
