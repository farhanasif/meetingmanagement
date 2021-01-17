<aside class="main-sidebar elevation-4 sidebar-light-teal">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('admin/images/govbd.png')}}" class="brand-image img-circle elevation-3"
           style="opacity: .9">
      <span class="brand-text font-weight-bold text-success" style="margin-left: -4px;">Meeting Management</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active" style="background-color: #28A745;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
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

              <li class="nav-item">
                <a href="{{route('addMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('viewMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('viewPreviousMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Previous Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('searchPreviousMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Previous Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('userMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('viewPendingMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Pending Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('searchPendingMeeting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Pending Meeting</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{route('meeting.schudule')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting schudules</p>
                </a>
              </li> -->
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
            <i class="nav-icon fas fa-list-alt text-green"></i>
              <p>
                 All Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
                <a href="{{url('all/users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('searchUser')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Users</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree text-green"></i>
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
                  <i class="far fa-circle nav-icon text-green"></i>
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
            <i class="nav-icon fas fa-list-alt text-green"></i>
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

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
