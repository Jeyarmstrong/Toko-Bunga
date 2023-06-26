<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'admin'?>">
<div class="sidebar-brand-icon rotate-n-15">
<i class="fa-regular fa-flower"></i>
</div>
<div class="sidebar-brand-text mx-3">Maliqa Florist</div>
</a>
<!-- Divider -->
<hr class="sidebar-divider">
 
<!-- Looping Menu-->
 
<!-- Heading -->
<div class="sidebar-heading">
Master Data
</div>
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url().'admin' ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
<!-- Divider -->
<hr class="sidebar-divider mt-3">

<li class="nav-item active">
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('admin/user'); ?>">
<i class="fas fa-users"></i>
<span>Data User</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('admin/produk'); ?>">
<i class="fas fa-table"></i>
<span>Data Produk</span></a>
</li>
</li>

<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('admin/receipt'); ?>">
<i class="fas fa-database"></i>
<span>Data Penjualan</span></a>
</li>
</li>

<!-- Divider -->
<hr class="sidebar-divider mt-3">
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('laporan/laporan_dataproduk'); ?>">
<i class="fas fa-database"></i>
<span>Laporan Data Penjualan</span></a>
</li>
</li>

<div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
</div>
</ul>
<!-- End of Sidebar -- > 