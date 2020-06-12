    <header class="page-header">
	<div class="container-fluid">
		<h4 class="no-margin-bottom">Keuangan</h2>
	</div>
</header>
<div class="breadcrumb-holder container-fluid">
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url().'beranda'; ?>">Home</a></li>
		<li class="breadcrumb-item active"><a href="<?php echo base_url().'saldo'; ?>">Tabungan</a></li>
        <li class="breadcrumb-item active">Detail Tabungan</li>
	</ul>
    </div>

    
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-sm-12">
        <div class="p-3">
            <?php foreach($user as $u){ ?>
            <form action="" class="user" method="">
                <div class="form-group">
                    <input type="hidden" name="id_anggota" value="<?php echo $u->id_anggota; ?>">
                    <label for="nama"><b>Nama Lengkap :</b></label>
                    <input type="text" class="form-control form-control-user" id="nama" name="nama"
                        value="<?php echo $u->nama ?>" readonly>
                </div>
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="jenis_kelamin"><b>Jenis Kelamin :</b></label>
                    <input type="text" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin"
                        value="<?php echo $u->jenis_kelamin ?>" readonly>
                </div>
                <div class="col-sm-6">
                    <label for="telepon"><b>No. Telp :</b></label>
                    <input type="text" class="form-control form-control-user" id="telepon" name="telepon"
                        placeholder="Maksimal 13 karakter!" value="<?php echo $u->telepon ?>" readonly>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-5">
                    <label for="prodi"><b>Program Studi :</b></label>
                    <input type="text" class="form-control form-control-user" id="prodi" name="prodi"
                        placeholder="Program Studi Anda!" value="<?php echo $u->prodi ?>" readonly>
                </div>
                <div class="col-sm-5">
                    <label for="jurusan"><b>Jurusan :</b></label>
                    <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan"
                        placeholder="Jurusan Anda!" value="<?php echo $u->jurusan ?>" readonly>
                </div>
                <div class="col-sm-2">
                    <label for="angkatan"><b>Tahun Angkatan :</b></label>
                    <input type="text" class="form-control form-control-user" id="angkatan" name="angkatan"
                        placeholder="Tahun Anngkatan!" value="<?php echo $u->angkatan ?>" readonly>
                </div>
                </div>
                <div class="form-group">
                    <label for="alamat"><b>Alamat :</b></label>
                    <input type="textarea" class="form-control form-control-user" id="alamat" name="alamat"
                        placeholder="Alamat Anda!" value="<?php echo $u->alamat ?>" readonly>
                </div>
                  </form>
                  <?php } ?>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <input type="hidden" name="id_anggota" value="<?php echo $u->id_anggota; ?>">
                        <th>No</th>
                        <th>Setoran</th>
                        <th>Penarikan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Setoran</th>
                        <th>Penarikan</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1;
                        foreach ($saldo as $baris ) {
                    ?>   
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $baris->setoran; ?></td>
                            <td><?php echo $baris->penarikan; ?></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
        </div>
      </div>
    </div>

  </div>