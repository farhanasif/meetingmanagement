@extends('admin.master')
@section('title', 'My Meeting')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">My meeting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard of meeting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Mettings view Point</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">               <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" aria-controls="example1">Serial</th>
                    <th class="sorting_asc" aria-controls="example1">Date</th>
                    <th class="sorting">Time Duration</th>
                    <th class="sorting">Name</th>
                    <th class="sorting">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr role="row" class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">1</td>
                    <td class="dtr-control sorting_1" tabindex="0">10 Jan 2021</td>
                    <td>11:30 pm - 1:30 pm</td>
                    <td>Staff Meeting</td>
                    <td>
                    <a href="{{route('promotorMeetingDetails')}}" class="btn btn-info btn-xs">More Details</a>&nbsp;&nbsp;<button class="btn btn-success btn-xs">Confirmed</button></td>
                  </tr>
                  <tr role="row" class="odd">
                  <td class="dtr-control sorting_1" tabindex="0">2</td>
                    <td class="dtr-control sorting_1" tabindex="0">12 Jan 2021</td>
                    <td>2:30 pm - 3:30 pm</td>
                    <td>Employee Meeting</td>
                    <td><a href="{{route('promotorMeetingDetails')}}" class="btn btn-info btn-xs">More Details</a>&nbsp;&nbsp;<button class="btn btn-warning btn-xs">Confirm</button></td>
                  </tr>
                  <tr role="row" class="odd">
                  <td class="dtr-control sorting_1" tabindex="0">3</td>
                    <td class="dtr-control sorting_1" tabindex="0">12 Jan 2021</td>
                    <td>5:00 pm - 5:30 pm</td>
                    <td>Discussion Meeting</td>
                    <td><a href="{{route('promotorMeetingDetails')}}" class="btn btn-info btn-xs">More Details</a>&nbsp;&nbsp;<button class="btn btn-success btn-xs">Confirmed</button></td>
                  </tr>
                  <tr role="row" class="odd">
                  <td class="dtr-control sorting_1" tabindex="0">4</td>
                    <td class="dtr-control sorting_1" tabindex="0">13 Jan 2021</td>
                    <td>12:00 pm - 1:30 pm</td>
                    <td>Staff Meeting</td>
                    <td><a href="{{route('promotorMeetingDetails')}}" class="btn btn-info btn-xs">More Details</a>&nbsp;&nbsp;<button class="btn btn-success btn-xs">Confirmed</button></td>
                  </tr>
                  <tr role="row" class="odd">
                  <td class="dtr-control sorting_1" tabindex="0">5</td>
                    <td class="dtr-control sorting_1" tabindex="0">13 Jan 2021</td>
                    <td>2:30 pm - 5:30 pm</td>
                    <td>General Meeting</td>
                    <td><a href="{{route('promotorMeetingDetails')}}" class="btn btn-info btn-xs">More Details</a>&nbsp;&nbsp;<button class="btn btn-warning btn-xs">Confirm</button></td>
                  </tr>
                  </tbody>

                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('script')
<script>
  $(function () {
    $("#example2").DataTable();

      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection
