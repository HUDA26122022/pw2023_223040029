<?php 
$Friend = [
    [
        "NRP" => "223040029",
        "NAMA" => "AHMAD MULIA HUDA",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "ahamd@gmail.com",
        "NO HP" => "08394723749",
        "FOTO"  => "ahmad.jpg"
    ],
    [
        "NRP" => "223043294",
        "NAMA" => "MUHAMMAD FAUZAN DWI PUTERA",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "fauzan@gmail.com",
        "NO HP" => "083947232348",
        "FOTO"  => "mg.jpg"
    ],
    [
        "NRP" => "223043420",
        "NAMA" => "DIAZ ALFIARI RACHMAD",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "diaz@gmail.com",
        "NO HP" => "083947233829",
        "FOTO"  => "mg.jpg"
    ],
    [
        "NRP" => "223391840",
        "NAMA" => "NOVAN RAMDAN",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "novan@gmail.com",
        "NO HP" => "08394333929",
        "FOTO"  => "novan.jpg"
    ],
    [
        "NRP" => "22339432479",
        "NAMA" => "PRAMUDYA DIMAS WILANDA",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "prasss@gmail.com",
        "NO HP" => "08394393841",
        "FOTO"  => "prass.jpg"
    ],
    [
        "NRP" => "223394391837",
        "NAMA" => "HIKMAL RYVALDI PELU",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "hikmal@gmail.com",
        "NO HP" => "083943932389",
        "FOTO"  => "mg.jpg"
    ],
    [
        "NRP" => "223392384",
        "NAMA" => "BINTANG ARYA PUTRA YUSAR",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "bintangss@gmail.com",
        "NO HP" => "08394298028",
        "FOTO"  => "bintang.jpg"
    ],
    [
        "NRP" => "2233922938",
        "NAMA" => "DIMAS HIDAYATULLOH",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "dimasss@gmail.com",
        "NO HP" => "083942938428",
        "FOTO"  => "mg.jpg"
    ],
    [
        "NRP" => "2233938",
        "NAMA" => "RAFLI RAMDHANI",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "fliiii@gmail.com",
        "NO HP" => "0832988428",
        "FOTO"  => "mg.jpg"
    ],
    [
        "NRP" => "223133938",
        "NAMA" => "ALVIN ABDUL SAHAB",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "alvinnn@gmail.com",
        "NO HP" => "083292938428",
        "FOTO"  => "alvin.jpg"
    ]
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas array associative 5a</title>

<body>
    <h1>Friend</h1>

    <?php foreach ( $Friend as $Fi ) : ?>

    <ul>
        <li class="gambar">
            <img src="img/<?= $Fi["FOTO"]; ?>">
        </li>
        <li>NRP : <?=  $Fi ["NRP"];  ?></li>
        <li>NAMA : <?=  $Fi ["NAMA"];  ?></li>
        <li>JURUSAN : <?=  $Fi ["JURUSAN"];  ?></li>
        <li>EMAIL : <?= $Fi ["EMAIL"];  ?></li>
        <li>NO HP : <?=  $Fi ["NO HP"];  ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>