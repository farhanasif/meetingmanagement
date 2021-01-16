@extends('admin.master')
@section('title', 'View user details')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View user details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Of View user Details</li>
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
                    <i class="fas fa-globe"></i> user details.</br>
                    <small style="color:green;">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Farukh Ahmed</small><hr>
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
                        <label>User Name:</label>
                         <p>Shahin Islam</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Email</label>
                        <p>islam@gmail.com</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Role</label>
                        <p>Administrator</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Designation</label>
                        <p>Executive Officer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label>Organisation</label>
                         <p>National Sports Association</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Cellular phone</label>
                        <p>+001575638</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Other phone</label>
                        <p>+00143345</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Address</label>
                        <p>Motijhil, 123</p>
                      </div>
                    </div>
                  </div><br>

                  
                </div>

                </div>

              <!-- /.row -->

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