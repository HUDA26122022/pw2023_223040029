<?php
require('functions.php');
$name = 'Home';
// $students = [
//   [
//     "nama" => "Sandhika Galih",
//     "npm" => "043040023",
//     "email" => "sandhikagalih@unpas.ac.id"
//   ],
//   [
//     "nama" => "Doddy Ferdiansyah",
//     "npm" => "133040003",
//     "email" => "doddy@gmail.com"
//   ]
// ];

//KONEKSI KE DATA BASE
$db = mysqli_connect('localhost', 'root', '', 'pw2023_223040029') or die('database error'); //untuk cara koneksi (local host, usernamae, password , nama data base)


//QUERY KE TABEL MAHASISWA

$rows = [];
$result = mysqli_query($db, "SELECT * FROM mahasiswa") or die(mysqli_error($db));

while($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}
var_dump($rows);
//SIAPKAN DATA $STUDENTS
$students = $rows;


// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
