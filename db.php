
<?php
$host = 'localhost';
$user = 'root'; // username database
$pass = ''; // password database
$dbname = 'toko_baju';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
