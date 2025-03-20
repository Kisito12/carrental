<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CarRental</title>
    <link rel="stylesheet" href="./assets/css/login.css">
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
            <h2>Login</h2>
            <form id="login-form" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" required>
                <button type="button" id="toggle-password">Show Password</button>

                <button type="submit">Login</button>
            </form>
            <p>Create an account? <a href="register.php">Register here</a></p>
        </section>
    </div>

    <footer>
        <p>© 2025 CarRental. All rights reserved.</p>

        <div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","languages":["en","fr","it","es"],"wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/fd.js" defer></script>

    </footer>
        
    <script src="./assets/js/login.js"></script>
   
</body>
</html>