<?php 
require "koneksi.php";

$nama = htmlspecialchars($_GET['nama']);
$queryProduk = mysqli_query($link, "SELECT * FROM produck WHERE nama='$nama'");
$produk = mysqli_fetch_array($queryProduk);

session_start();
// Periksa apakah pengguna sudah login berdasarkan informasi session
if (isset($_SESSION['user'])) {
    // Pengguna sudah login
    $user_logged_in = true;
} else {
    // Pengguna belum login
    $user_logged_in = false;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .my-element {
        margin-left: 20px;
    }

    .skill-image{
    border-radius:10px ;
    /* background-color: #2f00ff; */
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    display: block;
    transition: 0.5s;
    margin:80px 30px ;
    
}
</style>
<body>
    <!-- navbar -->
    <?php require "navbar.php"; ?>
    

    <!-- bagian detail produk -->
    <div class="container-fluid py-5 mt-5">
        <div class="container">
            <div class="row border p-4 shadow-sm rounded bg-white pt-5 mt-5">
                <div class="col-lg-5 mb-3">
                    <img src="img/image/<?= $produk['foto']; ?>" class="w-100" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h1 class=" text-center">Produk</h1>
                        <p class="fs-5 mt-2"><span>Nama : <b> <?= $produk['nama']; ?></b></span></p>
                        <p class="fs-5 "><span>Rasa : </span><?= $produk['detail']; ?></p>
                        <p class="fs-5 "><span> Harga : </span><?= $produk['harga']; ?></p>
                        <p class="fs-5 "><span> Status Ketersediaan : </span><?= $produk['ketersediaan_stok']; ?></p>

                        <form action="post">
                      <input type="hidden" name="" value="">
                      <p>jumlah : </p>
                      <input type="number" name="" class="inputform" value="1" min="1" max="5">
                      <p>
                      <a href="pesanan.php" name="addcart" type="submit" class="btn btn-warning btn-keranjang mt-4 mb-2">
                        Pesan
                        </a>
                        <a href="keranjang.php" name="addcart" type="submit" class="btn btn-warning btn-keranjang mt-4 mb-2">
                        tambahkan ke troli
                        </a>
                      </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>