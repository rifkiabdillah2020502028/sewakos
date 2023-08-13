<?php
require 'koneksi.php';

// Periksa apakah parameter id ada dan valid
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data kos dari database berdasarkan id
    $query = "DELETE FROM kos WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika penghapusan data berhasil, redirect ke halaman index.php
        header("Location: index.php");
        exit();
    } else {
        // Jika penghapusan data gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "ID tidak valid.";
}
