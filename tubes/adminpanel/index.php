<?php 

require_once "core/init.php";
require "../adminpanel/function/db.php";

//untuk menyambungkan data kategori di database
$queryKategori = mysqli_query($link, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);

//untuk menyambungkan data produck di database
$queryProduck = mysqli_query($link, "SELECT * FROM produck");
$jumlahProduck = mysqli_num_rows($queryProduck);


if ( !isset($_SESSION['user'])){  //! = negasi
   header('localtion: login.php');
}

if (!isset($_SESSION["login"])) {
    header("Location:../adminpanel/login.php");
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">

</head>
<style>
.container h3 {
    font-family: 'Signika', sans-serif;
}

.box-kategori {
    background-color:#4CD61A;
    border-radius: 10px;
}

.box-product {
    background-color: #CF2121;
    border-radius: 10px;
}
.no-decoration {
    text-decoration: none;
}

.no-decoration:hover{
    color: red;
}

.home{
    padding-top: 100px;
}
</style>
<body>
 <!-- navbar -->
 <?php require "navbaradmin.php"; ?>
 <!--  -->
<div class="container  mt-5 home">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-house-chimney "></i>  Home</li>
        </ol>
    </nav>
     <br>
    <h3>Hallo Admin</h3>

  <div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mb-5">
           <div class="box-kategori p-3">
           <div class="row">
                <div class="col-6">
                    <i class="fa-solid fa-list fa-6x"></i>
                </div>
                <div class="col-6 text-white">
                    <h3 class="">kategoti</h3>
                    <p class=""><?php 
                    
                    echo $jumlahKategori;
                    
                    ?> kategori</p>
                    <a href="" class="text-white no-decoration ">lihat detail</a>
                </div>
            </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-5">
            <div class="box-product p-3">
                <div class="row">
                        <div class="col-6">
                        <i class="fa-solid fa-box fa-6x"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="">Product</h3>
                            <p class=""><?php 
                            
                            echo $jumlahProduck ;
                            
                            ?> produck</p>
                            <a href="" class="text-white no-decoration ">lihat detail</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>