<header class="page-header">
	<div class="container-fluid">
		<h4 class="no-margin-bottom">Kepengurusan</h2>
	</div>
</header>
<div class="breadcrumb-holder container-fluid">
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url().'beranda'; ?>">Home</a></li>
		<li class="breadcrumb-item active"><a href="<?php echo base_url().'home'; ?>">Data Kepengurusan</a></li>
		<li class="breadcrumb-item active">Tambah Data Kepengurusan</li>
	</ul>
</div>

<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-sm-12">
					<div class="p-3">
						<form action="<?php echo base_url().'home/input'; ?>" class="user" method="post">
							<div class="form-group">
								<label for="nama">Nama Lengkap :</label>
								<input type="text" class="form-control form-control-user" id="nama" name="nama"
									placeholder="Maksimal 50 karakter!" required>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-sm-0">
									<label for="username">Username :</label>
									<input type="text" class="form-control form-control-user" id="username"
										name="username" placeholder="Maksimal 25 karakter!" required>
								</div>
								<div class="col-sm-6">
									<label for="password">Password :</label>
									<input type="password" class="form-control form-control-user" id="password"
										name="password" placeholder="Minimal 8 karakter!" require>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<label for="jenis_kelamin">Jenis Kelamin :</label>
									<select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
										<option value="">Pilih jenis kelamin</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<div class="col-sm-6">
									<label for="telepon">No. Telp :</label>
									<input type="text" class="form-control form-control-user" id="telepon"
										name="telepon" placeholder="Maksimal 13 karakter!" required>
								</div>
							</div>
							<div class="form-group">
								<label for="jabatan">Jabatan :</label>
								<select class="form-control" name="jabatan" id="jabatan" required>
									<?php foreach ($grup as $baris ) { ?>
									<option value="<?php echo $baris->id_grup; ?>"> <?php echo $baris->jabatan; ?>
									</option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group row">
								<div class="col-sm-5">
									<label for="prodi">Program Studi :</label>
									<input type="text" class="form-control form-control-user" id="prodi" name="prodi"
										placeholder="Program Studi Anda!" required>
								</div>
								<div class="col-sm-5">
									<label for="jurusan">Jurusan :</label>
									<input type="text" class="form-control form-control-user" id="jurusan"
										name="jurusan" placeholder="Jurusan Anda!" required>
								</div>
								<div class="col-sm-2">
									<label for="angkatan">Tahun Angkatan :</label>
									<input type="text" class="form-control form-control-user" id="angkatan"
										name="angkatan" placeholder="Tahun Angkatan!" required>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat :</label>
								<input type="textarea" class="form-control form-control-user" id="alamat" name="alamat"
									placeholder="Alamat Anda!" required>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<input type="submit" class="btn-facebook btn-block btn-lg" name="submit"
										value="Tambah Data Anggota">
								</div>
								<div class="col-sm-6">
									<a href="<?php echo base_url().'home'; ?>"
										class="btn btn-secondary btn-icon-split btn-block btn-lg">
										<span class="text">Kembali</span>
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
