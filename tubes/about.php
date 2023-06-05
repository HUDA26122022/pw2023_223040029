<?php 

require("navbar.php");

session_start();

// validasi login
// ketika pengguna sudah login atau belum login
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tnteng Kami</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/about.css">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Dancing+Script:wght@700&family=Lobster&family=Satisfy&display=swap" rel="stylesheet">

</head>
<body>
    <!-- navbar -->
    <?php require ("navbar.php"); ?>

    <!-- banner -->
    <div class="container-fluid baner-about d-flex align-items-center">
        <div class="container font-text">
            <h1 class="text-white text-center mt-5"> Tentang Kami</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="contaienr">
            <div class="text-about">
                <p>Selamat datang di Serabi Rasa Sayang! 
                   Serabi Rasa Sayang ini menghadirkan berbagai macam pilihan makanan lezat
                   dan minuman segar untuk memanjakan lidah Anda. Spesialisasi kami adalah Serabi, Combro, 
                   dan aneka minuman yang menggugah selera.
                </p>
                <p>
                    Serabi adalah salah satu makanan tradisional Indonesia yang terkenal dengan rasa manis,guris,asin dan tekstur lembutnya.
                    Kami menyajikan Serabi dalam berbagai varian, mulai dari Serabi Oncom original dengan isian Oncom,
                    hingga varian modern dengan isian keju, cokelat, atau kacang. 
                    Nikmati sensasi kenikmatan surabi yang lezat dengan sentuhan inovasi.
                </p>
                <p>
                     Selain Serabi, kami juga menyediakan Combro dimana salah satu makanan tradisional Indonesia yang terkenal dengan rasa manis, guris, asin dan 
                    tekstur kriuknya di bagian luar ketika di makan.
                    Kami menyajikan Combro dalam berbagai varian, mulai dari Combro original dengan isian Oncom di jero,
                    hingga varian modern dengan isian keju, cokelat, atau kacang. 
                    Nikmati sensasi kenikmatan Combro yang lezat dengan sentuhan inovasi supaya melengkapi pengalaman kuliner Anda.
                </p>
                <p>
                    Selain Serabi dan Comro, kami juga menawarkan berbagai minuman segar untuk melengkapi pengalaman kuliner Anda.
                 Pilih dari beragam minuman, mulai dari es campur dengan berbagai potongan buah segar yang menyegarkan, 
                 minuman tradisional seperti es kelapa muda, hingga minuman modern seperti bubble tea dengan pilihan topping yang beragam. 
                 Setiap tegukan minuman kami akan membawa kesegaran yang tak tertandingi.
                </p>
                <p>
                    Jadi, tunggu apa lagi? Jelajahi dan temukan kelezatan Serabi, Combro dan keharuman minuman yang segar. 
                Mari bergabung dengan kami dalam menikmati sensasi kuliner yang luar biasa dan membuat momen spesial menjadi lebih istimewa. 
                Selamat berbelanja di SERABI RASA SAYANG!
                </p>
            </div>
        </div>
    </div>
    <?php require ("footer.php"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>