<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    // Perbarui data kos di dalam database
    $query = "UPDATE kos SET nama='$nama', harga='$harga', keterangan='$keterangan' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika pengeditan data berhasil, redirect ke halaman index.php
        header("Location: index.php");
        exit();
    } else
    if ($result) {
        // Jika pengeditan data berhasil, redirect ke halaman index.php
        header("Location: index.php");
        exit();
    } else {
        // Jika pengeditan data gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
}
