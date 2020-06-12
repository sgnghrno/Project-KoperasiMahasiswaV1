    <header class="page-header">
    	<div class="container-fluid">
    		<h4 class="no-margin-bottom">Beranda</h2>
    	</div>
    </header>
    <div class="breadcrumb-holder container-fluid">
    	<ul class="breadcrumb">
    		<li class="breadcrumb-item"><a href="<?php echo base_url().'beranda'; ?>">Home</a></li>
    	</ul>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
    	<div class="card-header py-3">
    		<h6 class="m-0 font-weight-bold text-primary">Tabel Data Tabungan</h6>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    				<thead>
    					<tr>
    						<th>No</th>
    						<th>Nama Lengkap</th>
    						<th>Username</th>
    						<th>Program Studi</th>
    						<th>Saldo</th>
    						<th>Aksi</th>
    					</tr>
    				</thead>
    				<tfoot>
    					<tr>
    						<th>No</th>
    						<th>Nama Lengkap</th>
    						<th>Username</th>
    						<th>Program Studi</th>
    						<th>Saldo</th>
    						<th>Aksi</th>
    					</tr>
    				</tfoot>
    				<tbody>
    					<?php $no = 1;
                        foreach ($user as $baris ) {
                    ?>
    					<tr>
    						<td><?php echo $no++; ?></td>
    						<td><?php echo $baris->nama; ?></td>
    						<td><?php echo $baris->username; ?></td>
    						<td><?php echo $baris->prodi; ?></td>
    						<td><?php echo $baris->subsaldo; ?></td>
    						<td>
    							<?php 
                             echo '<a href="'.base_url('saldo/detail/'.$baris->id_anggota).'" class="btn btn-info btn-circle">
                            <i class="fas fa-info-circle"></i>
                            </a>';
                             ?>
    						</td>
    					</tr>
    					<?php } ?>
    				</tbody>
    			</table>
    		</div>
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