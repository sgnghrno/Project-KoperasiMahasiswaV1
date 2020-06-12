    <header class="page-header">
    	<div class="container-fluid">
    		<h4 class="no-margin-bottom">Tabungan</h2>
    	</div>
    </header>
    <div class="breadcrumb-holder container-fluid">
    	<ul class="breadcrumb">
    		<li class="breadcrumb-item"><a href="<?php echo base_url().'beranda'; ?>">Home</a></li>
    		<li class="breadcrumb-item active"><a href="<?php echo base_url().'saldo'; ?>">Data Tabungan</a></li>
			<li class="breadcrumb-item active">Penarikan Data Tabungan</li>
    	</ul>
		</div>

    	<div class="container">

    		<div class="card o-hidden border-0 shadow-lg my-5">
    			<div class="card-body p-0">
    				<!-- Nested Row within Card Body -->
    				<div class="row">
    					<div class="col-sm-12">
    						<div class="p-3">
    							<form method="post" action="<?php echo base_url().'saldo/tarik'; ?>"
    								class="form-horizontal">
    								<div class="box-body">
    									<div class="form-group">
    										<label class="col-sm-3 control-label">Nama Anggota</label>
    										<div class="col-sm-9">
    											<select class="form-control" name="id_anggota" id="id_anggota" required>
    												<?php foreach ($grup as $baris ) { ?>
    												<option value="<?php echo $baris->id_anggota; ?>">
    													<?php echo $baris->nama; ?>
    												</option>
    												<?php } ?>
    											</select>
    										</div>
    									</div>

    									<div class="form-group">
    										<label class="col-sm-3 control-label">Jumlah Penarikan Tabungan</label>

    										<div class="col-sm-9">
    											<input name="penarikan" type="text" class="form-control"
    												placeholder="Masukkan Jumlah" id="penarikan">
    										</div>
    									</div>
    								</div>
    								<div class="form-group row">
    									<div class="col-sm-3">
    										<input type="submit" class="btn-facebook btn-block btn-sm" name="submit"
    											value="Tambah Data">
    									</div>
    									<div class="col-sm-3">
    										<a href="<?php echo base_url().'saldo'; ?>"
    											class="btn btn-secondary btn-icon-split btn-block btn-sm">
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
