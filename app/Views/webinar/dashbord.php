<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WEBINAR-POLINELA</title>
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


  <link href="<?php echo base_url()?>/assets/css/main.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/data/index" class="logo d-flex align-items-center">
          <img src="/polinelalogo2.png" alt="logo" width="180" height="40">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/data/index" class="active">Home</a></li>
          <li><a href="/semnasmateri/index2">Materi</a></li>
          <li class="dropdown"><a href="#"><span>ABSEN & E-Sertifikat</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/data/absen_form">ABSEN</a></li>
              <!-- <li><a href="/semnassertifikat/index2">E-Sertifikat</a></li> -->
            </ul>
          </li>
          
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down"><span>WEBINAR-POLINELA</span></h2>
            <p data-aos="fade-up">Selamat Datang di Website Webinar Politeknik Negeri Lampung. Website ini digunakan sebagai layanan informasi Webinar yang ada di Politeknik Negeri Lampung yang dapat diikuti oleh semua Kalangan (Umum)</p>
            <p data-aos="fade-up">Klik dibawah ini untuk mengetahui Webinar yang ada saat ini</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#webinar" class="btn-get-started">Mulai</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url('/polinela.jpg')"></div>
      <div class="carousel-item" style="background-image: url('/polinela2.jpg')"></div>
      <div class="carousel-item" style="background-image: url('/polinela3.jpg')"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="webinar" class="webinar">
      <div class="container" data-aos="fade-up">

  <div class=" section-header">
        <h2>WEBINAR YANG DAPAT DI IKUTI</h2>
        <p>Berikut ini adalah beberapa webinar pilihan yang terdaftar</p>
      </div>

      <div class="row gy-5">

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
            <img src="/assets/gambar/<?= $data['gambar'] ?>" class="img-fluid" alt="">
              <span class="post-date"><?= $data['tanggal'] ?></span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title"><?= $data['judul'] ?></h3>
              <hr>

              <a href="/data/webinar_detail1/" class="readmore stretched-link"><span>Baca selengkapnya</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div>
        <!-- End post item -->
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="/assets/gambar2/<?= $data2['gambar2'] ?>" class="img-fluid">
              <span class="post-date"><?=$data2['tanggal2']?></span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title"><?=$data2['judul2']?></h3>

              <hr>

              <a href="/data/webinar_detail2/" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
              <img src="/assets/gambar3/<?= $data3['gambar3'] ?>" class="img-fluid" alt="">
              <span class="post-date"><?=$data3['tanggal3']?></span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title"><?=$data3['judul3']?></h3>

              <hr>

              <a href="/data/webinar_detail3/" class="readmore stretched-link"><span>Baca selengkapnya</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div>

      </div>

      </div>
    </section>
  

  </main>

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