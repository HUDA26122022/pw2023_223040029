<?php
define('BASE_URL', '/pw2023_223040029/kuliah/pertemuan12/');

function koneksi(){
 
  //KONEKSI KE DATA BASE

$db = mysqli_connect('localhost', 'root', '', 'pw2023_223040029')
 or die('database error'); //untuk cara koneksi (local host, usernamae, password , nama data base)

return $db;
}

function query($query){
  $db = koneksi();
  $result = mysqli_query($db, $query) or die(mysqli_error($db));

while($row = mysqli_fetch_assoc($result)){

  $rows[] = $row;

}
//SIAPKAN DATA $STUDENTS
return $rows;
}

function tambah($data){
  $db = koneksi();

  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);
  

  $query = "INSERT INTO mahasiswa VALUES (null,'$nim', '$nama', '$email', '$jurusan', '$gambar')";


  mysqli_query($db, $query) or die (mysqli_error($db));

  return mysqli_affected_rows($db);

}

function hapus($id){
  $conn = koneksi();

  $query = "DELETE FROM mahasiswa WHERE id = $id";


  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
