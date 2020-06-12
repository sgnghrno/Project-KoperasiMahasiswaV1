<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>

<header class="page-header">
	<div class="container-fluid">
		<h4 class="no-margin-bottom">Tabungan</h2>
	</div>
</header>
<div class="breadcrumb-holder container-fluid">
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url().'beranda'; ?>">Home</a></li>
		<li class="breadcrumb-item active">Data Tabungan</li>
	</ul>
</div>
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
		<div class="form-group row">
			<div class="col-sm-6">
				<?php if ($getGrup==1 or $getGrup==3  ) {
                echo  '<a href="'.base_url('saldo/tambah').'" class="btn btn-facebook btn-icon-split btn-block">
                    <span class="text">Tambah Tabungan</span>
                  </a>';
                    }?>
			</div>
			<?php if ($getGrup==1 or $getGrup==3  ) { ?>
			<div class="col-sm-6">
				<a href="<?php echo base_url().'saldo/penarikan'; ?>" class="btn btn-google btn-icon-split btn-block">
					<span class="text">Tarik Tabungan</span>
				</a>

			</div>
			<?php } ?>
		</div>
	</div>
