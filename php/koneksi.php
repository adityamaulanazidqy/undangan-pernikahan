<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "undanganPernikahan";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
