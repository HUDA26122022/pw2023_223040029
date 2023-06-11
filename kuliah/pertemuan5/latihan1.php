<?php 
// ARRAY

//MEMBUAT ARRAY

$hari = array ('senin','selasa','rabu') ;
$bulan = ['januari','februari','maret'] ;
$myarray = ['ahmad',39,false];
$binatang = ['🐈','🐇','🐕'];

//mencetak array

echo $hari[1];
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myarray);
echo"<hr>";


//memanipulasi data 
//menggunakan index
// $hari[0] = 'minggu';
// print_r($hari);

// echo"<hr>"
//menambah elemen di akhir menggunkan index

$hari[] = 'kamis';
$hari[] = "jum'at";//indexnya jangan di isi biar bisa berurutan untuk hasilnya
print_r($hari);


array_push($bulan,'april','mei','juni','maret');
print_r($bulan);
echo "<hr>";
 
//menambahkan elemen 

array_unshift($binatang,'🐲');
print_r($binatang);
echo "<hr>";

//menghapus elemen di akhir,menggunakan array_pop()

array_pop($hari);
print_r($hari);
echo "<hr>";

//menghapus elemen di awal,menggunakan array_shift()

array_shift($hari);
print_r($hari);







?>