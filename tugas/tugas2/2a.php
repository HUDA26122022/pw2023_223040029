<?php 

$ahmad = "ahmad";
$huda = "huda";

for ($i = 1;$i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0){
        echo "ahmad mulia huda <br>";
    }elseif ($i % 3 == 0){
        echo "$ahmad<br>";
    }elseif ($i % 5 == 0){
       echo "$huda<br>"; 
    }else {
        echo "$i<br>";
    }

}
?>