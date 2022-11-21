<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Materi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url()?>/logopolinela.png" rel="icon">
  <link href="<?php echo base_url()?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="<?php echo base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>/assets/css/main.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="/data/index" class="logo d-flex align-items-center">
       <img src="/polinelalogo2.png" alt="logo" width="180" height="40">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
      <ul>
          <li><a href="/data/index" >Home</a></li>
          <li><a href="/semnasmateri/index2">Materi</a></li>
          <li class="dropdown" class="active"><a href="#"><span>ABSEN & E-Sertifikat</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/data/absen_form">ABSEN</a></li>
              <!-- <li><a href="/semnassertifikat/index2">E-Sertifikat</a></li> -->
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/polinela1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>WEBINAR POLINELA</h2>
        <ol>
          <li><a href="/data/index">Home</a></li>
          <li>Materi</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <p></p>


    <?php $i = 1 + (5 * ($curpage - 1)); ?>
						<?php foreach ($semnasmateri as $dt) : ?>
                <p><h5><?= $dt['judul']; ?></h5></p>
                <ol><a href="<?= $dt['link1']; ?>" 
                class="link-primary"><?= $dt['caption1']; ?></a></ol>
                <ol><a href="<?= $dt['link2']; ?>" 
                class="link-primary"><?= $dt['caption2']; ?></a></ol>
						<?php endforeach; ?>


  </main><!-- End #main -->

 <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://www.instagram.com/politeknik_negeri_lampung/?hl=id">Kelompok 2</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url()?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url()?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>/assets/js/main.js"></script>

</body>

</html>