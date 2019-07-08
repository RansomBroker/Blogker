<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-blue-river topbar mb-4 static-top shadow">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="btn bg-blue-river" id="sidebarToggle"><span class="text-gray-100"><i class="fa fa-align-justify"></i></span></button>
  </div>

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn bg-blue-river d-md-none mr-3">
    <span class="text-gray-100"><i class="fa fa-bars"></i></span>
  </button>


  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">


    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-100 small">User</span>
        <img class="img-profile rounded-circle bg-dark" src="{{ asset('assets/img/plant.png') }}">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <span class="text-gray-500 pl-3">Profile Menu</span>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->
