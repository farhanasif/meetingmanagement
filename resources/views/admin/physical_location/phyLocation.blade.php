@extends('admin.master')
@section('title', 'Add Physical Location')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Physical Location</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard of Physical Location</li>
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

            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Add Physical Location</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Location</label>
                            <select class="form-control">
                            <option value="">--Select Location--</option>
                            <option>Mohammodpur</option>
                            <option>Dhanmondi</option>
                            <option>Mohakhli</option>
                            <option>Uttra</option>
                            <option>Shymoli</option>
                            <option>Shahbag</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Capacity</label>
                        <input type="number" name="name" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Location Type</label>
                            <select class="form-control">
                            <option value="">--Select Location Type--</option>
                            <option>Rural</option>
                            <option>CountrySide</option>
                            <option>Others</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Equipment</label>
                        <input type="text" name="equipment" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <a href="{{url('physical/list')}}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-info float-right">Submit</button>
                  </div>
                </form>
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