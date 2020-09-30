<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
<div class="card">
  <div class="card-header">
    Form Ubah Data Siswa
  </div>
  <div class="card-body">
<!--   	<?php if (validation_errors()): ?>
  	<div class="alert alert-danger" role="alert">
    <?= validation_errors(); ?>
	</div>
	<?php endif; ?> -->
  
		<form action="" method="post">
      <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
  <div class="form-group">
    <label for="nama">nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>">
    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
  </div>
    <div class="form-group">
    <label for="nisn">nisn</label>
    <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $siswa['nisn']; ?>">
    <small class="form-text text-danger"><?= form_error('nisn'); ?></small>
  </div>
    <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?= $siswa['email']; ?>">
    <small class="form-text text-danger"><?= form_error('email'); ?></small>
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <?php foreach ($jurusan as $j): ?>
        <?php if ($j == $siswa['jurusan']): ?>
        <option value="<?= $j; ?>" selected><?= $j; ?></option>
        <?php else: ?>
        <option value="<?= $j; ?>"><?= $j; ?></option>
        <?php endif ?>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
		</form>

  </div>
</div>
		</div>
	</div>
</div>