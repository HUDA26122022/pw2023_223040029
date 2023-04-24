<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Makanan</title>
    <link rel="stylesheet" href="css/makanan.css">

  </head>
  <body id="page-top">
    <!-- navbar -->
 <?php require "navbar.php" ?>

 <!-- penelusuran -->
<section class="w-100 py-5"></section>
<section id="makanan">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5 class="fw-bold text-center text-lg-start" style="text-transform:capitalize"> Surabi</h5>
        </div>
        <div class="col-md-6">
        <form class="d-flex" method="get" action="">
        <div class="input-group mb-3">
          <input type="search" class="form-control" placeholder="Cari makanan" aria-label="search" name="q" autocomplete="off" value="">
         </div>
        </div>
        </form>
      </div>
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
    </div>
  </div>
</section>


 <!-- produck makanan -->
 <div class="container-fluid mt-5 py-5">
  <div class="container">
  
 </div>
</div>
 <!-- footer -->
 <?php require "footer.php"; ?>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>