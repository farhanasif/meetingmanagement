@extends('admin.master')
@section('title', 'Add User')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard of add user</li>
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
                <h3 class="card-title">Create user</h3>
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
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Roles</label>
                        <select class="form-control">
                          <option value="">--Select Roles--</option>
                          <option>Regular User</option>
                          <option>Mediator</option>
                          <option>Administrator</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Designation</label>
                            <select class="form-control">
                            <option value="">--Select Designation--</option>
                            <option>Office of the State Minister</option>
                            <option>Office of the Secretary</option>
                            <option>Admin</option>
                            <option>Coordination</option>
                            </select>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Organisation</label>
                        <input type="text" name="organisation" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Cellular Phone </label>
                        <input type="phone" name="cellularphn" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Office Phone</label>
                        <input type="phone" name="officephn" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Other Phone </label>
                        <input type="phone" name="otherphn" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password </label>
                        <input type="password" name="password" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <a href="{{route('user.datatable')}}" type="submit" class="btn btn-warning">Cancel</a>
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