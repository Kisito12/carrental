<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | CarRental</title>
    <link rel="stylesheet" href="./assets/css/contact_us.css">
</head>
<body>
    <header>
    <img class="logo" src="./assets/image/LOGO.jpg" alt="logo">
        <nav>
            <a href="index.php">Home</a>
            <a href="car.php">Cars</a>
            <a href="booking.php">Booking</a>
            <a href="about.php">About</a>
            <a href="contact_us.php">Contact us</a>
            <a href="location.php">Location</a>
            <a href="login.php" class="login-button">Login</a>
        </nav>
    </header>

    <div class="container">
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="message">Message:</label>
            <textarea name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
        <div class="success-message" style="display:none;"></div>
        <div class="error-message" style="display:none;"></div>
    </div>

    <footer>
        <p>© 2025 CarRental. All rights reserved.</p>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>

        <div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","languages":["en","fr","it","es"],"wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/fd.js" defer></script>

    </footer>
    <script src="./assets/js/contact.js"></script>
</body>
</html>