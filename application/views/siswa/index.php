<div class="container">	
	<?php if ($this->session->flashdata('flash')): ?>
<script>alert('Data siswa berhasil <?= $this->session->flashdata('flash'); ?>');</script>		

	<?php endif ?>
<div class="row">
	<div class="col-md-6 mt-3">
		<a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
	</div>
</div>


<div class="row mt-3">
	<div class="col-md-6">
		<h3>daftar siswa</h3>
<div class="row mt-3 mb-2">
	<div class="col-md-6">
	<form method="post" action="">
		<div class="input-group">
  <input type="text" class="form-control" placeholder="cari data siswa..." aria-label="cari data siswa..." name="keyword">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
  </div>
</div>
	</form>
	</div>
</div>
<?php if (empty($siswa)): ?>
<!-- 	<div class="alert alert-danger" role="alert">
		Data tidak ditemukan!
	</div> -->
<script>
	alert('Data tidak ditemukan !');
	document.location.href = '<?= base_url(); ?>siswa';
</script>
<?php endif ?>
		<ul class="list-group">
			<?php foreach ($siswa as $s) : ?>
			<li class="list-group-item"><?= $s['nama']; ?>
				<a href="<?= base_url(); ?>siswa/hapus/<?= $s['id']; ?>" class="btn btn-danger btn-sm float-right" onclick="return confirm('apakah anda yakin ingin menghapus data tersebut?');">hapus</a>
				<a href="<?= base_url(); ?>siswa/detail/<?= $s['id']; ?>" class="btn btn-primary btn-sm float-right mr-1" >detail</a>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</div>

</div>