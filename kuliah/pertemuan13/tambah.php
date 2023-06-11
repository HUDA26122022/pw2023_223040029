<?php
require('functions.php');

$name = 'Tambah Data Mahasiswa';

// ketika tombol submit di-klik
if (isset($_POST['tambah'])){
    // jalankan pungsi tambah(data yang di tulis di dalam post nya)

   if( tambah($_POST) > 0){
    echo"<script> 
    
            alert('data berhasil di tambahkan');
            document.localtion.href = 'index.php';
    
    
        </script>";
   }
}

require('views/tambah.view.php');
