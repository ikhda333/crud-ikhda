
<?php
session_start();
include('../includes/db.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM baju WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $ukuran_baju = $_POST['ukuran_baju'];
    $model = $_POST['model'];

    $sql = "UPDATE baju SET nama = '$nama', ukuran_baju = '$ukuran_baju', model = '$model' WHERE id = $id";
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
    <title>Edit</title>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

</head>
<body>
<form method="POST">
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
    <input type="text" name="ukuran_baju" value="<?php echo $row['ukuran_baju']; ?>" required>
    <input type="text" name="model" value="<?php echo $row['model']; ?>" required>
    <button type="submit" name="edit">Edit</button>
    <p><a href="dashboard.php">Kembali</a></p>
</form>
</body>
</html>

