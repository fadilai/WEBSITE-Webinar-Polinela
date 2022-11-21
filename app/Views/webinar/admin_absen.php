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
              <a class="nav-link" href="/semnasmateri">Data Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/admin">Data Peserta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/adminabsen">Absen Peserta</a>
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
<?php if (session()->getFlashdata('pesanAdd')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesanAdd'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('pesanUpdate')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('pesanUpdate'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('pesanDelete')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('pesanDelete'); ?>
                </div>
            <?php endif; ?>
            
        <a href="/data/view"class="btn btn-secondary mb-2">Kembali</a>
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4 class="card-title">Absen Peserta</h4>
                <nav class="navbar navbar-dark bg-dark justify-content-between">
                <form action="" method="POST" class="form-inline" style="margin-bottom: 10px;">
                    <form class="form-inline">
                        <div class="input-group">
                            <div class="btn-group mr-2" role="group" aria-label="cari">
                                <input class="form-control mr-sm-2" type="search" placeholder="Cari Nama Peserta..." aria-label="Search" name="key">
                            </div>
                            <div class="btn-group" role="group" aria-label="tombolCari">
                                <b>
                                    <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                                </b>
                            </div>
                        </div>
                    </form>
                </form>
                <div class="btn-group btn-group-toggle" style="background:none;">
                    <form>
                        <div class="input-group">
                            <div class="btn-group mr-2" role="group" aria-label="multibutton" style="margin-top: 10px;height: 40px;">
                            <div class="btn-group" role="group" aria-label="print">
                                    <a href="/semnassertifikat/index" type="button" class="btn btn-success" name="">
                                        <b>
                                            <i class="fas fa-print"></i>&nbsp;&nbsp;Kirim Semua
                                        </b>
                                    </a>
                                </div>
                            <div class="btn-group" role="group" aria-label="excel">
                                </div>
                                <div class="btn-group" role="group" aria-label="excel">
                                    <a href="adminabsen/excel" type="button" class="btn btn-primary" name="excel">
                                        <b>
                                            <i class="fas fa-file-csv"></i>&nbsp;&nbsp;Excel
                                        </b>
                                    </a>
                                </div>
                                <div class="btn-group" role="group" aria-label="print">
                                    <a href="adminabsen/print" type="button" class="btn btn-light" name="print">
                                        <b>
                                            <i class="fas fa-print"></i>&nbsp;&nbsp;Print
                                        </b>
                                    </a>
                                </div>
                                <div class="btn-group" role="group" aria-label="print">
                                    <a href="adminabsen/print" type="button" class="btn btn-danger" name="print">
                                        <b>
                                            <i class="fas fa-print"></i>&nbsp;&nbsp;Reset
                                        </b>
                                    </a>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="pagination" style="margin-top: 10px;">
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
            </div>
            
        <div class="card-body">
            <div class="table-responsive auto">
                <table class="table table-bordered table-striped ">
                <table class="table table-dark table-striped">
                <div style="overflow-x:auto;">
                <table id="table_id" class="table table-striped table-dark mydatatable" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Asal Instansi/Sekolah</th>
                            <th scope="col">No Whatsapp</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Opsi/Pilihan Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (100 * ($curpage - 1)); ?>
                        <?php foreach ($semnasabsen as $dt) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $dt['email']; ?></td>
                                <td><?= $dt['nama']; ?></td>
                                <td><?= $dt['insek']; ?></td>
                                <td><?= $dt['wa']; ?></td>
                                <td><?= $dt['tanggal']; ?></td>


                               
                                <td class="btn-class">
                                    <a href="<?= base_url('adminabsen/delete/'. $dt['id']); ?>" 
                                        onclick="javascript:return confirm('Apakah ingin menghapus data ini ?')"
                                        class="btn btn-danger">
                                        Hapus
                                    </a>
                                   
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div> 
            
            
            </div>
        </div>
    </div>
</div>
</body>
</html>