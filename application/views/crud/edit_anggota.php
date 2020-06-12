<header class="page-header">
	<div class="container-fluid">
		<h4 class="no-margin-bottom">Formulir Tambah Anggota</h2>
	</div>
</header>
<div class="breadcrumb-holder container-fluid">
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url().'beranda'; ?>">Home</a></li>
		<li class="breadcrumb-item active">Kepengurusan</li>
		<li class="breadcrumb-item active">Edit Formulir Anggota</li>
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
            <form action="<?php echo base_url().'home/update/'; ?>" class="user" method="post">
                <div class="form-group">
                    <input type="hidden" name="id_anggota" value="<?php echo $u->id_anggota; ?>">
                    <label for="nama">Nama Lengkap :</label>
                    <input type="text" class="form-control form-control-user" id="nama" name="nama"
                        value="<?php echo $u->nama ?>" required>
                </div>
                <div class="form-group row">
                <div class="col-sm-6 mb-sm-0">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control form-control-user" id="username" name="username"
                        placeholder="Maksimal 25 karakter!" value="<?php echo $u->username ?>" required>
                </div>
                <div class="col-sm-6">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control form-control-user" id="password" name="password"
                        placeholder="Minimal 8 karakter!" value="<?php echo $u->password ?>" require>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                        <option value="<?php echo $u->jenis_kelamin ?>"><?php echo $u->jenis_kelamin ?></option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="telepon">No. Telp :</label>
                    <input type="text" class="form-control form-control-user" id="telepon" name="telepon"
                        placeholder="Maksimal 13 karakter!" value="<?php echo $u->telepon ?>" required>
                </div>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan :</label>
                    <select class="form-control" name="jabatan" id="jabatan" required>
                        <?php foreach ($grup as $row ) { ?>
                        <option value="<?php echo $row->id_grup; ?>" <?php if (($u->jabatan)==$row->id_grup) {
                            echo "selected";
                        }?>>
                        <?php echo $row->jabatan; ?>
                        </option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group row">
                <div class="col-sm-5">
                    <label for="prodi">Program Studi :</label>
                    <input type="text" class="form-control form-control-user" id="prodi" name="prodi"
                        placeholder="Program Studi Anda!" value="<?php echo $u->prodi ?>" required>
                </div>
                <div class="col-sm-5">
                    <label for="jurusan">Jurusan :</label>
                    <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan"
                        placeholder="Jurusan Anda!" value="<?php echo $u->jurusan ?>" required>
                </div>
                <div class="col-sm-2">
                    <label for="angkatan">Tahun Angkatan :</label>
                    <input type="text" class="form-control form-control-user" id="angkatan" name="angkatan"
                        placeholder="Tahun Anngkatan!" value="<?php echo $u->angkatan ?>" required>
                </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="textarea" class="form-control form-control-user" id="alamat" name="alamat"
                        placeholder="Alamat Anda!" value="<?php echo $u->alamat ?>" required>
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                <input type="submit" class="btn-facebook btn-block btn-lg" name="submit" value="Update Data Anggota">
                  </div>
                   <div class="col-sm-6">
                  <a href="<?php echo base_url().'home'; ?>" class="btn btn-secondary btn-icon-split btn-block btn-lg">
                    <span class="text">Kembali</span>
                  </a>
                  </div>
                  </div>

                  </form>
                  <?php } ?>
        </div>
    </div>
        </div>
      </div>
    </div>

  </div>