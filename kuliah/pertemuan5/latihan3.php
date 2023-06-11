
<?php 

$mahasiswa = [['ahmad', '🐈','🥙'] , ['huda','🐲','🍞']]

echo $mahasiswa[];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>DAFTAR Mahasiswa</h2>
        <?php foreach($mahasiswa as $m); ?>
    <ul>
        <li>nama : <?= $m[0]; ?></li>
        <li>peliharaan :  <?= $m[1]; ?></li>
        <li>makanan favorit :  <?= $m[2]; ?></li>
    </ul>
</body>
</html>