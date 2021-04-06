<?php

session_start();

$_SESSION['seila'] = '1234';
$_SESSION['seila2'] = '1234f';
$_SESSION['seila3'] = '12342';

$page_precedente = $_SESSION['page'];

print_r($_SESSION);

session_destroy();

header("location: Index.php");



?>