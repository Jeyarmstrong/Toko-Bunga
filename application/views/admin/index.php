<!-- Begin Page Content -->
<div class="container-fluid">
 <!-- row ux-->
 <div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2 bg-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah User</div>
                        <div class="h1 mb-0 font-weight-bold text-white"><?=$this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/user'); ?>"><i class="fas fa-users fa-3x text-danger"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Kategori Produk</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?=$this->ModelProduk->getKategori('id')->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href=""><i class="fas fa-table fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Produk</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?=$this->ModelProduk->getProduk('id')->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/produk'); ?>"><i class="fas fa-shopping-cart fa-3x text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- end row ux-->
        <!-- row table-->
            <div class="table-responsive table-bordered ml-auto mr-auto mt-2">
                <div class="page-header">
                    <span class="text-primary mt-2 "> Data Produk</span>
                    <a class="text-danger" href="<?php echo base_url('admin/produk'); ?>"><i class="fas fa-search mt-2 float-right">Tampilkan</i></a>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Produk</th>
                            <th>Keterangan</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($produk as $a) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['produk']; ?></td>
                            <td><?= $a['keterangan']; ?></td>
                            <td><?= $a['kategori']; ?></td>
                            <td><?= $a['harga']; ?></td>
                            <td><?= $a['stok']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
    </div>
<!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
                        </div>