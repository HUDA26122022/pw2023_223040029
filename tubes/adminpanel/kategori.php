<?php 

require "core/init.php";
require "../adminpanel/function/db.php";


$queryKategori = mysqli_query($link, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);


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
    <title>Kategori</title>

     <!-- bosstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../css/admin.css">
</head>
<style>
    .no-decoration {
    text-decoration: none;
}
.kategori{
            padding-top: 100px;
            padding-bottom: 50px;
        }
</style>
<body>
    <!-- navbar -->
    <?php require "navbaradmin.php"; ?>
    

    <!-- container -->
    <div class="container mt-5 kategori">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="../adminpanel/index.php" class="no-decoration text-muted"><i class="fa-solid fa-house-chimney">
                    </i> Home admin</a>      
                    
                </li>

                <li class="breadcrumb-item active" aria-current="page">  
                    kategori
                </li>
            </ol>
        </nav>

        <!-- tambah kategori -->
        <div class="my-5 col-12 col-md-6">
    <h3>Tambah Kategori</h3>

    <form action="" method="post">
        <div>
            <label for="kategori">Kategori</label>
            <input type="text" id="kategori" name="kategori" placeholder="Input Nama Kategori" class="form-control mt-3" required autocomplete=off>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary form-control " name="simpan-kategori">Simpan</button>
        </div>
    </form>

    <?php 
    if(isset($_POST['simpan-kategori'])){
        $kategori = htmlspecialchars($_POST['kategori']);

        // Mengecek apakah kategori sudah ada di database
        $queryExist = mysqli_query($link, "SELECT nama FROM kategori WHERE nama = '$kategori'");
        $jumlahDataKategoriBaru = mysqli_num_rows($queryExist);

        if ($jumlahDataKategoriBaru > 0) {
            ?>
            <div class="alert alert-warning mt-3" role="alert">
                Kategori sudah ada
            </div>
            <?php
        } 
        else {
            // Menyimpan kategori baru ke database
            $querySimpan = mysqli_query($link, "INSERT INTO kategori (nama) VALUES ('$kategori')");

            if ($querySimpan) {
                ?>
                <div class="alert alert-success mt-3" role="alert">
                    Kategori berhasil tersimpan
                </div>
                <!-- untuk merefresh halaman pada kategori -->
                <meta http-equiv="refresh" content="1; url=kategori.php"/>   
                <?php
            } else {
                echo mysqli_error($link);

            }

        }
    }
                ?>
                
           
            
        

</div>



        <!-- tabel kategori -->
        <div class="mt-5">
            <h2>List Kategori</h2>


            <div class="table-responsive mt-4">
                <table class="table">
                    <!-- atasnya table -->
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <!-- dalamnya table -->
                    <tbody>
                       <?php 
                       
                       if($jumlahKategori==0){

                        ?>

                            <tr>
                                <td colspan=3 class="text-center">Data Kategori Tidak Ada</td>
                            </tr>

                        <?php
                       } else {
                        $jumlah = 1;
                         while($data=mysqli_fetch_array($queryKategori)){
                        ?>

                            <tr>
                                <td>
                                    <?php echo $jumlah;  ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $data['nama'];
                                    ?>
                                </td>
                                <td> 
                                    <a href="kategori-detail.php?q=<?php echo $data['id'];?>" class="btn btn-info"><i class="fas fa-search"></i></a>
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


   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>