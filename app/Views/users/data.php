<?php $this->extend('templates/index'); ?>
<?php $this->section('content'); ?>

<div class="container-fluid">
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Statistic data</h1>
    <div class="row">
        <div class="col-md-8">
          <a href="<?php echo base_url('data/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
          
  <table class="table mt-3 table-striped">
  <thead class="table table-info">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Foto</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tangal Lahir</th>
      <th scope="col">Umur</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; ?>
    <?php foreach($data_umur as $d): ?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['foto']; ?></td>
      <td><?php echo $d['alamat']; ?></td>
      <td><?php echo $d['tanggal_lahir']; ?></td>
      <td><?php echo $d['umur']; ?></td>
      <td>
        <a href="data/<?php echo $d['id']; ?>" class="btn btn-info badge">DETAIL</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>