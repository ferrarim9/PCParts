<?php
session_start();
require_once 'database.php'; // Database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $inquiry = trim($_POST['inquiry']);

    // Validate inputs
    if (empty($firstName) || empty($lastName) || empty($email) || empty($inquiry)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: about.php");
        exit();
    }

    try {
        // Insert data into the database
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO contact_inquiries (first_name, last_name, email, inquiry) VALUES (:first_name, :last_name, :email, :inquiry)");
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':inquiry', $inquiry);

        $stmt->execute();

        $_SESSION['success'] = "Thank you for your inquiry! We'll get back to you shortly.";
        header("Location: about.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['error'] = "Error: " . $e->getMessage();
        header("Location: about.php");
        exit();
    }
}
?>
