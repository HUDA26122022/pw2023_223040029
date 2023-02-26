<style>
    .nomber{
        background-color: red;
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 50px;
        border: 1px solid black;
        display: inline-block;
    }
</style>



<?php 

$pola1 = "1";
$pola2 = "10";

for($i = $pola2;$i >= $pola1; $i--){
    for ($b = 1;$b <= $i; $b++){
        echo "<div class= 'nomber'>$b</div>";
    }
    echo "<br>";
    

}
?>