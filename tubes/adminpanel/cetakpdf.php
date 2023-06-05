<?php 

require "function/db.php";

$queryProduk = mysqli_query($link, "SELECT a.*, b.nama AS nama_kategori FROM produck a JOIN kategori b ON a.kategori_id = b.id");
$jumlahProduk = mysqli_num_rows($queryProduk);

// memanggil kategori
$queryKategori=mysqli_query($link, "SELECT * FROM kategori");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../css/admin.css">
        <!-- js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
        <script src="../js/js.js"></script>
</head>
<body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-light warna3 fixed-top position-fixed">
      <div class="container">
      <a class="navbar-brand" href="#"><img src="../img/icons/logo1.png" alt="" width="80" height="45"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link text-white" href="index.php"> 
                 Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-white" href="kategori.php">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-white" href="product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-white" onclick="return confirm('Apakah Anda Yakin Ingin Keluar!!');" href="logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <div>
        <div class="container mt-5 pt-5 py-5">
            <h1 class="">DWONLOAD PDF DI SINI</h1>
            <button class="btn btn-danger mt-3 mb-5" onclick="generatePDF()">dwonload</button>
            <div class="table-responsive mt-4 mb-5" id="invoice" >
            <table class="table" >
                 <!-- atasnya table -->
                <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Ketersediaan Stok</th>
                        </tr>
                </thead>

                <!-- bagian isi tabel -->
                <tbody>
                    <?php 
                    if($jumlahProduk==0){
                    ?>

                        <tr>
                            <td colspan=6 class="text-center">Data Produk Tidak Ada</td>
                        </tr>  

                    <?php
                    }
                    else {
                        $jumlah = 1;
                        while($data = mysqli_fetch_array($queryProduk)){
                    ?>

                            <tr  class="text-center">
                                <td><?= $jumlah; ?></td>
                                <td><img src="../img/image/<?php echo $data['foto']; ?>" width="50"></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['nama_kategori']; ?></td>
                                <td>Rp. <?php echo number_format( $data['harga']); ?></td>
                                <td><?php echo $data['ketersediaan_stok']; ?></td>
                            </tr>

                    <?php
                            $jumlah++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
        
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>