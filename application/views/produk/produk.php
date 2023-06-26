<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo $judul; ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Courses Start -->
    <div class="container-xxl my-6 py-6 pb-0">
        <div class="container">
        <?= $this->session->flashdata('pesan'); ?>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Produk Kami</h6>
                <h1 class="display-6 mb-4">Beberapa Produk yang Kami Jual</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-5">Bouquet Bunga</h5>
                            <p>Paket Bouquet Menarik dan Isi Bouquet Bisa Sesuai Permintaan Customer!</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/buket.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="<?php echo base_url().'user/bouquet'?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-5">Fleur Box</h5>
                            <p>Fleur Box Bunga Menarik. Customer Juga Bisa Custom Lho!</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/fleur.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="<?php echo base_url().'user/fleur'?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-5">Bunga Dekorasi</h5>
                            <p>Kami Juga Menyediakan Bunga Dekorasi yang Siap Meriahkan Acara Anda!</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/dekor.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="<?php echo base_url().'user/dekor'?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-5">Vas Bunga</h5>
                            <p>Kami Juga Menyediakan Vas Bunga yang Cantik Untuk Bunga Anda!</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/vas.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="<?php echo base_url().'user/vas'?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->