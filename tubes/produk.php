<?php 
require "koneksi.php";


$queryKategori = mysqli_query($link, "SELECT * FROM kategori");



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


// get produk by nama produk/keyword
if(isset($_GET['keyword'])){
    $queryProduk = mysqli_query($link, "SELECT * FROM produck WHERE nama LIKE '%$_GET[keyword]%'");
}
// get produk by kategori
else if(isset($_GET['kategori'])){
    $queryProduk = mysqli_query($link, "SELECT id FROM kategori WHERE nama ='$_GET[kategori]' ");
    $kategoriId = mysqli_fetch_array($queryProduk);
    
    $queryProduk = mysqli_query($link, "SELECT * FROM produck WHERE kategori_id='$kategoriId[id]'");
}
// get produk default
else{
  $queryProduk = mysqli_query($link, "SELECT * FROM produck");
}

$queryDate = mysqli_num_rows($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Produk</title>
    <link rel="icon" href="img/icons/logo1.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/produk.css">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Dancing+Script:wght@700&family=Lobster&family=Satisfy&display=swap" rel="stylesheet">

</head>
<style>
    /* bagian text login */
    .text-login a {
        text-decoration: none;
        color: #000033;
    }

    .text-login a:hover{
        color: white;
    }
    .text-login img:hover{
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }

    .lihat-detail a:hover{
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }
    .img-profil a img:hover{
    transform: scale(1.1);
    transition: transform 0.3s ease;
}
</style>
<body>
    <!-- nav -->
    <?php require ("navbar.php"); ?>

    <!-- banner -->
    <div class="container-fluid baner-produk d-flex align-items-center">
        <div class="container font-text">
            <h1 class="text-white text-center mt-5">Produk</h1>
        </div>
    </div>
    
    <!-- body -->
    <div class="container py-5">
        <div class="row">
        
            <div class="col-lg-3 mb-5">
                <h1 class="mb-3 font">Kategori</h1>
                <ul class="list-group text-kategori">
                    <?php while($kategori = mysqli_fetch_array($queryKategori)) {?>
                        <a href="produk.php?kategori=<?php echo $kategori['nama']; ?>">
                            <li class="list-group-item"><?= $kategori['nama']; ?></li>
                        </a>
                    <?php } ?>
                </ul>
            </div>
           
            <div class="col-lg-9"  >
                <h1 class="text-center mb-3 font">Produk</h1>
                <form method="get" action="">
                <div class="input-group my-3">
                    <input type="text" id="keyword" class="form-control" placeholder="Nama produck" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                    <button type="submit" id="tombol_cari" class="btn warna3 text-white"> Telusuri</button>
                </div>
            </form>
                <div class="row" id="container"> 
                
                    <?php 
                    if($queryDate < 1){
                        ?>
                        <h2 class="text-center my-5">produk yang kamu cari tidak ada</h2>
                        
                        <?php
                    }
                    
                    ?>
                    
                <?php while($produk = mysqli_fetch_array($queryProduk)) {?>
                    <div class="col-md-4 mt-3">
                        <div class="card h-100 lihat-detail">
                            <div class="image-produk">
                                <img src="img/image/<?php echo $produk['foto']; ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $produk['nama']; ?></h5>
                                        <p class="card-text"><?php echo $produk['detail']; ?></p>
                                        <p class="card-text text-harga"><b>Rp.<?php echo $produk['harga']; ?></b></p>
                                    <a href="produk-detail.php?nama=<?php echo $produk['nama'];?>" class="btn warna4 text-white">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                       
                </div>
            </div>
        </div>
    </div>


<script src="js/produk2.js"></script>
<?php require "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>