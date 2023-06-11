<?php 
//pengulangan while

//1. inisialisasi / nilai awal

//2. kondisi terminasi / kapan pengulangan berhenti

//3. increment /decrement
$nilai_awal = 2 ; //inialisasi
while ($nilai_awal <= 10) { 
    // kondisi terminasi
echo "hello world $nilai_awal x <br>";

$nilai_awal += $nilai_awal + 2 ;
}



echo "<hr>" ;
for ($nilai_awal = 1 ; $nilai_awal <= 10 ; $nilai_awal++){
echo "hello world $nilai_awal x <br>";

}
?>


