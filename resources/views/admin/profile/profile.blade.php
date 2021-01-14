@extends('admin.master')
@section('title', 'User Profile')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Profile & Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard of Profile & Password</li>
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
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset('admin/images/admin2.jpg')}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Farhan Asif</h3>

                <p class="text-muted text-center">System User</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Name</b> <a class="float-right">Farhan Asif</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">asif@gmail.com</a>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block"><b>Profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Update Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="col-md-8 offset-2 mt-2">
            </div>
          <!-- </div> -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <!-- Post -->
                    <form class="form-horizontal" action="http://103.108.144.246/erstate/public/index.php/update/userProfile" method="post">
                      <input type="hidden" name="_token" value="4dyfdlIClIs6vl8Q8oHfPzv3sxwNeR7x2TH6N3jc">                      <div class="form-group row ">
                        <label for="inputName" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="Farhan Asif">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="asif@gmail.com">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Pnone Number<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="phone" id="phone" placeholder="Email" value="0171234654576">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Cell Number<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="cnumber" id="cnumber" placeholder="Email" value="008434574584">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Update Profile</button>
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