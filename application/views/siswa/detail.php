<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Detail Data Siswa
			  </div>
			  <div class="card-body">
			    <h5 class="card-title"><?= $siswa['nama']; ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?= $siswa['email']; ?></h6>
			    <p class="card-text"><?= $siswa['nisn']; ?></p>
			    <p class="card-text"><?= $siswa['jurusan'];?></p>
			    <a href="<?= base_url(); ?>siswa/ubah/<?= $siswa['id']; ?>" class="btn btn-primary">Ubah</a>
			    <a href="<?= base_url(); ?>siswa" class="btn btn-primary">kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>