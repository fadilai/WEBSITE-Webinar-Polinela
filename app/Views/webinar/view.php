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
              <a class="nav-link active" href="<?php echo site_url('/data/view/'); ?>">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/semnasmateri">Data Materi</a>
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
</div>
<div class="container p-5">
        <a href="/data/index"class="btn btn-secondary mb-2">Kembali</a>
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4 class="card-title">Tambah Data Webinar 1</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive auto">
                <table class="table table-bordered table-striped ">
                <table class="table table-dark table-striped">
                <div style="overflow-x:auto;">
                <table id="table_id" class="table table-striped table-dark mydatatable" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Tanggal</th>
                            <th>Teks</th>
                            <th>Opsi/Pilihan Admin</th>
                        </tr> 
                    </thead>

                    <tbody>
                      <tr>    
                      <?php $no=1; {?>                            
                              <td><?= $no;?></td>
                              <td><?= $data['judul'];?></td>
                              <td><?= $data['gambar'];?> </td>
                              <td><?= $data['tanggal'];?></td>
                              <td><?= $data['teks'];?></td>
                              <td class="btn-class">
                                <a href="<?= base_url('data/add/'.$data['id']);?>" 
                                class="btn btn-warning">
                                Update</a>
                                <a href="<?= base_url('data/delete/'. $data['id']);?>" 
                                onclick="javascript:return confirm('Apakah ingin menghapus data ini ?')"
                                class="btn btn-danger">
                                Delete!</a>
                              </td>
                      </tr>
                      <?php $no++;}?>   

                      <tr>
                      <?php $no=2; {?>                            
                            <td><?= $no;?></td>
                            <td><?= $data2['judul2'];?></td>
                            <td><?= $data2['gambar2'];?> </td>
                            <td><?= $data2['tanggal2'];?></td>
                            <td><?= $data2['teks2'];?></td>
                            <td class="btn-class">
                              <a href="<?= base_url('data/add2/'.$data2['id2']);?>" 
                                class="btn btn-warning">
                                Update</a>
                                <a href="<?= base_url('data/delete2/'. $data2['id2']);?>" 
                                onclick="javascript:return confirm('Apakah ingin menghapus data ini ?')"
                                class="btn btn-danger">
                                Delete!</a>
                            </td>
                     </tr>
                     <?php $no++;}?>  

                     <tr>
                     <?php $no=3; {?>                            
                          <td><?= $no;?></td>
                          <td><?= $data3['judul3'];?></td>
                          <td><?= $data3['gambar3'];?> </td>
                          <td><?= $data3['tanggal3'];?></td>
                          <td><?= $data3['teks3'];?></td>

                          <td class="btn-class">
                            
                              <a href="<?= base_url('data/add3/'.$data3['id3']);?>" 
                              class="btn btn-warning">
                              Update</a>
                              <a href="<?= base_url('data/delete3/'. $data3['id3']);?>" 
                              onclick="javascript:return confirm('Apakah ingin menghapus data ini ?')"
                              class="btn btn-danger">
                              Delete!</a>
                          </td>
                  </tr>
                  <?php $no++;}?>  
                </tbody>
                 </table>
            </div> 
            </div>
        </div>
    </div>
</div>
</body>
</html>