
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../adminpanel/view/fromregister&login.css">
    <title>Login</title>
    <link rel="icon" href="../img/icons/logo1.png">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>

  

    <div class="container-fluid w-100 ">
      <div class="row h-100  w-100 tag-hero p-2 mx-auto ">
        <div class="col-md-6 login my-auto mx-auto bg-#BF9742 p-5 text-center text-lg-start ">
          <div class="row ">
            <h2 class="text-center fw-bold">Form Login</h2>
            <form action="" method="post" class="needs-walidation">

      
              <div class="form-group was-validated">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email Addres " required autocomplete="off">
              </div>

              <div class="form-group was-validated">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password" required autocomplete=off>
              </div>

              <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>

              <div class="login1 ">
                  <i>
                     Belum memiliki akun ? 
                  </i>
                    <a href="../adminpanel/register.php" class="">
                      Registrasi
                    </a>
                  <p>
                    <a href="../index.php">
                      Back
                    </a>
                  </p>
              </div>
            </form>
            

            <?php
require_once "core/init.php";

// Redirect jika pengguna sudah login
if (isset($_SESSION['login'])) {
  header('Location: ../index.php');
  exit;
}

// Validasi login
if (isset($_POST['submit'])) {
  $nama = $_POST['email'];
  $pass = $_POST['password'];

  $result = mysqli_query($link, "SELECT * FROM users WHERE email = '$nama'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($pass, $row['password'])) {
      // set session
      $_SESSION['login'] = true;
      $_SESSION['email'] = $row['email'];
      $_SESSION['role'] = $row['role'];

      if ($row['role'] == 'admin') {
        header("Location: ../index.php");
      } elseif ($row['role'] == 'user') {
        header("Location: ../index.php");
        exit;
      } else {
        echo "Email atau password yang Anda masukkan salah.";
      }
    } else {
      echo "Email atau password yang Anda masukkan salah.";
    }
  } else {
    echo "Nama yang dimasukkan belum ada!";
  }

  $error = true;
}
?>

          </div>
        </div>
      </div>
    </div>

 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>


