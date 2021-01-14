@extends('Admin.master')
@section('title', 'View Previous All Meeting')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Previous All Meeting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Of View Previous Meeting</li>
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
                <h3 class="card-title">View All Previous Meeting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">               <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                    <th class="sorting" aria-controls="example1">Serial No</th>
                    <th class="sorting" aria-controls="example1">Company Name</th>
                    <th class="sorting" aria-controls="example1">Employee Name</th>
                    <th class="sorting" aria-controls="example1">Meeting Title</th>
                    <th class="sorting" aria-controls="example1">Date</th>
                    <th class="sorting_asc" aria-controls="example1">Time</th>
                    <th class="sorting" aria-controls="example1">Meeting Room</th>
                    <th class="sorting" aria-controls="example1">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr role="row" class="odd">
                    <td class="dtr-control sorting_1">1</td>
                    <td>SPR1</td>
                    <td>Rakibul,Hasan,Employee 3</td>
                    <td>SPR Meeting</td>
                    <td>10 Jan 2021</td>
                    <td>4:30pm</td>
                    <td>SPR Room 1</td>
                    <td><a href="{{route('detailsPreviousMeeting')}}" class="btn btn-info btn-xs">Details</a></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="dtr-control sorting_1">2</td>
                    <td>SRT 1</td>
                    <td>Kamrul,Rahim,Employee1</td>
                    <td>SRT Meeting</td>
                    <td>11 Jan 2021</td>
                    <td>2:30pm</td>
                    <td>SRT Room 1</td>
                    <td><a href="{{route('detailsPreviousMeeting')}}" class="btn btn-info btn-xs">Details</a></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="dtr-control sorting_1">3</td>
                    <td>HR1</td>
                    <td>Kamrul,Rahim,Employee1</td>
                    <td>VAS Meeting</td>
                    <td>12 Jan 2021</td>
                    <td>5:30pm</td>
                    <td>VAS Room 1</td>
                    <td><a href="{{route('detailsPreviousMeeting')}}" class="btn btn-info btn-xs">Details</a></td>
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
    $("#example1").DataTable();
   
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