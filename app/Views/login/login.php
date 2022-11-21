<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Admin</title>
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
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero">

<div class="info d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-lg-6 text-center">
      <div class="mb-4">
      <h4 class="text-start fw-bold text-white"> LOGIN </h4>
              <p class=" text-start mb-4 fw-bold text-white">Silahkan Masukan Username dan Password</p>
            </div>
             <!-- Alert -->
             <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
            <!-- Alert -->

            <form action="/login/auth" method="post">
              <div class="text-start form-group last mb-4">
              <label for="InputForEmail" class="form-label text-white">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">

              </div>
              <div class="text-start form-group last mb-4">
              <label for="InputForPassword" class="form-label text-white">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption text-white">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>

              <input type="submit" class="btn btn-block btn-primary">
            </form>
                <div class="form-footer mt-2">
                    <p> Ingin Menjadi Admin? <a href="/register/index">Register</a></p>
            </div>
      </div>
    </div>
  </div>
</div>


<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

  <div class="carousel-item active" style="background-image: url('/polinela.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/polinela2.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/polinela3.jpg')"></div>

  
  </a>

</div>

</section><!-- End Hero Section -->




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