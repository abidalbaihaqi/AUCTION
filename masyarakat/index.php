<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | #MoodahBersamaKami</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../assets/img/logo1.png"/>
  <style>
        /* Aturan CSS khusus Anda */
        .custom-carousel {
            padding-left: 115px;
            padding-right: 115px;
        }
    </style>
</head>
<body> 
<?php 
include '../layouts/header.php';
include '../layouts/navbar_masyarakat2.php';
?>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><b>Mulai penawaran anda hari ini! #MoodahMenjadiMilikmu</b></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  

  <!-- Carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide custom-carousel mb-4" data-bs-ride="carousel" style="max-height: 300px; overflow: hidden; border-radius: 20px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/img/C/C1.jpg" class="d-block w-100" style="height: 300px; object-fit: cover; border-radius: 20px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/C/C2.jpg" class="d-block w-100" style="height: 300px; object-fit: cover; border-radius: 20px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/C/C3.jpg" class="d-block w-100" style="height: 300px; object-fit: cover; border-radius: 20px;" alt="...">
    </div>
  </div>
</div>

  <!-- End Carousel -->

  <!-- Main content -->
  <div class="content" style="border-radius: 20px;">
    <div class="container">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title"><b>Selamat datang di #MoodahBersamaKami</b></h6>

              <p class="card-text">Silahkan masukkan penawaran Anda pada tombol di bawah</p>
              <a href="penawaran.php" class="btn" style="background-color: #864AF9; border-color: #yourHexColor;">Penawaran</a>
            </div>
          </div>
          <div class="col-lg-12">
  
  <!-- Bidding Tertinggi -->        
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Bidding Tertinggi</h3>

      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <div class="input-group-append">
                    <!--<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                      <i class="fas fa-plus"></i> Tambah Lelang
                    </button>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Barang</th>                     
                    <th>Peserta Lelang Tertinggi</th>
                    <th>Harga</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                include "../koneksi.php";
                $tb_lelang = mysqli_query($koneksi, "SELECT * FROM tb_lelang INNER JOIN tb_barang ON tb_lelang.id_barang=tb_barang.id_barang INNER JOIN tb_petugas ON tb_lelang.id_petugas=tb_petugas.id_petugas");
                while ($d_tb_lelang = mysqli_fetch_array($tb_lelang)) {
                    $harga_tertinggi_query = mysqli_query($koneksi, "SELECT MAX(penawaran_harga) AS penawaran_harga FROM history_lelang WHERE id_lelang='$d_tb_lelang[id_lelang]'");
                    $harga_tertinggi_result = mysqli_fetch_array($harga_tertinggi_query);
                    $d_harga_tertinggi = $harga_tertinggi_result['penawaran_harga'];

                    if ($d_harga_tertinggi == 0 || $d_harga_tertinggi == null) {
                        $nama_pemenang = "Belum ada Pemenang";
                    } else {
                        $pemenang_query = mysqli_query($koneksi, "SELECT * FROM history_lelang WHERE penawaran_harga='$d_harga_tertinggi' AND id_lelang='$d_tb_lelang[id_lelang]'");
                        $d_pemenang = mysqli_fetch_array($pemenang_query);
                        if ($d_pemenang) {
                            $tb_masyarakat_query = mysqli_query($koneksi, "SELECT * FROM tb_masyarakat WHERE id_user='$d_pemenang[id_user]'");
                            $d_tb_masyarakat = mysqli_fetch_array($tb_masyarakat_query);
                            $nama_pemenang = $d_tb_masyarakat['nama_lengkap'] ?? null;
                        } else {
                            $nama_pemenang = "Belum ada Pemenang";
                        }
                    }
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?= $d_tb_lelang['nama_barang'] ?></td>
                        <td><?= $nama_pemenang ?></td>
                        <td>Rp. <?= number_format($d_harga_tertinggi) ?></td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>              
            <div class="modal fade" id="modal-tambah">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Lelang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="post" action="simpan_lelang.php">
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Nama Barang</label>
                        <select name="id_barang" class="form-control select2" style="width: 100%;">
                          <option disabled selected>--- Pilih Barang ---</option>
                          <?php
                          include "../koneksi.php";
                          $tb_barang    =mysqli_query($koneksi, "SELECT * FROM tb_barang");
                          while($d_tb_barang = mysqli_fetch_array($tb_barang)){
                            ?>
                            <option value="<?php echo $d_tb_barang['id_barang'];?>"><?php echo $d_tb_barang['nama_barang'];?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <?php
                        include "../koneksi.php";
                        $tb_petugas    =mysqli_query($koneksi, "SELECT * FROM tb_petugas where username='$_SESSION[username]'");
                        while($d_tb_petugas = mysqli_fetch_array($tb_petugas)){
                          ?>
                          <input type="text" class="form-control" value="<?php echo $d_tb_petugas['id_petugas'];?>" name="id_petugas" hidden>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Bidding Tertinggi -->      
      
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
        </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
include '../layouts/footer.php';
?>
</body>
</html>