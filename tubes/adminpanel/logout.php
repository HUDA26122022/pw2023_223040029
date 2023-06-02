<?php

require_once "core/init.php";
session_start();
$_SESSION = [];
session_unset();
session_destroy();
header('Location: login.php');
exit;

?>