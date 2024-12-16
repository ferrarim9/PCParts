<?php
session_start();
if (isset($_SESSION['success'])) {
    echo "<div class='alert alert-success text-center'>{$_SESSION['success']}</div>";
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    echo "<div class='alert alert-danger text-center'>{$_SESSION['error']}</div>";
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PCParts Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }
        section {
            padding: 60px 15px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PCParts Database</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-light text-center">
        <div class="container">
            <h1>About Us</h1>
            <p>Welcome to PCParts Database, your trusted partner for high-quality computer components and accessories. We pride ourselves on offering an extensive inventory and exceptional customer service to help you build or upgrade your dream PC.</p>
        </div>
    </section>

    <section class="bg-white text-center">
        <div class="container">
            <h2>Our Mission</h2>
            <p>To provide enthusiasts and professionals with reliable access to the best PC parts available, ensuring performance, compatibility, and value.</p>
        </div>
    </section>

    <section class="bg-light text-center">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <ul class="list-unstyled">
                <li>Extensive Inventory</li>
                <li>Competitive Prices</li>
                <li>Expert Support</li>
                <li>Fast Shipping</li>
            </ul>
        </div>
    </section>

    <section class="bg-white text-center">
        <div class="container">
            <h2>Contact Information</h2>
            <p>If you'd like to learn more about us, feel free to reach out via our Contact page or use the form below.</p>

            <form action="submit_inquiry.php" method="POST" class="mt-4">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                <div class="mb-3">
                    <label for="inquiry" class="form-label">Inquiry Details</label>
                    <textarea class="form-control" id="inquiry" name="inquiry" rows="4" placeholder="Enter your inquiry details" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
