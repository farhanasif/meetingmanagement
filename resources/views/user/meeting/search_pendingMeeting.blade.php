@extends('user.master')
@section('title', 'Search Pending Meeting')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Search Pending Meeting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard of Search Pending Meeting</li>
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

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Search Pending Meeting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="input-group input-group-sm">
                       <form action="" method="post">
                            <input type="text" class="form-control" name="search" placeholder="Search Pending meeting something">
                            <span class="input-group-append">
                            <button class="btn btn-success btn-sm"><i class="fa fa-search"></i> Search</button>
                            </span>
                        </form>
                    </div>
                  </div><br>

                  <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
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
                  @forelse($meeting as $row)
                    <tr role="row" class="odd">
                        <td class="dtr-control sorting_1">1</td>
                        <td>HR1</td>
                        <td>{{$row->name}}</td>
                        <td>VAS Meeting</td>
                        <td>15-01-2021</td>
                        <td>4:30pm</td>
                        <td>VAS Room 1</td>
                        <td>
                        <button class="btn btn-danger btn-xs">Pending</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" style="text-align:center;color:red ">No Data Found</td>
                    </tr>
                  @endforelse
                  </tbody>
                 
                </table>
                @if(count($meeting)>0)
                       {{$meeting->links()}}
                @endif
                </div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
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
  
</script>
@endsection