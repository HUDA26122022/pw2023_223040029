<?php 

$link = mysqli_connect("localhost", "root", "", "tokoonline");

//check conection
if(mysqli_connect_errno()){
    echo "failed to connet to MySQL: " . mysqli_connect_error();
    exit();
}

?>