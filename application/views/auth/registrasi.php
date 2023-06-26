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
                        <h2>Registrasi Member</h2>
                        <p>Jadilah Member dan Nikmati Keuntungan nya!</p>
                        <a class="btn" href="<?php echo base_url().'auth/registrasi'?>">Daftar</a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="login-form">
                        <?= $this->session->flashdata('pesan'); ?>
                        <h2>Registrasi</h2>
                        <form method="post" action="<?= base_url('auth/registrasi'); ?>">
                        <p>
                                <input type="text" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>" id="nama" name="nama">
                                <?= form_error('nama', '<small class="alert-danger">', '</small>'); ?>
                            </p>
                            <p>
                                <input type="text" placeholder="Email" value="<?= set_value('email'); ?>" id="email" name="email">
                                <?= form_error('email', '<small class="alert-danger">', '</small>'); ?>
                            </p>
                            <p>
                                <input type="password" id="passsword1" name="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="danger-text">', '</small>'); ?>
                            </p>
                            <p>
                                <input type="password" id="password2" name="password2" placeholder="Ulangi Password">
                                <?= form_error('password2', '<small class="danger-text">', '</small>'); ?>
                            </p>
                            <p>
                                <input class="btn-l" type="submit" value="Daftar Menjadi Member" />
                            </p>
                            <p style="margin-left: 13rem;">
                                Sudah Menjadi Member? Silahkan <a class="ms-1" href="<?php echo base_url().'auth'?>"> Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>