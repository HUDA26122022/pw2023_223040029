   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light warna4 fixed-top position-fixed p-3">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/icons/logo1.png" alt="" width="80" height="45"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav fs-5 ">
       <li class="nav-item dropdown">
          <a class="nav-link " href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang-kami.php">Tentang kami</a>
        </li>
      </ul>
    <div class="ms-auto login">
        <a href="keranjang.php" class="">
            <img src="img/icons/keranjang.png" width="20" height="20" alt="">
        </a>

        <?php
            if ($user_logged_in) {
                // Jika pengguna sudah login, tampilkan gambar
                ?>
                <a href="adminpanel/index.php" class="my-element">
                    <img src="img/icons/default.png" width="45" alt="Profile Image">
                </a>
                <?php
            } else {
                // Jika pengguna belum login, tampilkan tombol Login
                ?>
                <a href="../tubes/adminpanel/login.php">
                  <b>Login</b>
                  <img src="img/icons/login.png" width="20" height="20" alt=""> 
                </a>
                <?php
            }
        ?>
      </div>
    </div>
  </div>
</nav>