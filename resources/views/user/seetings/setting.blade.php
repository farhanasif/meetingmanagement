@extends('user.master')
@section('title', 'User Setting')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard of User Settings</li>
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
          <div class="col-md-3">

            <!-- Profile Image -->
            
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <!-- <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Update Password</a></li>
                </ul> -->
              </div><!-- /.card-header -->
              <div class="col-md-8 offset-2 mt-2">
            </div>
          <!-- </div> -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <!-- Post -->
                    <form class="form-horizontal" action="http://103.108.144.246/erstate/public/index.php/update/userProfile" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Language</label>
                                <select class="form-control">
                                    <option value="">--Select Language Type--</option>
                                    <option>English</option>
                                    <option>Bangla</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date formats</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Time zone</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>Address formats</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            </div>
                        </div>
                    </form>
                  </div>
                  <div class="tab-pane" id="password">
                    <form action="http://103.108.144.246/erstate/public/index.php/update/user/password" method="post" class="form-horizontal">
                     <input type="hidden" name="_token" value="4dyfdlIClIs6vl8Q8oHfPzv3sxwNeR7x2TH6N3jc">                      <div class="form-group row ">
                        <label for="inputName" class="col-sm-2 col-form-label">Old Password<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="old_password" placeholder="Enter Old Password">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label for="inputEmail" class="col-sm-2 col-form-label">New Password<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" placeholder="Enter New Password">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label for="inputName2" class="col-sm-2 col-form-label">Confirm Password<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Update Password</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('script')
<script>
  
</script>
@endsection