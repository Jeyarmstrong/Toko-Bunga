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
                <?= form_open_multipart('user/ubahprofil'); ?>
                    <div class="login-text rowpro">
                        <div class="img-pro">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
                            
                        </div>
                        <div class="abc mt-5">
                            <div class="login-form">
                                <p>
                                    <label for="email" class="text-pad">Email</label>
                                    <input type="text" value="<?= $user['email']; ?>" id="email" name="email" readonly>
                                </p>
                                <p>
                                    <label for="nama" class="text-pad">Nama Lengkap</label>
                                    <input type="text" value="<?= $user['nama']; ?>" id="nama" name="nama">
                                    <?= form_error('nama', '<small class="alert-danger">', '</small>'); ?>
                                </p>
                                <p>
                                    <label class="custom-file-label" for="image">Ganti Foto</label>
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                </p>
                                <p>
                                    <input style="color:white;" class="btn btn-primary" type="submit" value="Ubah Profile" />
                                </p>
                                <p>
                                    <input class="btn btn-danger" value="Kembali" onclick="window.history.go(-1)" style="text-align: center;">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

        </div>