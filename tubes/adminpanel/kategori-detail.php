<?php 

require_once "core/init.php";
require "../adminpanel/function/db.php";

    $id = $_GET['q'];

    $query = mysqli_query($link, "SELECT * FROM kategori WHERE id = '$id'");
    $data = mysqli_fetch_array($query);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <!-- css -->
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
    <title>Detail Kategori</title>
</head>
<body>
    <?php require "navbaradmin.php"; ?>

    <div class="container pt-5 mt-5">
    <h2>Detail Kategori</h2>

    <div class="col-12 col-md-6">
            <form action="" method="post">
                <div>
                    <label for="kategori">kategori</label>
                    <input type="text" name="kategori" id="kategori" class="form-control mt-3 text-center" value="<?php echo $data['nama_kategori'];?>" >
                </div>

                <div class="mt-5 d-flex justify-content-between">
                      <button type="submit" class="btn btn-primary" name="edit-btn">Edit</button>
                      <button type="submit" class="btn btn-danger" name="delete-btn">Delete</button>  
                </div>
            </form>

            <!-- mengedit data di kategori -->

         <?php 
         
         if (isset($_POST['edit-btn'])){
            // biar tidak ada yang sama ketika di input

            $kategori =htmlspecialchars($_POST['kategori']);

            if($data['nama_kategori']==$kategori){
            ?>
                <meta http-equiv="refresh" content="1; url=kategori.php"/>
            
            <?php
            } 
            else{
                $query = mysqli_query($link, "SELECT * FROM kategori WHERE nama_kategori = '$kategori'");
                $jumlahData = mysqli_num_rows($query);

                if($jumlahData > 0 ){
                    ?>
                    
                    <div class="alert alert-warning mt-3" role="alert">
                        Kategori sudah ada
                    </div>
                    
                    <?php
                }
                else{
                    // meng update nama data yang ada di data base
                    $querySimpan = mysqli_query($link, "UPDATE kategori SET nama_kategori ='$kategori' WHERE id = '$id'");
                    
                    
                    if ($querySimpan) {
                        ?>
                        <div class="alert alert-success mt-3" role="alert">
                            Kategori berhasil terupdate
                        </div>
                        <!-- untuk merefresh halaman pada kategori -->
                        <meta http-equiv="refresh" content="1; url=kategori.php"/>   
                        <?php
                    } else {
                        echo mysqli_error($link);
        
                    }
                }
            }
         }
         

         if(isset($_POST['delete-btn'])){
           $queryDelete = mysqli_query($link, "DELETE FROM kategori WHERE id = '$id'");
        
           if($queryDelete) {
            ?>
            <div class="alert alert-primary mt-3" role="alert">
                Kategori berhasil terhapus
            </div>
            <!-- untuk merefresh halaman pada kategori -->
            <meta http-equiv="refresh" content="1; url=kategori.php"/>   
            <?php
        } else {
            echo mysqli_error($link);

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