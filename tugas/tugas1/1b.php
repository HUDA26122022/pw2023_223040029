<!-- variabel -->
<?php 
$nilai3 = 29 ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b</title>
</head>
<body>
    <?php

       // nilai pertama
       echo "aku adalah angka <b>$nilai3</b></br>";

        //hasil dari perkalian
        echo "Jika aku dikali 5, maka aku sekarang menjadi" . "<b>" . " " . ($nilai3 = $nilai3 * 5). "</b></br>";

        //hasil dari pembagian
        echo "Jika aku dibagi 2, maka aku sekarang menjadi" . "<b>" . " " .($nilai3 = $nilai3  / 2). "</b></br>";


        //hasil dari pertambahan
        echo "Jika aku ditambah 75, maka aku sekarang menjadi" . "<b>" . " " .($nilai3 = $nilai3 + 75). "</b></br>";


        //hasil dari pengurangan
        echo "Jika aku dikurang 20, maka aku sekarang menjadi" . "<b>" . " " .($nilai3 = $nilai3 - 20). "</b></br>";


    ?>
</body>
</html>