<?php
require "koneksi.php";
 
 if (!isset($_SESSION["login"])) {
     header("Location: adminpanel/login.php");
     exit;
   }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Pesan</title>
</head>
<body>
    <h1>Form Pesan</h1>
    <form method="post" action="">
        <!-- Isi form sesuai kebutuhan -->
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="alamat" placeholder="Alamat">
        <input type="text" name="pesan" placeholder="Pesan">

        <button type="submit">Pesan</button>
    </form>
</body>
</html>
