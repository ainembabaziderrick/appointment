<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">DAS</span>
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

        <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='dashboard') @else collapsed @endif " href="{{ url('admin/dashboard')}}">
    <i class="nav-icon fas fa-tachometer-alt"></i>
      <span>Dashboard</span>
      <i class="right fas fa-angle-left"></i>
    </a>
  </li><!-- End Dashboard Nav -->

        <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='appointments') @else collapsed @endif " href="{{ url('admin/appointments')}}">
      <i class="bi bi-people-fill"></i>
      <span>Appointments </span>
    </a>
  </li><!-- End Appointments Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='pediatrics') @else collapsed @endif " href="{{ url('admin/pediatrics')}}">
      <i class="bi bi-piggy-bank"></i>
      <span>Pediatrics </span>
    </a>
  </li><!-- End Pediatrics Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='dermatology') @else collapsed @endif " href="{{ url('admin/dermatology')}}">
      <i class="bi bi-printer"></i>
      <span>Dermatology </span>
    </a>
  </li><!-- End Dermatology Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='oncology') @else collapsed @endif " href="{{ url('admin/oncology')}}">
      <i class="bi bi-record"></i>
      <span>Oncology </span>
    </a>
  </li><!-- End Oncology Nav -->
 
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='psychiatry') @else collapsed @endif " href="{{ url('admin/psychiatry')}}">
      <i class="bi bi-signpost-split"></i>
      <span>Psychiatry </span>
    </a>
  </li><!-- End Psychiatry Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='cardiology') @else collapsed @endif " href="{{ url('admin/cardiology')}}">
      <i class="bi bi-suit-spade"></i>
      <span>Cardiology </span>
    </a>
  </li><!-- End Cardiology Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='gynaecology') @else collapsed @endif " href="{{ url('admin/gynaecology')}}">
      <i class="bi bi-tornado"></i>
      <span>Gynaecology </span>
    </a>
  </li><!-- End Gynaecology Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='radiology') @else collapsed @endif " href="{{ url('admin/radiology')}}">
      <i class="bi bi-tv"></i>
      <span>Radiology </span>
    </a>
  </li><!-- End Radiology Nav -->

  
 


  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='user') @else collapsed @endif " href="{{ url('admin/user')}}">
      <i class="bi bi-people-fill"></i>
      <span>Users </span>
    </a>
  </li><!-- End Users Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='logout') @else collapsed @endif " href="{{ url('logout')}}">
      <i class="bi bi-box-arrow-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End My Account Nav -->


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>