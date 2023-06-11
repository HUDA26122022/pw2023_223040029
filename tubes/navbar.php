   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light warna4 fixed-top position-fixed p-3">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/icons/logo1.png" alt="" width="80" height="45"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav fs-5 text-nav">
       <li class="nav-item dropdown">
          <a class="nav-link " href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Tentang kami</a>
        </li>
      </ul>
    <div class="ms-auto login">
        <!-- <a href="keranjang.php" class="text-login">
            <img src="img/icons/keranjang.png" width="20" height="20" alt="">
        </a> -->

<?php
// Pastikan variabel $user_logged_in sudah didefinisikan dan memiliki nilai yang benar
// Misalnya, jika menggunakan session untuk login:
if (isset($_SESSION['role'])) {
  $user_logged_in = $_SESSION['role'];

  if ($user_logged_in == 'admin') {
    // Jika pengguna sudah login sebagai admin, tampilkan menu admin
    ?>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!-- Tampilkan menu admin -->
      <li class="nav-item dropdown img-profil">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="img/icons/default.png" width="45" alt="Profile Image">
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="adminpanel/index.php">Halaman Admin</a></li>
          <li><a class="dropdown-item" href="pesanan.php">Pesanan</a></li>
          <li><a class="dropdown-item" href="keranjang.php">Keranjang</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" onclick="return confirm('Apakah Anda Yakin Ingin Keluar!!');" href="logout.php">logout <img src="img/icons/login.png" alt="" width="20" height="20"></a></li>
        </ul>
      </li>
    </ul>
    <?php
  } else {
    // Jika pengguna sudah login, tetapi bukan admin, tampilkan menu pengguna biasa
    ?>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!-- Tampilkan menu pengguna biasa -->
      <li class="nav-item dropdown img-profil">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="img/icons/default.png" width="45" alt="Profile Image">
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="pesanan.php">Pesanan</a></li>
          <li><a class="dropdown-item" href="keranjang.php">Keranjang</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" onclick="return confirm('Apakah Anda Yakin Ingin Keluar!!');" href="logout.php">logout <img src="img/icons/login.png" alt="" width="20" height="20"></a></li>
        </ul>
      </li>
    </ul>
    <?php
  }
} else {
  // Jika pengguna belum login, tampilkan tombol Login
  ?>
  <div class="text-login">
  <a href="../tubes/adminpanel/login.php" >
    <b>Login</b>
    <img src="img/icons/login.png" width="20" height="20" alt=""> 
  </a>
  </div>
  <?php
}
?>

      </div>
    </div>
  </div>
</nav>