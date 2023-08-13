<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kos</title>
    <style>
      <!DOCTYPE html>
<html>
<head>
    <title>Tambah Kos</title>
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
    <h2>Tambah Kos</h2>
    <form method="POST" action="proses_tambah.php">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Harga:</label>
        <input type="number" name="harga" required><br>
        <label>Keterangan:</label>
        <textarea name="keterangan"></textarea><br>
        <input type="submit" name="submit" value="Tambah">
    </form>
</body>
</html>

    </style>
</head>
