<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?> 

 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'saldo/home'; ?>">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Koperasi<sup>V1</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Home -->
<li class="nav-item active">
  <a class="nav-link" href="<?php echo base_url().'beranda'; ?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Laporan
</div>

<!-- Nav Item - Charts -->
<?php if ($getGrup==1 or $getGrup==3  ) {
?>
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url().'saldo'; ?>">
    <i class="fas fa-fw fa-dollar-sign"></i>
    <span>Keuangan</span></a>
</li>
<?php } ?>

<!-- Nav Item - Tables -->
<?php if ($getGrup==1 or $getGrup==2  ) {
?>
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url().'home'; ?>">
    <i class="fas fa-fw fa-clipboard-list"></i>
    <span>Kepengurusan</span></a>
</li>
<?php } ?>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Laporan
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url().'d_saldo'; ?>">
    <i class="fas fa-fw fa-table"></i>
    <span>Data Simpanan</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url().'d_anggota'; ?>">
    <i class="fas fa-fw fa-calendar"></i>
    <span>Data Kepengurusan</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->