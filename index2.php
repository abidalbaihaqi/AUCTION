<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moodah</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-9/assets/css/login-9.css">
</head>
<body>
    <!-- Login 9 - Bootstrap Brain Component -->
<section class="bg-primary py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-12 col-md-6 col-xl-7">
        <div class="d-flex justify-content-center text-bg-primary">
          <div class="col-12 col-xl-9">
            <img class="img-fluid rounded mb-4" loading="lazy" src="./assets/img/logo1.png" width="80" height="80" alt="BootstrapBrain Logo">
            <hr class="border-primary-subtle mb-4">
            <h2 class="h1 mb-4">Lelang yang aman, Mulai dari sini. #MoodahBersamaKami</h2>
            <p class="lead mb-5">tawar, menjadi yang tertinggi. semudah menjentikan jari *asal ada uang</p>
            <div class="text-endx">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-5">
        <div class="card border-0 rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-4">
                  <h3>Masuk</h3>
                  <p>Tidak mempunyai akun? <a href="daftar_masyarakat2.php">Daftar disini</a></p>
                    <hr>
                    <?php 
        if(isset($_GET['info'])){
          if($_GET['info'] == "gagal"){ ?>
            <div class="alert alert-warning alert-dismissible">
              
              <h5><i class="icon fas fa-exclamation-triangle"></i> Mohon Maaf</h5>
              Login gagal, periksa kembali email dan kata sandi anda.
            </div>
          <?php } else if($_GET['info'] == "logout"){ ?>
            <div class="alert alert-success alert-dismissible">
              
              <h5><i class="icon fas fa-check"></i> Terima Kasih</h5>
              Anda telah berhasil keluar.
            </div>
          <?php }else if($_GET['info'] == "login"){ ?>
            <div class="alert alert-info alert-dismissible">
              
              <h5><i class="icon fas fa-info"></i> Mohon Maaf</h5>
              Anda harus Masuk terlebih dahulu.
            </div>
          <?php } } ?>
                    </hr>
                </div>
              </div>
            </div>
            <form action="cek_login_masyarakat.php" method="post">
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="username" name="username" class="form-control" placeholder="Username" required>
                    <label for="email" class="form-label">Nama Pengguna</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <label for="password" class="form-label">Kata Sandi</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Biarkan saya tetap masuk
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Masuk Sekarang</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4">
                  <a href="#!">Lupa Password?</a>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="d-grid">
                <p class="mt-4 mb-4">Kamu Admin/Petugas?</p>
                <a href="login2.php" class="btn btn-light btn-lg" >Masuk sebagai Admin/Petugas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>