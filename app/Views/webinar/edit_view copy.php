<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <title>Edit Data Webinar</title>
  </head>

    <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">ADMIN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
         aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/data/index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/data/add">Data 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/data/add2">Data 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/data/add3">Data 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('/data/view/'); ?>">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin">Data Peserta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/adminabsen">Absen Peserta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login/index">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <div class="container p-5">
        <a href="/data/add3" class="btn btn-secondary mb-2">Kembali</a>
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4 class="card-title">Edit Data Webinar</h4>
            </div>

            <div class="card-body">
                <form action="<?php echo site_url('/data/update'); ?>" enctype="multipart/form-data" method="post">
                    <div class="form-group justify-center">
                        <label for=""><b>Judul</b></label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul" value="<?= $judul; ?>">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                    </div>

                    <div class="row g-4">
                    <div class="col">
                        <label for="formFile" class="form-label"><b>Gambar Kiri</b></label>
                        <input class="form-control" type="file" id="formFile" name="gambar" value ="/assets/gambar/<?= $gambar ?>">
                        <?php
                        if (!empty($gambar)) {
                            echo '<img src="'.base_url("assets/gambar/$gambar").'" width="150">';
                        }
                    ?>
                    </div>
                    
                    <div class="col">
                        <label for=""><b>Tanggal</b></label>
                        <input type="date" name="tanggal" class="form-control" value="tanggal" value="<?= $tanggal; ?>" >

                    <div class="">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Masukkan Isi Gambar Kiri</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="teks" value="<?= $teks; ?>" >  </textarea>
                    </div>
                    </div>
                    
                    

                    </div>
                    <button class="btn btn-success">Edit Data</button>
                   
                </form>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('/data/update2'); ?>" enctype="multipart/form-data" method="post">
                    <div class="form-group justify-center">
                        <label for=""><b>Judul</b></label>
                        <input type="text" name="judul2" class="form-control" placeholder="Judul" value="<?= $judul2; ?>">
                        <input type="hidden" name="id" value="<?= $id2; ?>">
                    </div>

                    <div class="row g-4">
                    <div class="col">
                        <label for="formFile" class="form-label"><b>Gambar Kiri</b></label>
                        <input class="form-control" type="file" id="formFile" name="gambar2" value ="/assets/gambar/<?= $gambar2 ?>">
                        <?php
                        if (!empty($gambar)) {
                            echo '<img src="'.base_url("assets/gambar2/$gambar2").'" width="150">';
                        }
                    ?>
                    </div>
                    
                    <div class="col">
                        <label for=""><b>Tanggal</b></label>
                        <input type="date" name="tanggal" class="form-control" value="tanggal2" value="<?= $tanggal2; ?>" >

                    <div class="">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Masukkan Isi Gambar Kiri</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="teks2" value="<?= $teks2; ?>" >  </textarea>
                    </div>
                    </div>
                    
                    

                    </div>
                    <button class="btn btn-success">Edit Data</button>
                   
                </form>
            </div>
            
                
            </div>
            
        </div>
    </div>
    </body>
</html>