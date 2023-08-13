<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    // Masukkan data kos baru ke dalam database
    $query = "INSERT INTO kos (nama, harga, keterangan) VALUES ('$nama', '$harga', '$keterangan')";
       // Masukkan data kos baru ke dalam database
       $query = "INSERT INTO kos (nama, harga, keterangan) VALUES ('$nama', '$harga', '$keterangan')";
       $result = mysqli_query($koneksi, $query);

       if ($result) {
           // Jika penambahan data berhasil, redirect ke halaman index.php
           header("Location: index.php");
           exit();
       } else {
           // Jika penambahan data gagal, tampilkan pesan error
           echo "Error: " . mysqli_error($koneksi);
       }
   }
