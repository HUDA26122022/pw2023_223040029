<?php
require "koneksi.php";
 
session_start();

if ( !isset($_SESSION['user'])){  //! = negasi
   header('localtion: adminpanel/login.php');
}

if (!isset($_SESSION["login"])) {
    header("Location: adminpanel/login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Pesan</title>
    <link rel="icon" href="img/icons/logo1.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/pesanan.css">
</head>
<body>

<div class="container-fluid w-100 ">
      <div class="row h-100  w-100 tag-hero p-2 mx-auto ">
        <div class="col-md-6 login my-auto mx-auto bg-#BF9742 p-5 text-center text-lg-start ">
          <div class="row ">
<form action="" method="post" class="needs-walidation" name="submit-to-google-sheet">
<h1 class="text-center">Form Pesan</h1>
        <div >
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Anda " required autocomplete="off">
        </div>

        <div >
            <label for="nama" >Nomor Hp</label>
            <input type="number" name="nomor-hp" class="form-control" id="nama" placeholder="Masukan Nomor Hp" required autocomplete="off">
        </div>

        <div>
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" placeholder="Masukan Alamat Anda" cols="30" rows="10" class="form-control"></textarea>
        </div>

        

        <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>

        <a href="index.php" class="kembali"> kembali</a>
</form>
<span id="msg"></span>
          </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbwNCP7X-FChthBaDZr4t5htA9Wnb-sc9PhprSNz41DUf8C4CdyCHQ4nQH4AZgVPqPo4GA/exec'
        const form = document.forms['submit-to-google-sheet']
        const msg = document.getElementById('msg')

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response =>{
                alert('pesanan berhasil di pesan!');
                document.location.href = 'pesanan.php';
                setTimeout(function(){
                    msg.innerHTML = ""
                },5000)
                form.reset()
            })
            .catch(error => console.error('Error!', error.message))
            })
    </script>
</body>
</html>             
