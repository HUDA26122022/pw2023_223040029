<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SERABI RASA SAYANG</title>
    <link rel="icon" href="img/icons/logo1.png">

    <!-- font -->


    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="page-top">
 <!-- navbar -->

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light warna4 fixed-top position-fixed p-3">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/icons/logo1.png" alt="" width="80" height="45"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#telusuri" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Beranda
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#utama">utama</a></li>
            <li><a class="dropdown-item" href="#kosong">Produck</a></li>
            <li><a class="dropdown-item" href="#about">About</a></li>
            <li><a class="dropdown-item" href="#menu">Menu</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="makanan.php">Makanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="minuman.php">minuman</a>
        </li>
      </ul>
    <div class="ms-auto login">
        <a href="" class="">
            <img src="img/icons/keranjang.png" width="20" height="20" alt="">
        </a>
        <a class="" href="../tubes/adminpanel/login.php"> 
            <b>Login</b> 
             <img src="img/icons/login.png" width="20" height="20" alt="">
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- banner -->
<section id="utama" class="container-fluid banner d-flex align-items-center" id="telusuri">
  <div class="container text-center">
    <h2>SERABI RASA SAYANG</h2>
    <h5>mau cari apa ?</h5>
    <div class="col-8 offset-2">
      <form method="get" action="produck.php">
    <div class="input-group my-3">
    <input type="text" class="form-control" placeholder="Nama produck" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
    <button type="submit" class="btn warna3 text-white"> Telusuri</button>
    </div>
      </form>
    </div>
</div>
</section>

<!-- kategori -->

<div id="produck" class="container-fluid py-5">

  <div class="container text-center">
    <div class="kosong" id="kosong" style="opacity: 0;"><h1>kosong</h1></div>
    <br><br><br>
    <h3>Produck</h3>

    <div class="row mt-5">
      <div class="col-md-4 mb-2">
          <div class="produck kategori-makanan1 d-flex justify-content-center align-items-center ">
            <h4 class="text-white text-kategori"><a href="">Serabi</a></h4>
        </div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="produck kategori-makanan2 d-flex justify-content-center align-items-center ">
            <h4 class="text-white text-kategori"><a href="">Bajigur</a></h4>
        </div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="produck kategori-makanan3 d-flex justify-content-center align-items-center ">
            <h4 class="text-white text-kategori"><a href="">Combro</a></h4>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- tentang -->
<section id="about" class="container-fluid bg-warning pt-5 pb-5">
  <div class="container text-center">
    <h2>Tentang kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fuga corporis qui aliquid consequatur odit quam consectetur, quibusdam explicabo rerum animi ipsam ullam laborum tempora velit ut, illum placeat accusamus.</p>
  </div>
</section>
<!-- list product -->
<section id="menu" class="container-fluid mt-5 py-5">
  <div class="container">
    <h3 class="text-center">Menu</h3>

    <div class="row mt-5 text-center">
      <div class="col-md-4 mt-3">
       <div class="card h-100">
        <img src="img/makanan/serabi kalibeluk.png" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Serabi Kalibeluk</h5>
          <p class="card-text">1 porsi</p>
        <p class="card-text">Rp. 13.000</p>
        <a href="../tubes/page/s_kalibeluk.php" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
      </div>
    
      <div class="col-md-4 mt-3">
       <div class="card  h-100">
        <img src="img/makanan/serabi notosuman.png" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Serabi Notosuman</h5>
          <p class="card-text">1 porsi</p>
        <p class="card-text">Rp. 3.500</p>
        <a href="../tubes/page/s_notosuman.php" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
      </div>

    <div class="col-md-4 mt-3">
       <div class="card  h-100">
        <img src="img/makanan/serabi oncom.png" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Serabi Oncom</h5>
          <p class="card-text">1 porsi</p>
        <p class="card-text">Rp. 3.000</p>
        <a href="../tubes/page/s_oncom.php" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
      </div>

      <div class="col-md-4 mt-3">
       <div class="card  h-100">
        <img src="img/minuman/bajigur.png" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Bajigur</h5>
          <p class="card-text">1 gelas</p>
        <p class="card-text">Rp. 7.000</p>
        <a href="../tubes/page/m_bajigur.php" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
      </div>

      <div class="col-md-4 mt-3">
       <div class="card  h-100">
        <img src="img/minuman/es goyobod.png" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Es goyobod</h5>
          <p class="card-text">1 gelas</p>
        <p class="card-text">Rp. 5.000</p>
        <a href="../tubes/page/m_EsGoyobod.php" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
      </div>

      <div class="col-md-4 mt-3">
       <div class="card  h-100">
        <img src="img/minuman/kopi hitam.png" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Kopi Hitam</h5>
          <p class="card-text">1 gelas</p>
        <p class="card-text">Rp. 5.000</p>
        <a href="../tubes/page/m_KopiHitam.php" class="btn btn-primary">Lihaht Detail</a>
      </div>
    </div>
      </div>

      <div class="col-md-4 mt-3">
       <div class="card  h-100">
        <img src="img/minuman/piring.png" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Bandrek</h5>
          <p class="card-text">1 gelas</p>
        <p class="card-text">Rp. 7.000</p>
        <a href="../tubes/page/m_bandrek.php" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
      </div>
    </div>
  </div>
</section>


<?php require "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>