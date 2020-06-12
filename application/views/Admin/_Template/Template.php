<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>

<!DOCTYPE html>
<html>
<?php echo @$head; ?>

<body>
    <div id="wrapper">
    <?php echo @$sidebar; ?>

    <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
    <?php echo @$topbar; ?>
    <?php echo @$content; ?>    
    </div>

    <?php echo @$footer; ?>
    </div>
    </div>

     
  <!-- Bootstrap core JavaScript-->
  <script src="koleksi/vendor/jquery/jquery.min.js"></script>
  <script src="koleksi/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="koleksi/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="koleksi/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="koleksi/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="koleksi/js/demo/chart-area-demo.js"></script>
  <script src="koleksi/js/demo/chart-pie-demo.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="koleksi/vendor/jquery/jquery.min.js"></script>
  <script src="koleksi/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="koleksi/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="koleksi/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="koleksi/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="koleksi/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="koleksi/js/demo/datatables-demo.js"></script>

</body>
</html>