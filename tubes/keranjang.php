<?php 
require "koneksi.php";

session_start();

// Periksa apakah pengguna sudah login berdasarkan informasi session
if (isset($_SESSION['role'])) {
    // Pengguna sudah login
    $user_logged_in = true;
} else {
    // Pengguna belum login
    $user_logged_in = false;
}

if (!isset($_SESSION["login"])) {
    header("Location: adminpanel/login.php");
    exit;
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Keranjang</title>
    <link rel="icon" href="img/icons/logo1.png">

    <!-- font -->


    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .text{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 20px;
        color: rgb(0, 0, 0, 0.4);
    }
</style>
<body>
    <!-- navbar -->
<?php require "navbar.php"; ?>


   
            <h1 class="text">halaman ini belum selesai</h1>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>