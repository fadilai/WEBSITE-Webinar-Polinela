<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
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
      
          </div>

    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/polinela1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    <section class="container-fluid"> 
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-6">
        <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>

            <form  action="/register/save" method="post" class="form-container">
                <h4 class="text-center fw-bold text-white"> Sign-Up </h4>
                <h6 class="text-center fw-bold text-white"> Daftar Sebagai Admin WEBINAR POLINELA </h6>

                <div class="form-group font-weight-bold text-white last mb-2">
                        <label for="InputForName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                </div>
                <div class="form-group font-weight-bold text-white last mb-2">
                <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                </div>
                <div class="form-g">
                <div class="form-group font-weight-bold text-white last mb-2">
                <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                </div>
                <div class="form-group font-weight-bold text-white last mb-4">
                <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <div class="form-footer mt-2">
                    <p class=" font-weight-bold text-white">Sudah punya Account? <a href="/login/index">Login</a></p>
                </div>
                </div>
            </form>
        </section>
        </section>
    </section>
      </div>
    </div>
  </main>
  <div>

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