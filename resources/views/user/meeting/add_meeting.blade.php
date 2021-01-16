@extends('user.master')
@section('title', 'Add Meeting')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Meeting Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard of add Meeting</li>
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
                <h3 class="card-title">Create Meeting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Oraganization</label>
                        <input type="text" name="company" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Employee</label>
                        <select class="form-control">
                          <option value="">--Select Employee--</option>
                          <option>Kamrul (Director)</option>
                          <option>New User (Additional Officer)</option>
                          <option>Rahim (Assistent Officer)</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Meeting Title</label>
                        <input type="text" name="mtitle" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Meeting Date</label>
                        <input type="date" name="mdate" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="bootstrap-timepicker">
                          <div class="form-group">
                            <label>From Meeting Time</label>
                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#timepicker">
                              <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="far fa-clock"></i></div>
                              </div>
                            </div>
                            <!-- /.input group -->
                         </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="bootstrap-timepicker">
                          <div class="form-group">
                            <label>To Meeting Time</label>
                            <div class="input-group date" id="timepicker2" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#timepicker">
                              <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="far fa-clock"></i></div>
                              </div>
                            </div>
                            <!-- /.input group -->
                         </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label>Meeting Room </label>
                          <input type="phone" name="mroom" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <!-- Select multiple-->
                        <div class="form-group">
                          <label>Meeting Type</label>
                          <select class="form-control">
                            <option value="">--Select Meeting Type--</option>
                            <option>Physical Meeting</option>
                            <option>Virtual Meeting</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Upload Agenda</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                      <div class="form-group">
                          <label>Upload Office Notice</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                        </div>
                      </div>
                     </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- Select multiple-->
                        <div class="form-group">
                          <label>Meeting Note</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                      </div>
                    </div>
                  <div class="card-footer">
                    <a href="{{route('viewMeeting')}}" type="submit" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-success float-right">Submit</button>
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
  //Timepicker
  $('#timepicker').datetimepicker({
      format: 'LT'
    })

    $('#timepicker2').datetimepicker({
      format: 'LT'
    })
</script>
@endsection