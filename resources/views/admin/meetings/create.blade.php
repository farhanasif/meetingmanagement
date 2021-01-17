@extends('admin.master')
@section('title', 'Add Meeting')

@section('stylesheet')

@endsection
@section('container')
<div class="content-wrapper">

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
                            <select class="form-control">
                            <option value="">--Select Organization--</option>
                            <option>Ministry of Youth & Sports</option>
                            <option>Office of the State Minister</option>
                            <option>Office of the Secretary</option>
                            <option>Sports-1</option>
                            <option>Sports-2</option>
                            <option>Youth-1</option>
                            <option>Youth-2</option>
                            <option>IT Cell</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label>Expected Participants</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select Participants..." style="width: 100%;">
                                <option>Md. Akhter Hossain | Secretary | MoYS</option>
                                <option>Sohel Ahmed | PS to Secretary | MoYS</option>
                                <option>Md. Tajul Islam Chowdhury | Additional Secretary (Development) | MoYS </option>
                                <option>Md. Anwarul Islam Sarker | Additional Secretary |  Youth</option>
                                <option>Md. Abdul Karim ndc | Additional Secretary | Sports - 1</option>
                                <option>Badre Munir Firdaus | Joint Secretary | Youth</option>
                                <option>Taslima Aktar | Joint Secretary | Admin</option>
                                <option>Rekha Rani Balo | Joint Secretary | Development, Youth</option>
                                <option>Md. Sayed Ali | Deputy Secretary | Youth</option>
                                <option>S. M. Humayun Kabir | Assistant Secretary | Budget</option>
                                <option>Shalina Akter | Assistant Secretary | Coordination</option>
                                <option>Md. Abdur Roshid | Assistant Secretary | Coordination</option>
                            </select>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Main Subject of the Meeting</label>
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
                            <label>Preferred meeting location</label>
                            <select class="form-control">
                                <option value="">--Select Meeting location--</option>
                                <option>Conference Room - 1 | MoYS</option>
                                <option>Conference Room - 2 | MoYS</option>
                                <option>Conference Room - 1 | Sports</option>
                                <option>Conference Room - 2 | Administration</option>
                                <option>Conference Room - 1 | Coordination</option>
                            </select>
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
                            <label>Upload Meeting Notice</label>
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
                        <div class="col-sm-12">
                            <!-- Select multiple-->
                            <div class="form-group">
                            <label>Meeting Note</label>
                            <textarea class="form-control" rows="3" placeholder="For example, arrange snacks or lunch, provide gate pass to stack holders, notify relevant officers and unit heads, notify other ministries (in the case of inter-ministerial meeting), send email and SMS notification to the participants, arrange virtual platform and other equipment’s (in the case of virtual meetings) etc."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Duration of the Meeting</label>
                                <input type="text" name="mtitle" class="form-control" placeholder="3 hours, Full day etc...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Expected equipment</label>
                                <select class="select2" multiple="multiple" data-placeholder="Select Equipments" style="width: 100%;">
                                    <option>Printer | Epson 3565 | 9887</option>
                                    <option>Speaker | Creative 9879C | 6890</option>
                                    <option>Projector 1 | Canon 2233 | 7890</option>
                                    <option>Route | Prolink 12D |  8990</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Mediator</label>
                                <select class="select2" multiple="multiple" data-placeholder="Select Mediator" style="width: 100%;">
                                    <option>Md. Sayed Ali | Deputy Secretary | Youth</option>
                                    <option>S. M. Humayun Kabir | Assistant Secretary | Budget</option>
                                    <option>Shalina Akter | Assistant Secretary | Coordination</option>
                                    <option>Md. Abdur Roshid | Assistant Secretary | Coordination</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <!-- TO DO List -->
                        <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Special Instructions / Tasks
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="todo-list" data-widget="todo-list">
                                <li>
                                    <!-- checkbox -->
                                    <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                    <label for="todoCheck1"></label>
                                    </div>
                                    <!-- todo text -->
                                    <span style="display: inline-block;font-weight: 600;margin-left: 5px;">Arrange snacks</span>
                                </li>
                                <li>
                                    <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                    <label for="todoCheck2"></label>
                                    </div>
                                    <span style="display: inline-block;font-weight: 600;margin-left: 5px;">Arrange Lunch</span>
                                </li>
                                <li>
                                    <!-- checkbox -->
                                    <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                    <label for="todoCheck3"></label>
                                    </div>
                                    <!-- todo text -->
                                    <span style="display: inline-block;font-weight: 600;margin-left: 5px;">Provide gate pass to stack holders</span>
                                </li>
                                <li>
                                    <!-- checkbox -->
                                    <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                    <label for="todoCheck4"></label>
                                    </div>
                                    <!-- todo text -->
                                    <span style="display: inline-block;font-weight: 600;margin-left: 5px;">Notify relevant officers and unit heads</span>
                                </li>
                                <li>
                                    <!-- checkbox -->
                                    <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                    <label for="todoCheck5"></label>
                                    </div>
                                    <!-- todo text -->
                                    <span style="display: inline-block;font-weight: 600;margin-left: 5px;">Notify other ministries (in the case of inter-ministerial meeting)</span>
                                </li>
                                <li>
                                    <!-- checkbox -->
                                    <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                    <label for="todoCheck6"></label>
                                    </div>
                                    <!-- todo text -->
                                    <span style="display: inline-block;font-weight: 600;margin-left: 5px;">Arrange virtual platform</span>
                                </li>
                                <li>
                                    <!-- checkbox -->
                                    <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo7" id="todoCheck7">
                                    <label for="todoCheck7"></label>
                                    </div>
                                    <!-- todo text -->
                                    <span style="display: inline-block;font-weight: 600;margin-left: 5px;">Arrange equipment’s (in the case of virtual meetings)</span>
                                </li>

                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Add Instruction</button>
                        </div>
                        </div>
                        <!-- /.card -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('adminViewMeeting')}}" type="submit" class="btn btn-warning">Cancel</a>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Instruction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Instruction</button>
            </div>
            </div>
        </div>
    </div>
  </div>
@endsection
@section('script')
<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    // //Initialize Select2 Elements
    // $('.select2bs4').select2({
    //   theme: 'bootstrap4'
    // })

  })
  //Timepicker
  $('#timepicker').datetimepicker({
      format: 'LT'
    })

    $('#timepicker2').datetimepicker({
      format: 'LT'
    })
</script>
@endsection
