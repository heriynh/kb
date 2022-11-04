<?php $this->extend('templates/index'); ?>
<?php $this->section('content'); ?>

<div class="container-fluid">
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Tambah Data</h1>
 <div class="row">
    <div class="col-md-8">

  <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Masukkan Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Masukkan Alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Masukkan Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Masukkan Foto</label>
    <input type="file" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
    </div>
 </div>
</div>

<?php $this->endSection(); ?>