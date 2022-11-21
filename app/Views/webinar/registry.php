<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pendaftaran</title>
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
          <li><a href="/data/index" >Home</a></li>
          <li><a href="/semnasmateri">Materi</a></li>
          <li class="dropdown" class="active"><a href="#"><span>ABSEN & E-Sertifikat</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/data/absen" class="active">ABSEN</a></li>
              <!-- <li><a href="/semnassertifikat/index2">E-Sertifikat</a></li> -->
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="info d-flex align-items-center nav-light">
      <div class="container">
        <div class="row">
        <div class="container responsiv">
        <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">PENDAFTARAN</h5>
            <div class="row justify-content-center">
          <div class="col-md-6">
			<form action="<?= base_url('semnas/save'); ?>" method="POST">
				<?= csrf_field(); ?>
				<div class="registry">
					
					<form>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
						<div id="emailHelp" class="form-text">Silahkan masukan email aktif Anda.</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputNamaLengkap" class="form-label">Nama Lengkap</label>
						<input type="text" class="form-control" id="exampleInputNamaLengkap" name="nama">
					</div>
					<div class="mb-3">
						<label for="exampleInputNamaLengkap" class="form-label">Asal Instansi/Sekolah</label>
						<input type="text" class="form-control" id="exampleInputNamaLengkap" name="insek">
					</div>
					<div class="mb-3">
						<label for="exampleInputNamaLengkap" class="form-label">No Whatsapp</label>
						<input type="NamaLengkap" class="form-control" id="exampleInputNamaLengkap" name="wa">
					</div>

					<div class="button-class">
						<button type="submit" name="save" class="button btn btn-primary">
							<i class="fas fa-check"></i>&nbsp;&nbsp;Daftar Semnas
						</button>

						<button onclick=" window.location.href='<?= base_url('registry'); ?>" type="submit" name="cancel" class="button btn btn-danger">
							<i class="fas fa-times"></i>&nbsp;&nbsp;Batal
						</button>
					</div>
				</div><br>
			</form>

          </div>
        </div>
      </div>
            <div>
              
            </div>
        </div>
        
        </div>
    </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url('/polinela.jpg')"></div>
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
</body>


</html>