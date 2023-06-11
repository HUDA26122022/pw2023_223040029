<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../adminpanel/view/fromregister&login.css">
    <title>Registrasi</title>
    <link rel="icon" href="../img/icons/logo1.png">
    <link rel="stylesheet" href="../css/registrasi.css">
  </head>
  <body>


    <div class="container-fluid w-100 ">
      <div class="row h-100  w-100 tag-hero p-2 mx-auto ">
        <div class="col-md-6 login my-auto mx-auto bg-#BF9742 p-5 text-center text-lg-start ">
          <div class="row ">
            <h2 class="text-center fw-bold">Form Registrasi</h2>
            <form action="" method="post" class="needs-walidation">

              <div class="form-group was-validated">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email Addres " required>
              </div>

              <div class="form-group was-validated">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password" required>
              </div>

              <div class="form-group was-validated">
                <label for="password" class="form-label">konfirmasi Password</label>
                <input type="password" name="konfirmasi_password" class="form-control" id="password" placeholder="konfirmasi Password" required>
              </div>

              <input type="hidden" name="role" id="role" value="user">


              <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
              <button type="reset" name = "reset" class="btn btn-danger" value="reset">Reset</button>

              <div class="login1 " >
                  <i>
                     Sudah memiliki akun ? 
                  </i>
                    <a href="login.php" class="">
                      Login
                    </a>
                  <p>
                    <a href="../index.php" class="">
                      Back
                    </a>
                  </p>
              </div>
            </form>

            <?php 
  
  require_once "core/init.php";

  if (isset($_SESSION['user'])) {
  header('Location: index.php');
  exit;
}

if (isset($_SESSION['login'])){
  //  echo "<script>alert('anda sudah login jadi gak bisa kemana mana!')</script>";
  //  exit;
  header('Location: ../index.php');
  exit;
  }
// Cek kode konfirmasi password (validasi register)
if (isset($_POST['submit'])) {
  $nama = $_POST['email'];
  $pass = $_POST['password'];
  $copass = $_POST['konfirmasi_password'];
  $role = $_POST['role'];
  

  if (!empty(trim($nama)) && !empty(trim($pass)) && !empty(trim($copass))) {
    if (register_cek_nama($nama)) {
      // Memasukkan data ke database
      if ($pass !== $copass) {
        // Konfirmasi password tidak sesuai
        echo "Konfirmasi password tidak sesuai dengan password.";
        // Tambahkan tindakan lain yang ingin Anda lakukan jika konfirmasi password tidak sesuai, misalnya mengarahkan pengguna kembali ke halaman pendaftaran.
      } else {
        // Konfirmasi password sesuai
        // Lanjutkan dengan proses pendaftaran pengguna
        if (register_user($nama, $pass, $copass,$role)) {
          // Periksa apakah pengguna telah masuk atau belum
          if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            // Jika pengguna belum masuk, arahkan ke halaman login
            header("Location: login.php");
            exit;
          }
        } else {
          echo "gagal";
        }
      }
    } else {
      echo "Nama sudah ada, tidak bisa digunakan.";
    }
  } else {
    echo "Tidak boleh kosong.";
  }
}


 
  ?>
          </div>
        </div>
      </div>
    </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>