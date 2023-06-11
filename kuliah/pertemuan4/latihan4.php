<?php 
$angka = 5;

//memeriksa apakah $angka itu bilangan ganjil
//bilangan yang jika di bagi 2 sisanya 1
//kalau genap jika dibagi 2 sisanya 0
function cek_ganjil_genap($angka)//variabel di dalam kurung buka tutup di sebut parameter
{
if ($angka % 2 == 1){
    return "$angka adalah bilangan ganjil";
}
else {
    return "$angka bilangan genap";
}
//catatan!!
//jila
}
echo cek_ganjil_genap(10);//variabel di dalam kururng buka kurung tutup di bawah di sebut arguman
echo "<br>";
echo cek_ganjil_genap(5);
echo "<br>";
echo cek_ganjil_genap(101);
//jika berbeda variabelnya cuma di ganti variabek arguentnya mau hasilnya atau mau variabel yang di tanyakan
?>

