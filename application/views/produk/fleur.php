<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo $judul; ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Fleur</h6>
                <h1 class="display-6 mb-4">Paket Bunga Fleur yang Menarik</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php foreach ($produk as $k) : ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-5"><?php echo $k->produk ?></h5>
                            <p><?php echo $k->keterangan ?></p>
                            <p> Rp. <?php echo number_format($k->harga, 0, ',', '.') ?></p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?php echo base_url().'/assets/img/upload/'.$k->image ?>" alt="">
                            <div class="courses-overlay">
                                <?php echo anchor('user/keranjang/' .$k->id, '<div class="btn btn-outline-primary border-2">Tambah ke Keranjang</div>') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>