<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="../css/s_kalibeluk.css">
  </head>
  <body>

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light warna4 fixed-top position-fixed">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="../img/icons/shop.png" alt="" width="35" height="35"> Serasa </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../makanan.php">Makanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../minuman.php">minuman</a>
        </li>
      </ul>
    <div class="ms-auto login">
        <a href="" class="">
            <img src="../img/icons/keranjang.png" width="20" height="20" alt="">
        </a>
        <a class="" href="#"> 
            <b>Login</b> 
             <img src="../img/icons/login.png" width="20" height="20" alt="">
        </a>
      </div>
    </div>
  </div>
</nav>


<!-- detail  produck -->
<section class="mb-5 mt-5 py-5 ">
  <div class="container">
    <div class="row h-100 w-100 mx-auto border p-4 shadow-sm rounded bg-white">
      <div class="col-md-12">
        <h4 class="fw-bold text-center">Serabi kalibeluk</h4>
        <div class="row pt-3">
          <div class="col-md-6 my-auto text-center text-lg-start">
            <img src="../img/makanan/serabi kalibeluk.png" width="70%" alt="">
          </div>
          <div class="col-md-6 my-auto">
            <div class="col-md-12 text-center text-lg-start">
              <div class=" text-justify">
                <h4 class="mt-3">Detail</h4>
                <p>
                  <span>Nama : </span>
                  Serabi kalibeluk
                </p>
                <p>
                  <span>Rasa : </span>
                  Gurih,Manis
                </p>
                <p>
                  <span>Berat Satuan : </span>
                  250 g
                </p>
                <p>
                  <span> Harga :</span>
                  Rp. 13.000
                </p>
              </div>
              <div class="col-md-12 my-auto">
                <div class="row">
                  <div class="col-md-6 my-auto text-lg-start">
                    <form action="post">
                      <input type="hidden" name="" value="">
                      <p>jumlah : </p>
                      <input type="number" name="" class="inputform" value="1" min="1" max="5">
                      <p>
                      <button name="addcart" type="submit" class="btn btn-warning btn-keranjang mt-4 mb-2">
                        Pesan
                      </button>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer -->
<!-- footer -->
<footer class=" container-fluid warna3 pt-2">

  <div class="container">
    <div class="row">
    <div class="col-md-2 col-lg-3 col-x12 mx-auto mt-3">
      <h5>Pembayaran Melalui</h5>
      <div class="card-credit" >
        <img src="../img/pembayaran/bri.jpg" width="60" height="50" alt="">
        <img src="../img/pembayaran/dana.jpg" width="60" height="50" alt="">
      </div>
    </div>

    <div class="col-md-2 col-lg-3 col-x12 mx-auto mt-3">
      <h5 class="fw-bold">Kontak</h5>
      <p><img src="../img/icons/home.png" width="20" height="20" alt=""> Tasikmalaya.Jawa Barat</p>
      <p><img src="../img/icons/email.png"  width="20" height="20" alt=""> serasa@gmail.com</p>
      <p><img src="../img/icons/telephone-call.png" width="20" height="20" alt=""> 082134567818</p>
    </div>

    <div class="col-md-2 col-lg-3 col-x12 mx-auto mt-3">
      <div class="fw-bold">Medsos</div>
      <ul class="list-unstyled list-inline me-0">
        <li class="list-inline-item">
          <a href=""><img src="../img/icons/instagram.png" width="20" height="20" alt=""></a>
        </li>
        <li class="list-inline-item">
          <a href=""><img src="../img/icons/facebook.png" width="20" height="20"  alt=""></a>
        </li>
        <li class="list-inline-item">
          <a href=""><img src="../img/icons/tik-tok.png"width="20" height="20" alt=""></a>
        </li>
      </ul>
      </div>
    </div>
  </div>
  <div class="row text-center warna4 text-white">
      <div class="col-md-12 mt-3">
        <p class="copyright">Copyright © Ahmad Mulia Huda 2022</p>
      </div>
    </div>
</footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>