<?php

$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "admin";

$koneksi = mysqli_connect($hostname, $user, $password, $db_name) or die(mysqli_error($koneksi));
?>  