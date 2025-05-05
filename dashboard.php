<?php
session_start();
include('../includes/db.php');
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit();
}

// Ambil data baju
$sql = "SELECT * FROM baju";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Toko Baju</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Dashboard Toko Baju</h1>
            <nav>
                <ul>
                    <li><a href="../login.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Daftar Baju</h2>
            <a href="add_baju.php" class="btn-add">Tambah Baju</a>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Ukuran Baju</th>
                        <th>Model</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['ukuran_baju']; ?></td>
                            <td><?php echo $row['model']; ?></td>
                            <td>
                                <a href="edit_baju.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a> |
                                <a href="delete_baju.php?id=<?php echo $row['id']; ?>" class="btn-delete">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
