@extends('user.master')
@section('title', 'Search Equipment')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Search Equipment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard of Search Equipment</li>
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
                <h3 class="card-title">Search Equipments</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Equipment Name</label>
                        <select class="form-control" id="orgId">
                          <option value="">--Select Equipment Name--</option>
                          <option>Computer</option>
                          <option>Printer</option>
                          <option>Scaner</option>
                          <option>Hardware</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Location Name</label>
                        <select class="form-control" id="employeeId">
                          <option value="">--Select Location--</option>
                          <option>Motijhil</option>
                          <option>Uttra</option>
                          <option>Mohakhali</option>
                        </select>
                      </div>
                    </div>
                  </div><br>


              <div class="card-body" id="EquipmentId">
                
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
    $('#employeeId').change(function (e) {
        e.preventDefault();
        $.ajax({
                type: "get",
                url:"{{url('/print/equipment')}}",
                success: function (data) {
                    $('#EquipmentId').html(data);
                }
            });
    });
</script>
@endsection