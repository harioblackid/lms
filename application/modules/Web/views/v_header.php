<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= setting()->aplikasi; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('favicon.ico'); ?>" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/web'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/web'); ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/web'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/web'); ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/web'); ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/web'); ?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/web'); ?>/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/web'); ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto">
        <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/logo2.png'); ?>" alt="Logo"></a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?= $submenu == 'home' ? "active" : ""; ?>"><a href="<?= base_url(); ?>">Home</a></li>
          <li class="<?= $submenu == 'tentang' ? "active" : ""; ?>"><a href="<?= base_url('Web/tentang'); ?>">Tentang</a></li>
          <li class="<?= $submenu == 'profile' ? "active" : ""; ?>"><a href="<?= base_url('Web/profile'); ?>">Profile</a></li>
          <li class="<?= $submenu == 'materi' ? "active" : ""; ?>"><a href="<?= base_url('Web/materi'); ?>">Materi</a></li>
          <li class="<?= $submenu == 'guru' ? "active" : ""; ?>"><a href="<?= base_url('Web/guru'); ?>">Guru</a></li>       

        </ul>
      </nav><!-- .nav-menu -->

      <a href="<?= base_url('Login'); ?>" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->