<?php
$host = 'sql1.njit.edu';
$dbname = 'mjf8';
$username = 'mjf8';
$password = 'Matty238209200!';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
