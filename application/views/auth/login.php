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
            <div class="container-log">
                <div class="col-left">
                    <div class="login-text">
                        <h2>Selamat Datang</h2>
                        <p>Belum Punya Akun?<br>Segera Buat!</p>
                        <a class="btn" href="<?php echo base_url().'auth/registrasi'?>">Daftar</a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="login-form">
                        <?= $this->session->flashdata('pesan'); ?>
                        <h2>Login</h2>
                        <form method="post" action="<?= base_url('auth'); ?>">
                            <p>
                                <input type="text" placeholder="Email" value="<?= set_value('email'); ?>" id="email" name="email">
                                <?= form_error('email', '<small class="alert-danger">', '</small>'); ?>
                            </p>
                            <p>
                                <input type="password" placeholder="Password" id="password" name="password">
                                <?= form_error('password', '<small class="alert-danger">', '<small>'); ?>
                            </p>
                            <p>
                                <input type="submit" value="Masuk" />
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>