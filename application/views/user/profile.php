<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo $judul; ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="wrapper-log login-1">

                <div class="col-profile" style="margin-left: 2rem;">
                    <div class="login-text rowpro">
                        <div class="img-pro">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
                        </div>
                        <div class="abc">
                            <h2 class="mt-3" align="center">
                                <?php echo $judul; ?>
                            </h2>
                            <?= $this->session->flashdata('pesan'); ?>
                            <h2 class="mt-5"><?= $user['nama']; ?></h2><br>
                                <p>Email : <?= $user['email']; ?></p><br>
                                <p>Jadi member sejak: <br><b><?= date('d F Y', $user['tanggal_input']); ?></b></p>
                                <br>
                                <a href="<?= base_url('user/ubahprofil'); ?>"class="btn btn-primary rounded-pill py-3 px-5"> Ubah Profil</a>
                        </div>
                    </div>
                </div>

        </div>