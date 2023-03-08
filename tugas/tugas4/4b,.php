<?php 

$komposisi= ['Motheroard','Processor','Hard disk','PC Coller','VGA Card','SSD'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Macam-maacam perangkat keras komputer</h2>

<ol>
<?php foreach($komposisi as $k) { ?>
        <li><?= $k; ?> </li>
            <?php } ?>
</ol> 

<h2>macam-macam perangkat keras komputer baru</h2>
<ol>
<?php 
array_unshift($komposisi,"Card Reader","Modem");
sort($komposisi);
foreach($komposisi as $k) { ?>
        <li><?=$k;?></li>
        
        <?php } ?>
</ol> 
</body>
</html>