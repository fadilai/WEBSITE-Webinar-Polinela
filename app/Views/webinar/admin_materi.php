<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <title>Tambahkan Data Webinar</title>
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
              <a class="nav-link" href="<?php echo site_url('/data/view/'); ?>">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/semnasmateri">Data Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin">Data Peserta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/adminabsen">Absen Peserta</a>
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
        <a href="/data/index"class="btn btn-secondary mb-2">Kembali</a>
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4 class="card-title">Tambah Data Materi</h4>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="/semnasmateri/save">
                    <div class="form-group justify-center">
                        <label for=""><b>Judul</b></label>
                        <input type="text" name="judul" class="form-control" >
                    </div>
                                              
                    
                    <div class="col">
                        <label for="formFile" class="form-label"><b>Link 1</b></label>
                        <input class="form-control" type="teks" id="formFile" name="link1">
                    </div>

                   
                    <div class="col">
                        <label for=""><b>Caption 1</b></label>
                        <input type="text" name="caption1" class="form-control" >
                    </div>
                                              
                    
                    <div class="col">
                        <label for="formFile" class="form-label"><b>Link 2</b></label>
                        <input class="form-control" type="teks" id="formFile" name="link2">
                    </div>

                    <div class="form-group justify-center">
                        <label for=""><b>Caption 2</b></label>
                        <input type="text" name="caption2" class="form-control" >
                    </div>
                    </div>
                    <button class="btn btn-success">Tambah Data</button>
                    </div>
                   
                </form>
                
            </div>
        </div>
    </div>
    </body>
</html>