@extends('admin.master')
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
            <h1 class="m-0 text-dark">View Meeting Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Of View Meeting Details</li>
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
          <div class="col-12 col-sm-12">
            <div class="card card-success    card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true"><b>Group Meeting discussion</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Activity & Notification</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Group Meeting discussion on Audit <small class="text-green" style="font-weight: 600;">starting at 25th Jan, 2021 03:00 pm</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body text-left">
                        <div class="row">
                            <div class="col-sm-2">
                            <!-- select -->
                            <div class="form-group">
                                <label>Oraganization:</label>
                            <p>Sports 1</p>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>Participants</label>
                                <p class="text-left">
                                <ul>
                                    <li>Md. Sayed Ali | Deputy Secretary | Youth </li>
                                    <li>Shalina Akter | Assistant Secretary | Coordination</li>
                                    <li>S. M. Humayun Kabir | Assistant Secretary | Budget</li>
                                    <li>Md. Abdur Roshid | Assistant Secretary | Coordination</li>
                                </ul>
                                </p>
                            </div>
                            </div>
                            <div class="col-sm-2">
                            <div class="form-group">
                                <label>Meeting Title</label>
                                <p>Gerneral meeting</p>
                            </div>
                            </div>
                            <div class="col-sm-2">
                            <div class="form-group">
                                <label>Meeting Date</label>
                                <p>10 Jan 2021</p>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="form-group">
                                <label>Main Subject of the Meeting</label>
                                    <p>Test meeting subject, more elaboration in meeting note</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                            <!-- select -->
                            <div class="form-group">
                                <label>Meeting From:</label>
                                <p>2:30 pm</p>
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                                <label>To</label>
                                <p>4:30 pm</p>
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                                <label>Preferred meeting location</label>
                                <p>Confefrence Room - 1</p>
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                                <label>Meeting Type</label>
                                <p>Physical Meeting</p>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Meeting Agenda</label>
                                <br />
                                <button type="button" class="btn btn-success" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> Meeting Agenda
                                </button>
                            </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Download Meeting Notice</label>
                                    <br />
                                    <button type="button" class="btn btn-success" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Meeting Notice
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Meeting Note:</label>
                                    <p>For example, arrange snacks or lunch, provide gate pass to stack holders, notify relevant officers and unit heads, notify other ministries (in the case of inter-ministerial meeting), send email and SMS notification to the participants, arrange virtual platform and other equipment’s (in the case of virtual meetings) etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Duration of the Meeting:</label>
                                    <p>Half day</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Expected Equipment:</label>
                                    <ul>
                                    <li>Printer | Epson 3565 | 9887</li>
                                    <li>Speaker | Creative 9879C | 6890</li>
                                    <li>Projector 1 | Canon 2233 | 7890</li>
                                    <li>Route | Prolink 12D |  8990</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Special Instructions</label>
                                    <ul>
                                        <li>Arrange Lunch</li>
                                        <li>Provide gate pass to stack holders</li>
                                        <li>Arrange virtual platform</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Mediator</label>
                                    <ul>
                                        <li>S. M. Humayun Kabir | Assistant Secretary | Budget</li>
                                        <li>Shalina Akter | Assistant Secretary | Coordination</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                    <div class="col-md-12">

                <!-- Main content -->

                    <div class="container-fluid">

                        <!-- Timelime example  -->
                        <div class="row">
                            <div class="col-sm-4">
                            <form>
                                <fieldset>
                                    <div class="form-group">
                                    <label for="disabledTextInput">Comment Here</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </fieldset>
                            </form>
                            </div>
                            <div class="col-sm-8">
                                <!-- The time line -->
                                <div class="timeline">
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-red">13 Jan. 2021</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-user bg-blue"></i>
                                    <div class="timeline-item">
                                    <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                                    <h3 class="timeline-header"><a href="#">S. M. Humayun Kabir | Assistant Secretary | Budget</a> commented</h3>

                                    <div class="timeline-body">
                                        গেস্ট এর গেট পাস আগামী সোমবার ১৮, জানুয়ারী ২০২১  মধ্যে ম্যানেজ করতে হবে| মেডিয়েটরদের  অনুরোধ করা হলো|
                                    </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->

                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-green">10 Jan. 2021</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-user bg-green"></i>
                                    <div class="timeline-item">
                                    <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                                    <h3 class="timeline-header no-border"><a href="#">Shalina Akter | Assistant Secretary | Coordination</a> commented</h3>
                                    <div class="timeline-body">
                                        ব্যাক্তিগত কারণে আমি ছুটিতে থাকবো, মিটিং রিশিডিউল করার জন্য অনুরোধ করা হলো
                                    </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-green">8 Jan. 2021</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-clock bg-gray"></i>
                                    <div class="timeline-item">
                                    <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>
                                    <h3 class="timeline-header no-border"><a href="#">Md. Abdur Roshid | Assistant Secretary | Coordination</a> [Meeting Mediator]</h3>
                                    <div class="timeline-body">
                                        Changed the meeting date to 21st January, 2021 04:00pm
                                    </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                </div>

                            </div>
                        <!-- /.col -->
                        </div>
                    </div>
                <!-- /.timeline -->


                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
                    </div>
                    </div>
                </div>
                <!-- /.card -->
                </div>
            </div>
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
