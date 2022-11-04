<?php $this->extend('templates/index'); ?>
<?php $this->section('content'); ?>

<div class="container-fluid">
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Detail Pengguna</h1>

 <div class="row">
    <div class="col-lg-8">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url('/img/'. user()->user_image); ?>" class="img-fluid rounded-start" alt="<?php echo user()->fullname ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <h4>
            <?php echo user()->username; ?>
        </h4>
    </li>
    <?php if (user()->fullname): ?>
    <li class="list-group-item"><?php echo user()->fullname; ?></li>
    <?php endif; ?>
    <li class="list-group-item"><?php echo user()->email ?></li>
    <li class="list-group-item">
        <small><a href="<?php echo base_url('admin'); ?>">&laquo; back to user list</a></small>
    </li>

  </ul>
      </div>
    </div>
  </div>
</div>
    </div>
 </div>
</div>

<?php $this->endSection(); ?>