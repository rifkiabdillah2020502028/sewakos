<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sewa';

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
