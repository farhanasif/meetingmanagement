<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
 @include('user.partials._css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('user.partials._header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('user.partials._sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('container')
  <!-- /.content-wrapper -->
  <!-- footer -->
  @include('user.partials._footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('user.partials._script')
</body>
</html>
