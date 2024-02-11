<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../index.php?info=login");
}
?>
<!DOCTYPE html>
<!-- Developed by Siva Kishore G-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="https://htmljstemplates.com/static_files/images/favicon.png" />
  <script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
  input.form-control {
    outline: none;
    box-shadow: none !important
  }

  #chatNotif {
    margin-left: -18px;
  }

  #searchInput {
    padding-left: 32px;
  }
  </style>

  <title>Daily News</title>
  <meta name="description" content="A Daily news website navbar template">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>

<body>
  <div class="navbar navbar-light bg-light navbar-expand-md px-3">
    <a href="#" class="navbar-brand">
      <img src="../assets/img/logo1.png" alt="Moodah Logo" width="50px" height="50px" />
    </a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="menu">
      <ul class="navbar-nav ms-auto" style="list-style:none;">
        <li class="nav-item mx-3">
          <a href="index.php" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item mx-3">
          <a href="penawaran.php" class="nav-link">Penawaran</a>
        </li>
      </ul>
    </div>

    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../logout.php" role="button">
          <i class="fas fa-user"></i> <b>Keluar</b>
        </a>
      </li>
    </ul>
    
  </div>
</body>

</html>
