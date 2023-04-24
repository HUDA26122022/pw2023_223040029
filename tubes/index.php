<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SERABI RASA SAYANG</title>

    <!-- font -->


    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="page-top">
 <!-- navbar -->

 <?php require "navbar.php"; ?>

<!-- banner -->
<section class="container-fluid banner d-flex align-items-center">
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
<div class="container-fluid py-5">
  <div class="container text-center">
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
<div class="container-fluid bg-warning pb-2 pt-2">
  <div class="container text-center">
    <h2>Tentang kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fuga corporis qui aliquid consequatur odit quam consectetur, quibusdam explicabo rerum animi ipsam ullam laborum tempora velit ut, illum placeat accusamus.</p>
  </div>
</div>

<!-- list product -->
<div class="container-fluid mt-5 py-5">
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
</div>
<?php require "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>