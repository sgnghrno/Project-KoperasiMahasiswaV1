    <header class="page-header">
	<div class="container-fluid">
		<h4 class="no-margin-bottom">Data Kepengurusan</h2>
	</div>
</header>
<div class="breadcrumb-holder container-fluid">
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url().'beranda'; ?>">Home</a></li>
		<li class="breadcrumb-item active">Data Kepengurusan</li>
	</ul>
    </div>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Kepengurusan</h6>
            </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telp</th>
                        <th>Jabatan</th>
                        <th>Program Studi</th>
                        <th>Jurusan</th>
                        <th>Angkatan</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telp</th>
                        <th>Jabatan</th>
                        <th>Program Studi</th>
                        <th>Jurusan</th>
                        <th>Angkatan</th>
                        <th>Alamat</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1;
                        foreach ($user as $baris ) {
                    ?>   
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $baris->nama; ?></td>
                            <td><?php echo $baris->jenis_kelamin; ?></td>
                            <td><?php echo $baris->telepon; ?></td>
                            <td><?php echo $baris->jabatan; ?></td>
                            <td><?php echo $baris->prodi; ?></td>
                            <td><?php echo $baris->jurusan; ?></td>
                            <td><?php echo $baris->angkatan;?></td>
                            <td><?php echo $baris->alamat; ?></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>