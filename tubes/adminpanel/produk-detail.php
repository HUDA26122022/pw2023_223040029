<?php 

require_once "core/init.php";
require "../adminpanel/function/db.php";

    $id = $_GET['q'];

    $query = mysqli_query($link, "SELECT a.*, b.nama AS nama_kategori FROM produck a JOIN kategori b ON a.kategori_id=b.id WHERE a.id = '$id'");
    $data = mysqli_fetch_array($query);

    $queryKategori = mysqli_query($link, "SELECT * FROM kategori WHERE id!='$data[kategori_id]'");
    
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
    <title>Produk Detail</title>
    <!-- bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <!-- css -->
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
</head>
<style>
     form div {
            margin-bottom: 10px;
        }

    .produk{
       padding-top: 100px;
    }
    .no-decoration{
        text-decoration: none;
    }
   
</style>
<body>
    <!-- navbar -->
    <?php require "navbaradmin.php"; ?>

    <!-- bagian isi -->
    <div class="container  produk">
    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-5 mb-5">
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="../adminpanel/product.php" class="no-decoration text-muted"><i class="fa-solid fa-house-chimney ">
                            </i> Home Produk</a>      
                        
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">  
                        Detail-Produk
                    </li>
                </ol>
            </nav>
        <h2>Detail Produck</h2>

        <div class="col-12 col-md-6 mb-5">
            <form action="" method="post" enctype="multipart/form-data">
            
            <!-- bagian nama -->
            <div>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" value="<?php echo $data["nama"]  ?>" name="nama" class="form-control" autocomplete="off" required>
                </div>
                
                <div>
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                         <!-- pemanggilan data kategori -->
                    <option value="<?php echo $data ['kategori_id'];  ?>"><?php echo $data['nama_kategori']; ?></option>
                    <?php 
                    while($dataKategori = mysqli_fetch_array($queryKategori)){
                    ?>
                        <option value="<?php echo $dataKategori['id'] ;?>"><?php echo $dataKategori ['nama']; ?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
                <!--edit dan delete harga -->
                <div>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" value="<?php echo $data['harga'];?>" class="form-control" required>
                </div>

                <div>
                    <label for="currenfoto">Foto produk</label>
                    <img src="../img/image/<?php echo $data['foto']; ?>" alt="" width="300px" class="form-control">
                </div>
                 <!-- edit dan delete foto -->
                <div>
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>

                <!-- edit dan delete detail -->
                <div>
                    <label for="detail">Detail</label>
                    <textarea name="detail" id="detail" cols="30" rows="10" class="form-control">
                        <?php echo $data['detail']; ?>
                    </textarea>
                </div>

                <!-- bagian ketersediaan stok -->
            <div>
                <label for="ketersediaan_stok">Ketersediaan Stok</label>
                    <select name="ketersediaan_stok" id="ketersediaan_stok" class="form-control">
                        <option value="<?php echo $data['ketersediaan_stok']; ?>"><?php echo $data['ketersediaan_stok']; ?></option>
                            <?php 
                            
                                if($data['ketersediaan_stok']=='tersedia'){
                                    ?>
                                        <option value="habis">Habis</option>

                                        <?php
                                        }
                                        else{
                                        ?>

                                        <option value="tersedia">Tersedia</option>

                                    <?php
                                }
                        
                        ?>
                        
                    </select>
                </div>
                <!-- bagian button untuk submit -->
                <div class="mt-4 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Data Yang Di Masukan Sudah Benar!!!');" name="simpan">Simpan</button>
                    <button type="delete" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya!!!');" name="hapus">hapus</button>
                </div>
            </form>
            <?php
if (isset($_POST['simpan'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $kategori = htmlspecialchars($_POST['kategori']);
    $harga = htmlspecialchars($_POST['harga']);
    $detail = htmlspecialchars($_POST['detail']);
    $ketersediaan_stok = htmlspecialchars($_POST['ketersediaan_stok']);

    // Untuk bagian foto
    $target_dir = "../img/image/";
    $nama_file = basename($_FILES["foto"]["name"]);
    $target_file = $target_dir . $nama_file;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $image_size = $_FILES["foto"]["size"];
    $random_name = generateRandomString(20);
    $new_name = $random_name . "." . $imageFileType;

    // Mengecek data apakah ada atau tidak
    if ($nama == '' || $kategori == '' || $harga == '') {
        ?>
        <div class="alert alert-warning mt-3" role="alert">
            Nama Produk dan Harga harus diisi
        </div>
        <?php
    } else {
        $queryUpdate = mysqli_query($link, "UPDATE produck SET kategori_id = '$kategori', nama = '$nama', harga='$harga', detail='$detail', ketersediaan_stok = '$ketersediaan_stok' WHERE id = $id");

        if ($queryUpdate) {
            if ($nama_file != '') {
                if ($image_size < 100000 || $image_size > 500000) {
                    ?>
                    <div class="alert alert-warning mt-3" role="alert">
                        Gambar tidak boleh kurang dari 100 KB dan lebih dari 500 KB
                    </div>
                    <?php
                } else {
                    if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif') {
                        ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            File harus memiliki ekstensi jpg, png, atau gif!
                        </div>
                        <?php
                    } else {
                        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $new_name);
                        $queryUpdateFoto = mysqli_query($link, "UPDATE produck SET foto='$new_name' WHERE id= '$id'");

                        if ($queryUpdateFoto) {
                            ?>
                            <div class="alert alert-success mt-3" role="alert">
                                Produk berhasil diperbarui
                            </div>
                            <!-- Untuk merefresh halaman produk -->
                            <meta http-equiv="refresh" content="0; url=product.php"/> 
                            <?php
                             
                        } else {
                            echo mysqli_error($link);
                        }
                    }
                }
            } else {
                ?>
                <div class="alert alert-success mt-3" role="alert">
                    Produk berhasil diperbarui
                </div>

                <meta http-equiv="refresh" content="0; url=product.php"/>  
                <?php
                // Untuk merefresh halaman produk
                
            }
        } else {
            echo mysqli_error($link);
        }
    }
}

if (isset($_POST['hapus'])) {
    $queryDelete = mysqli_query($link, "DELETE FROM produck WHERE id='$id'");

    if ($queryDelete) {
        ?>
        <div class="alert alert-success mt-3" role="alert">
            Produk berhasil dihapus
        </div>

        <meta http-equiv="refresh" content="1; url=product.php"/>  
        <?php
        // Untuk merefresh halaman produk
       
        ?>
                    <?php
                }
            }
        
            ?>
        </div>
    </div>
    

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>