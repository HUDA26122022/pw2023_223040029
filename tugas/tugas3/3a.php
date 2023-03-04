<?php
//menghitung luas pada lingkaran
echo "<h4>Menghitung luas lingkaran</h4>";
//function menghitung luas lingkaran
function hitungluaslingkaran($r){
    echo "jari-jari = $r cm. <br>";
    echo "luas lingkaran = " . (3.14 * $r * $r) ." cm<sup>2</sup>";
}
hitungluaslingkaran(10);
echo"<hr>";


//menghitung keliling pada lingkaran
echo "<h4>Menghitung Kelilinga Lingkaran</h4>";

//fungtion dari menghitung keliling lingkaran
function hitungkelilinglingkaran($r){
    echo "keliling = $r cm. <br>";
    echo "keliling lingkaran =" . (2 * 3.14 * $r) . "cm";
}
//keliling yang di tanyakan
hitungkelilinglingkaran(20);
echo "";
?>