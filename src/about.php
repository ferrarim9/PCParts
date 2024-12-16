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
            <a class="navbar-brand" href="#">PCParts Database</a>
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
                        <a class="nav-link" href="#section3">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section4">Investors</a>
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
            <p>If you'd like to learn more about us, feel free to reach out via our <a href="#section4">Contact Us</a> page.</p>

            <form class="mt-4" onsubmit="handleFormSubmit(event)">
                <div id="form-fields">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="mb-3">
                        <label for="inquiry" class="form-label">Inquiry Details</label>
                        <textarea class="form-control" id="inquiry" rows="4" placeholder="Enter your inquiry details"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div id="thank-you-message" class="d-none">
                    <h3>Thank You!</h3>
                    <p>We appreciate your inquiry. Our team will get back to you shortly.</p>
                </div>
            </form>
        </div>
    </section>

    <script>
        function handleFormSubmit(event) {
            event.preventDefault();
            document.getElementById('form-fields').classList.add('d-none');
            document.getElementById('thank-you-message').classList.remove('d-none');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
