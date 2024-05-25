<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'qlns_clb';

$conn = mysqli_connect($server, $user, $password, $db);

if ($conn) {
    mysqli_query($conn, "SET NAMES 'utf8'");
} else {
    echo 'Kết nối thất bại';
}
