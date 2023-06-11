<?php 

require 'function.php';
$id = $_GET['id'];

if (hapus($id) > 0 ){
    echo "<script>
    
    alert('data berhasil di hapus!');
    document.localtion.href = 'index.php';

    </script>";
}?>