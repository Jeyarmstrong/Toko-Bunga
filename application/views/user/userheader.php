<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Maliqa Florist | <?php echo $judul; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url()?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?php echo base_url().'pengunjung'?>" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="bi bi-flower2 text-primary me-2"></i>Maliqa Florist</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url().'pengunjung'?>" class="nav-item nav-link active">Home</a>
                <a href="<?php echo base_url().'pengunjung/kontak'?>" class="nav-item nav-link">Kontak</a>
                <a href="<?php echo base_url().'pengunjung/produk'?>" class="nav-item nav-link">Produk</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo base_url().'pengunjung/galeri'?>" class="dropdown-item">Galeri Foto</a>
                        <a href="<?php echo base_url().'pengunjung/anggota'?>" class="dropdown-item">Anggota Florist</a>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'auth'?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->