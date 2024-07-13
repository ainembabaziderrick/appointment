<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">DAS </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> -->

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

        </li>

        <li class="nav-item">
          <a class="nav-link @if(Request::segment(2) == 'appointments') @else collapsed @endif "
            href="{{ url('doctor/appointments')}}">
            <i class="nav-icon fas fa-columns"></i>
            <span>Appointments </span>
          </a>
        </li><!-- End Appointments Nav -->

        <li class="nav-item">
          <a class="nav-link @if(Request::segment(2) == 'prescription') @else collapsed @endif "
            href="{{ url('doctor/prescription')}}">
            <i class="nav-icon fas fa-columns"></i>
            <span>Prescription </span>
          </a>
        </li><!-- End Prescription Nav -->

        <li class="nav-item">
          <a class="nav-link @if(Request::segment(2) == 'appointments') @else collapsed @endif "
            href="{{ url('/chatify')}}">
            <i class="nav-icon fas fa-columns"></i>
            <span>Chat </span>
          </a>
        </li><!-- End Chat Nav -->
        



        <li class="nav-item">
          <a class="nav-link @if(Request::segment(2) == 'logout') @else collapsed @endif " href="{{ url('logout')}}">
            <i class="nav-icon fas fa-columns"></i>
            <span>Logout</span>
          </a>
        </li><!-- End My Account Nav -->


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>