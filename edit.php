<!DOCTYPE html>
<html>
<head>
    <title>Edit Kos</title>
    <style>
        /* CSS sesuai kebutuhan */
        <!DOCTYPE html>
<html>
<head>
    <title>Edit Kos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
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
        form input[type="number"],
        form textarea {
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
    </style>
</head>
<body>
    <h2>Edit Kos</h2>
    <form method="POST" action="proses_edit.php">
        <input type="hidden" name="id" value="<?php echo $kos['id']; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $kos['nama']; ?>" required><br>
        <label>Harga:</label>
        <input type="number" name="harga" value="<?php echo $kos['harga']; ?>" required><br>
        <label>Keterangan:</label>
        <textarea name="keterangan"><?php echo $kos['keterangan']; ?></textarea><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>

    </style>
</head>
<body>
    <h2>Edit Kos</h2>
    <?php
    // Periksa apakah parameter id ada dan valid
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Ambil data kos dari database berdasarkan id
        $query = "SELECT * FROM kos WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
        $kos = mysqli_fetch_assoc($result);

        // Periksa apakah data kos ditemukan
        if ($kos) {
    ?>
    <form method="POST" action="proses_edit.php">
        <input type="hidden" name="id" value="<?php echo $kos['id']; ?>"
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $kos['nama']; ?>" required><br>
        <label>Harga:</label>
        <input type="number" name="harga" value="<?php echo $kos['harga']; ?>" required><br>
        <label>Keterangan:</label>
        <textarea name="keterangan"><?php echo $kos['keterangan']; ?></textarea><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
    <?php
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "ID tidak valid.";
    }
    ?>
</body>
</html>
