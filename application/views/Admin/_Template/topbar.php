<?php
  $getUser = $this->session->userdata('session_user');
  $getGrup = $this->session->userdata('session_grup');
  ?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<ul class="navbar-nav">
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img class="img-profile rounded-circle" src="koleksi/img/1.jpg">
      <div class="topbar-divider d-none d-sm-block"></div>
      <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Hello, <?php echo $getUser; ?></span>
    </a>
  </li>
</ul>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">  
  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    
                  <a href="<?php echo base_url().'login/logout'; ?>" class="btn btn-danger btn-icon-split btn-sm">
                    </span>
                    <span class="text">Log Out</span>
                  </a>
  </li>

</ul>

</nav>
<!-- End of Topbar -->