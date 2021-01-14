@extends('user.master')
@section('title', 'View all Meeting Details')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View All Meeting Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Of View All Meeting Details</li>
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
                    <i class="fas fa-globe"></i> Group Meeting discussion.</br>
                    <small style="color:green;">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Date: 10-01-2021</small><hr>
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
                        <label>Oraganization:</label>
                       <p>Sports 1</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Employee Name</label>
                        <p>হামেদুল ইসলাম<br> রাসিদুল ইসলাম <br>জামাল</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Meeting Title</label>
                        <p>Gerneral meeting</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Meeting Date</label>
                        <p>10 Jan 2021</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label>From Meeting Time:</label>
                         <p>2:30 pm</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>To Time</label>
                        <p>4:30 pm</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Meeting Room</label>
                        <p>VAS Room 1</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Meeting Type</label>
                        <p>Physical</p>
                      </div>
                    </div>
                  </div><br>
                  
                  <div class="row">
                   <div class="col-sm-3">
                    <div class="form-group">
                        <label>Meeting Minutes</label>
                        <p>2 hour's</p>
                      </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label>Description</label>
                        <p>There are many reasons</p>
                      </div>
                    </div>

                    <div class="col-sm-3">
                        <!-- select -->
                      <div class="form-group">
                           <button type="button" class="btn btn-success" style="margin-right: 5px;">
                              <i class="fas fa-download"></i> Download Agenda
                          </button>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                          <button type="button" class="btn btn-success" style="margin-right: 5px;">
                              <i class="fas fa-download"></i> Download Office Notice
                          </button>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                              <label> Comment</label>
                          
                              <form action="#" method="post">
                                <div class="input-group">
                                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                  <span class="input-group-append">
                                    <button type="button" class="btn btn-warning">Send</button>
                                  </span>
                                </div>
                              </form>
                            </div>
                         </div>
                     </div>

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