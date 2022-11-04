<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Dinas KB <sup>2</sup></div>
</a>


<?php if(in_groups('admin')) :?>
<!-- Heading -->
<div class="sidebar-heading">
    Admin
</div>

<!-- Nav Item - Admin -->

<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('/admin'); ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>Kelola users</span></a>
</li>
<!--end Nav Item - Admin -->

<?php endif; ?>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Heading -->
<div class="sidebar-heading">
    Users
</div>

<!-- Nav Item - users -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('/'); ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>My profile</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('/edit') ?>">
        <i class="fas fa-fw fa-user-edit"></i>
        <span>Edit profile</span></a>
</li>
<!-- end Nav Item - users -->

<!-- nav item data -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('/data') ?>">
        <i class="fas fa-fw fa-database"></i>
        <span>Data Umur</span></a>
</li>
<!-- end nav item data -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- Nav Item - users -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('logout') ?>">
    <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>
<!-- end Nav Item - users -->

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>