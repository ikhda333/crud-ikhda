
<?php
session_start();
include('../includes/db.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
}

$id = $_GET['id'];
$sql = "DELETE FROM baju WHERE id = $id";
if ($conn->query($sql)) {
    header('Location: dashboard.php');
} else {
    echo "Error: " . $conn->error;
}
?>
