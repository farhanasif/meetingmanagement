<script src="{{asset('admin/js/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/js/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('admin/js/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin/js/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/js/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin/js/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/js/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin/js/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/js/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/js/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin/js/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/js/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/js/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/js/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/js/dist/js/demo.js')}}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{asset('admin/js/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/fullcalendar/main.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/fullcalendar-daygrid/main.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/fullcalendar-timegrid/main.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/fullcalendar-interaction/main.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/fullcalendar-bootstrap/main.min.js')}}"></script>
@yield('script')