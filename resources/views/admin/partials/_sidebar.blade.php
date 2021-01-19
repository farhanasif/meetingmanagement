<aside class="main-sidebar elevation-4 sidebar-light-teal">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/images/govbd.png')}}" class="brand-image img-circle elevation-3"
           style="opacity: .9">
      <span class="brand-text font-weight-bold text-success" style="margin-left: -4px;">Meeting Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/css/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::guard('system_admin')->user()->name}}</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if(auth('system_admin')->user()->role=='admin')
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active" style="background-color: #28A745;">
              <i class="nav-icon fas fa-tachometer-alt text-white   "></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope text-green"></i>
              <p>
                 My Meetings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('meeting.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('meeting.schudule')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting schudules <span class="badge badge-info right">2</span></p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting Room Search</p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-calendar-alt text-green"></i>
              <p>
                 Meetings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('show.form')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('adminViewMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('viewPreviousMeetingAdmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Previous Meeting</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{route('searchPreviousMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Previous Meeting</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{route('meeting.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('viewAdminMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Pending Meeting</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{route('searchPendingMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Pending Meeting</p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-columns text-green"></i>
              <p>
                 physical locations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('physical.location')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create physical locations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('physical.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All physical locations</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-tie text-green"></i>
              <p>
                All Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See All Users</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-credit-card text-green"></i>
              <p>
                All Equipment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('equipmentForm')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Equipment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('adminEqiupment/list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Equipment</p>
                </a>
              </li>
            </ul>
          </li>
        @endif

        @if(auth('system_admin')->user()->role=='user')
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active" style="background-color: #28A745;">
              <i class="nav-icon fas fa-tachometer-alt text-white   "></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-calendar-alt text-green"></i>
              <p>
                 Meetings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('meeting.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('meeting.schudule')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting schudules <span class="badge badge-info right">2</span></p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('show.form')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('adminViewMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('viewPreviousMeetingAdmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Previous Meeting</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{route('searchPreviousMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Previous Meeting</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{route('meeting.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('viewAdminMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Pending Meeting</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{route('searchPendingMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Pending Meeting</p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-tie text-green"></i>
              <p>
                All Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See All Users</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-credit-card text-green"></i>
              <p>
                Equipment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <!-- <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New Meeting</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{route('eqiupments.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Equipment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('searchEquipment')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Equipment</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-columns text-green"></i>
              <p>
                 physical locations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
                <a href="{{route('physicalLocation')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Location Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('searchPhylocation')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Physical Location</p>
                </a>
              </li>
            </ul>
          </li>
        @endif

        @if(auth('system_admin')->user()->role=='promotor')
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active" style="background-color: #28A745;">
              <i class="nav-icon fas fa-tachometer-alt text-white   "></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-calendar-alt text-green"></i>
              <p>
                 Meetings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('promotorMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('meeting.schudule')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting schudules <span class="badge badge-info right">2</span></p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('show.form')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('promotorViewMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('promotorViewMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Previous Meeting</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{route('searchPreviousMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Previous Meeting</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{route('promotorMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('promotorViewMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Pending Meeting</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{route('searchPendingMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Pending Meeting</p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-tie text-green"></i>
              <p>
                All Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See All Users</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-credit-card text-green"></i>
              <p>
                Equipment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <!-- <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New Meeting</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{route('eqiupments.datatable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Equipment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('searchEquipment')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Equipment</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-columns text-green"></i>
              <p>
                 physical locations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
                <a href="{{route('physicalLocation')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Location Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('searchPhylocation')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Physical Location</p>
                </a>
              </li>
            </ul>
          </li>
        @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
