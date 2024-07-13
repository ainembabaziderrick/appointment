








 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='dashboard') @else collapsed @endif " href="{{ url('admin/dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

 
  

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='dermatology') @else collapsed @endif " href="{{ url('patient/dermatology')}}">
      <i class="bi bi-printer"></i>
      <span>Dermatology </span>
    </a>
  </li><!-- End Dermatology Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='oncology') @else collapsed @endif " href="{{ url('patient/oncology')}}">
      <i class="bi bi-record"></i>
      <span>Oncology </span>
    </a>
  </li><!-- End Oncology Nav -->
 
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='psychiatry') @else collapsed @endif " href="{{ url('patient/psychiatry')}}">
      <i class="bi bi-signpost-split"></i>
      <span>Psychiatry </span>
    </a>
  </li><!-- End Psychiatry Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='cardiology') @else collapsed @endif " href="{{ url('patient/cardiology')}}">
      <i class="bi bi-suit-spade"></i>
      <span>Cardiology </span>
    </a>
  </li><!-- End Cardiology Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='gynaecology') @else collapsed @endif " href="{{ url('patient/gynaecology')}}">
      <i class="bi bi-tornado"></i>
      <span>Gynaecology </span>
    </a>
  </li><!-- End Gynaecology Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='radiology') @else collapsed @endif " href="{{ url('patient/radiology')}}">
      <i class="bi bi-tv"></i>
      <span>Radiology </span>
    </a>
  </li><!-- End Radiology Nav -->

  

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='logout') @else collapsed @endif " href="{{ url('logout')}}">
      <i class="bi bi-box-arrow-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End My Account Nav -->



 

 

</aside><!-- End Sidebar-->
