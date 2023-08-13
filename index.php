<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Jika pengguna belum login, arahkan ke halaman login
    header("Location: login.php");
}

require 'koneksi.php';

// Ambil daftar kos dari database
$query =
"SELECT * FROM kos";
$result = mysqli_query($koneksi, $query);
$kos = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Sewa Tempat Kos</title>
    <style>
        /* Tambahkan CSS sesuai kebutuhan */
       /* CSS untuk halaman login.php */
body {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    padding: 20px;
  }
  
  h2 {
    text-align: center;
  }
  
  form {
    max-width: 300px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
  
  form label {
    display: block;
    margin-bottom: 10px;
  }
  
  form input[type="text"],
  form input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  form input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  /* CSS untuk halaman index.php */
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  
  table th,
  table td {
    padding: 10px;
    text-align: left;
  }
  
  table th {
    background-color: #4CAF50;
    color: #fff;
  }
  
  a {
    display: block;
    text-align: right;
    margin-top: 20px;
    color: #333;
    text-decoration: none;
  }
  
  a:hover {
    text-decoration: underline;
  }
  
    </style>
</head>
<body>
    <h2>Daftar Kos</h2>
    <a href="tambah.php">Tambah </a>
    <a href="edit.php">edit </a>
    <a href="hapus.php">hapus </a>

    <table>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($kos as $item) { ?>
        <tr>
            <td><?php echo $item['nama']; ?></td>
            <td><?php echo $item['harga']; ?></td>
            <td><?php echo $item['keterangan']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <table>
    <a href="logout.php">Logout</a>
    </table>  
    
</body>


</html>
