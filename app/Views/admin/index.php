<?php $this->extend('templates/index'); ?>
<?php $this->section('content'); ?>

<div class="container-fluid">
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Daftar Pengguna</h1>

 <div class="row">
    <div class="col-lg-8">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    <?php foreach($users as $user): ?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $user->username; ?></td>
      <td><?php echo $user->email; ?></td>
      <td><?php echo $user->name; ?></td>
      <td>
        <a href="<?php echo base_url('admin/'. $user->userid); ?>" class="btn btn-info">Detail</a>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
 </div>

</div>

<?php $this->endSection(); ?>