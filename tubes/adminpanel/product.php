<?php 

require "core/init.php";
require "../adminpanel/function/db.php";

// menghubungkan ada nya produk

$queryProduk = mysqli_query($link, "SELECT a.*, b.nama AS nama_kategori FROM produck a JOIN kategori b ON a.kategori_id = b.id");
$jumlahProduk = mysqli_num_rows($queryProduk);

// memanggil kategori
$queryKategori=mysqli_query($link, "SELECT * FROM kategori");


// untuk upload foto

function generateRandomString($length = 10){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++){
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <!-- bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../css/admin.css">
</head>
<style>
      .no-decoration {
            text-decoration: none;
        }

        form div {
            margin-bottom: 10px;
        }

        .produk{
            padding-top: 100px;
            padding-bottom: 50px;
        }
</style>
<body>
   <!-- navbar -->
   <?php require "navbaradmin.php"; ?>

   <!-- bagian isi -->
   <div class="container mt-5 produk">
        <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="../adminpanel/index.php" class="no-decoration text-muted"><i class="fa-solid fa-house-chimney">
                            </i> Home admin</a>      
                    </li>

                <li class="breadcrumb-item active" aria-current="page">  
                    Produk
                </li>
            </ol>
        </nav>
        
        <!-- tambah produk -->
        <div class="my-5 col-12 col-md-6">
            <h3>Tambah Produk</h3>

            <form action="" method="post" enctype="multipart/form-data">
                
            <!-- bagian nama -->
            <div>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" required>
                </div>

            <!-- bagian kategori -->
                <div>
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                         <!-- pemanggilan data kategori -->
                    <option value="">Pilih Salah Satu</option>
                    <?php 
                    while($data = mysqli_fetch_array($queryKategori)){
                    ?>
                        <option value="<?php echo $data['id'] ;?>"><?php echo $data ['nama']; ?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
            <!-- bagian harga -->
            <div>
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>

            <!-- input foto -->
            <div>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>

            <!-- bagian detail -->
            <div>
                <label for="detail">Detail</label>
                <textarea name="detail" id="detail" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <!-- bagian ketersediaan stok -->
            <div>
                <label for="ketersediaan_stok">Ketersediaan Stok</label>
                <select name="ketersediaan_stok" id="ketersediaan_stok" class="form-control">
                    <option value="tersedia">Tersedia</option>
                    <option value="habis">Habis</option>
                </select>
            </div>

            <!-- bagian button untuk submit -->
            <div class="mt-4">
                <button type="submit" class="btn btn-primary form-control" name="simpan">Simpan</button>
            </div>
            </form>

            <!-- bagian vailed data -->
            <?php 
            
            if(isset($_POST['simpan'])){
                $nama = htmlspecialchars($_POST['nama']);
                $kategori = htmlspecialchars($_POST['kategori']);
                $harga = htmlspecialchars($_POST['harga']);
                $detail = htmlspecialchars($_POST['detail']);
                $ketersediaan_stok = htmlspecialchars($_POST['ketersediaan_stok']);


                // untuk bagian foto
                
                $target_dir = "../img/image/";
                $nama_file = basename($_FILES["foto"]["name"]);
                $target_file = $target_dir . $nama_file;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $image_size = $_FILES["foto"]["size"];
                $random_name = generateRandomString(20);
                $new_name = $random_name . "." . $imageFileType;


                if($nama == '' || $kategori == '' || $harga == ''){
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Nama Produk Dan Harga Harus Di Isi
                        </div>
                    <?php
                }
                else{    
                    // untuk mengukur minimum dan maksimum nya ukuran kb pada foto 
                        if ($nama_file!=''){
                            if($image_size < 100000 || $image_size > 500000 ){
                                ?>

                                    <div class="alert alert-warning mt-3" role="alert">
                                       Image tidak Boleh kurang dari 100 dan lebih Dari 500 KB
                                    </div> 

                                <?php
                            }
                            else{
                                // untuk menentukan jenis nama file pada foto yang di upload
                                if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif'){
                                    ?>
                                        <div class="alert alert-warning mt-3" role="alert">
                                            File wajib bertife jpg atau png atau gif!
                                        </div>
                                    <?php
                                }
                                else{
                                    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $new_name);
                                }
                            }
                        } 

                        // query insert to produk table
                        $queryTambah = mysqli_query ($link, "INSERT INTO produck (kategori_id, nama, harga, foto, detail, ketersediaan_stok) 
                        VALUES ('$kategori', '$nama', '$harga', '$new_name', '$detail', '$ketersediaan_stok')");

                        if ($queryTambah){
                            ?>
                            
                            <div class="alert alert-success mt-3" role="alert">
                                Produk berhasil tersimpan
                            </div>
                            
                            <!-- untuk merefresh halaman pada Produk -->
                            <meta http-equiv="refresh" content="1; url=product.php"/>   
                            
                            <?php
                        }
                        else{
                            echo mysqli_error($link);
                        }
                }
            }
            
            ?>
        </div>


        <!-- bagian tabel -->
        <div class="mt-5">
            <h2>List Produk</h2>

        <!-- tabel list -->
        <div class="table-responsive mt-4 mb-5">
            <table class="table">
                 <!-- atasnya table -->
                <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Ketersediaan Stok</th>
                            <th>Action</th>
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

                            <tr>
                                <td><?= $jumlah; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['nama_kategori']; ?></td>
                                <td><?php echo $data['harga']; ?></td>
                                <td><?php echo $data['ketersediaan_stok']; ?></td>
                                <td> 
                                    <a href="produk-detail.php?q=<?php echo $data['id'];?>" class="btn btn-info"><i class="fas fa-search"></i></a>
                                </td>
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

<!-- penutup -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>