<?php

$host = 'sql1.njit.edu';
$dbname = 'mjf8';
$username = 'mjf8';
$password = 'Matty238209200!';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Database connection successful.";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>
