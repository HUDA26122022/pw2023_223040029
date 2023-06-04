<?php

require "koneksi.php";

$queryProduk = mysqli_query($link, "SELECT id, nama, harga, foto, detail FROM produck LIMIT 6");

// Misalnya, menggunakan session untuk menyimpan status login pengguna
session_start();

// Periksa apakah pengguna sudah login berdasarkan informasi session
if (isset($_SESSION['role'])) {
  // Pengguna sudah login
  if ($_SESSION['role'] == 'admin') {
      $user_logged_in = 'admin';
  } else {
      $user_logged_in = 'user';
  }
  $user_logged_in = true;
} else {
  // Pengguna belum login
  $user_logged_in = false;
}


$queryKategori = mysqli_query($link, "SELECT * FROM kategori");

// if (basename($_SERVER['PHP_SELF']) !== 'index.php') {
//   // Redirect pengguna ke halaman index jika mencoba mengakses halaman lain
//   header('Location: index.php');
//   exit();
// }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SERABI RASA SAYANG</title>
    <link rel="icon" href="img/icons/logo1.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Dancing+Script:wght@700&family=Lobster&family=Satisfy&display=swap" rel="stylesheet">


    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <!-- <style>
    /* .my-element {
        margin-left: 20px;
    }

    .skill-image{
    border-radius:10px ;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    display: block;
    transition: 0.5s;
    margin:80px 30px ;
    
} */



</style> -->
  <body id="page-top">
<!-- navbar -->
<?php require "navbar.php"; ?>


<!-- banner -->
<section id="utama" class="container-fluid banner d-flex align-items-center" id="telusuri">
  <div class="container text-center text-banner">
    <h2>SERABI RASA SAYANG</h2>
    <h5>mau cari apa ?</h5>
    <div class="col-8 offset-2">
      <form method="get" action="produk.php">
    <div class="input-group my-3">
    <input type="text" class="form-control" placeholder="Nama produck" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword" autocomplete="off">
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
            <h4 class="text-white text-kategori "><a href="produk.php?kategori=Serabi">Serabi</a></h4>
        </div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="produck kategori-makanan2 d-flex justify-content-center align-items-center ">
            <h4 class="text-white text-kategori "><a href="produk.php?kategori=Minuman">Minuman</a></h4>
        </div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="produck kategori-makanan3 d-flex justify-content-center align-items-center ">
            <h4 class="text-white text-kategori "><a href="produk.php?kategori=Combro">Combro</a></h4>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- tentang -->

<section >
  <div id="about" class="container-fluid bg-warning mt-5 pt-5 pb-5">
  <div class="container text-center">
  
    <h2>Tentang kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fuga corporis qui aliquid consequatur odit quam consectetur, quibusdam explicabo rerum animi ipsam ullam laborum tempora velit ut, illum placeat accusamus.</p>
  </div>
  </div>
</section>

<!-- list product -->
<div id="menu" class="container-fluid mt-5 py-5">
  <div class="container text-center">
    <h3 class="text-center">Menu</h3>


<!-- bagian produk -->
    <div class="row mt-5 text-center">
      <?php while($data = mysqli_fetch_array($queryProduk)) {?>
      <div class="col-md-4 mt-3">
       <div class="card h-100">
         <div class="image-produk">
            <img src="img/image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
         </div>
          <div class="card-body">
          <h5 class="card-title"><?php echo $data['nama']; ?></h5>
          <p class="card-text"><?php echo $data['detail']; ?></p>
        <p class="card-text text-harga"><b>Rp.<?php echo $data['harga']; ?></b></p>
        <a href="produk-detail.php?nama=<?php echo $data['nama'];?>" class="btn warna4 text-white">Lihat Detail</a>
      </div>
    </div>
      </div>
    <?php } ?>
    
    </div>
    <a class="btn btn-outline-warning mt-5 p-2" href="produk.php">See More</a>
  </div>
      </div>


<?php require "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>