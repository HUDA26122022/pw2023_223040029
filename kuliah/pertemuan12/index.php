<?php
require('functions.php');
$name = 'Home';

$rows = [];

$students = query("SELECT * FROM mahasiswa");


require('views/index.view.php');
