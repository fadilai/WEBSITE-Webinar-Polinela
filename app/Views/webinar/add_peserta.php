<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
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
              <a class="nav-link " href="<?php echo site_url('/data/view/'); ?>">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/admin">Data Peserta</a>
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
            <div class="container p-5">
        <a href="/data/index"class="btn btn-secondary mb-2">Kembali</a>
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4 class="card-title">Tambah Data Peserta</h4>
            </div>
            <div class="card-body">
                <form method="POST"  action="<?= base_url('admin/save') ?>">
                    <div class="form-group justify-center">
                        <label for=""><b>Email</b></label>
                        <input type="email" placeholder="Email" name="email" autofocus required class="form-control" >
                    </div>
                    <div class="form-group justify-center">
                        <label for=""><b>Nama</b></label>
                        <input type="name" placeholder="Nama Lengkap" name="nama" required class="form-control" >
                    </div>
                    <div class="form-group justify-center">
                        <label for=""><b>Asal Institusi/Sekolah</b></label>
                        <input type="text" placeholder="Asal Institusi/Sekolah" name="insek" required class="form-control" >
                    </div>
                    <div class="form-group justify-center">
                        <label for=""><b>No Whatsapp</b></label>
                        <input type="text" placeholder="No Whatsapp" name="wa" required class="form-control" >
                    </div>
                    
                    </div>
                    <button class="btn btn-success">Tambah Data</button>
                </form>
                
            </div>
        </div>

    </div>
</body>
</html>