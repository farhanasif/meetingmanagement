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
                   
                  <div class="col-sm-4">
                      <div class="form-group">
                        <label>Organization Name</label>
                        <select class="form-control" id="orgId">
                          <option value="">--Select Organization Name--</option>
                          <option>Sports 1</option>
                          <option>Sports 2</option>
                          <option>State of ministry office</option>
                          <option>State of head office</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Employee Name</label>
                        <select class="form-control" id="employeeId">
                          <option value="">--Select Employee--</option>
                          <option>Kamrul (Director)</option>
                          <option>New User (Additional Officer)</option>
                          <option>Rahim (Assistent Officer)</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Meeting Title</label>
                        <select class="form-control" id="pendingId">
                          <option value="">--Select Meeting Title--</option>
                          <option>General Meeting</option>
                          <option>Office Meeting</option>
                          <option>Discussion Meeting</option>
                        </select>
                      </div>
                    </div>
                  </div><br>

              <div class="card-body" id="pendintMeetingId">
                
              
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $('#pendingId').change(function (e) {
        e.preventDefault();
        $.ajax({
                type: "get",
                url:"{{url('/print/pending/meeting')}}",
                success: function (data) {
                    $('#pendintMeetingId').html(data);
                }
            });
    });
</script>
@endsection