<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d php</title>

    <style>
        .box1{
            line-height: 10px !important;
        }
        .box {
            border: 1px solid black;
            width: 50px;
            height: 50px;
            display: inline-block;

        }



        .putih {
            background-color: white;
        }


        .hitam {
            background-color: black;
        }
    </style>
</head>
<body>
    
<div class = box1>
<?php 
 for ($i = 0; $i < 5; $i++) {
    for ($b = 0; $b < 5; $b++) {
        if (($i + $b) % 2 == 0) {
            echo "<div class='box hitam'></div>";
        } 
        else {
            echo"<div class='box putih'></div>";
        }
        
    }
    echo "<br>";
 }

?>
</div>


</body>
</html>