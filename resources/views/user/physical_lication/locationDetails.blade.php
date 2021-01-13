@extends('user.master')
@section('title', 'View Meeting Details')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Location Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Of View Location Details</li>
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
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i>Discussion Location details.</br>
                    <small style="color:blue;">10-01-2021</small><hr>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->

              <div class="row">
                <div class="col-12">
                <div class="row">
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label>Date</label>
                         <p>10 Jan 2021</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Organization Name</label>
                        <p>Office of the State Minister</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Location</label>
                        <p>Motijhil</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Location Type</label>
                        <p>	Middle City</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Equipment</label>
                        <p>	Printer, IT Support, Scaner</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- this row will not appear when printing -->
              
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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