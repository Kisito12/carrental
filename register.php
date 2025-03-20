<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | CarRental</title>
    <link rel="stylesheet" href="./assets/css/register.css">
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
        <section class="form-section">
            <h2>Register</h2>
            <form id="registration-form" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" required>

                <label for="email">Email</label>
                <input type="email" id="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" required>
                <button type="button" id="toggle-password">Show Passwords</button>

                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" required>

                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </section>
    </div>

    <footer>
        <p>© 2025 CarRental. All rights reserved.</p>

        <div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","languages":["en","fr","it","es"],"wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/fd.js" defer></script>

    </footer>
    <script src="./assets/js/register.js"></script>
</body>
</html>