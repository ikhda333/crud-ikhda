
<?php
session_start();
include('../includes/db.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
}

if (isset($_POST['add'])) {
    $nama = $_POST['nama'];
    $ukuran_baju = $_POST['ukuran_baju'];
    $model = $_POST['model'];

    $sql = "INSERT INTO baju (nama, ukuran_baju, model) VALUES ('$nama', '$ukuran_baju', '$model')";
    if ($conn->query($sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD BAJU</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST">
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="ukuran_baju" placeholder="Ukuran Baju" required>
    <input type="text" name="model" placeholder="Model" required>
    <button type="submit" name="add">Add</button>
</form>
<p><a href="dashboard.php">Kembali</a></p>
</body>
</html>

