<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental System</title>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
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

<div class="hero-section">
    <div class="hero-slide active" style="background-image: url('./assets/image/25.jpg');"></div>
    <div class="hero-slide" style="background-image: url('/assets/image/26.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/30.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/35.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/36.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/37.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/38.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/39.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/40.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/41.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/42.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/43.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/44.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/45.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/46.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/47.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/48.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/49.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/001.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/002.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/003.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/004.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/005.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/006.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/007.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/008.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/009.jpg');"></div>
    <div class="hero-slide" style="background-image: url('./assets/image/10.jpg');"></div>
    <div class="hero-content">
        <h2>Your Fast & Reliable Car Rental Service</h2>
        <p>Find the best cars at the best prices, anytime, anywhere.</p>
    </div>
</div>

<div class="container">
    <div>
        <input type="text" id="search-input" placeholder="Search for cars...">
        <button id="search-button">Search</button>
    </div>
    
    <div class="car-listings">
            <div class="car-item" data-type="TOYOTA">
            <img class="car-item-image" src="./assets/image/0010.jpg" alt="TOYOTA YARIS">
                <h3>TOYOTA YARIS</h3>
                <p>Price: $190/day</p>
                <p>Seating: 4</p>
                <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="SUV">
            <img class="car-item-image" src="./assets/image/009.jpg" alt="FAMILY SUV">
                <h3>Family SUV</h3>
                <p>Price: $170/day</p>
                <p>Seating: 6</p>
                <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="NISSAN">
            <img class="car-item-image" src="./assets/image/008.jpg" alt="NISSAN">
                <h3>NISSAN</h3>
                <p>Price: $150/day</p>
                <p>Seating: 2</p>
               <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="LAND CRUISER">
            <img class="car-item-image" src="./assets/image/007.jpg" alt="LAND CRUISER">
                <h3>LAND CRUISER</h3>
                <p>Price: $180/day</p>
                <p>Seating: 4</p>
                <a class="book-button" href="booking.php">Book Now</a>
            </div>
        <div class="car-item">
            <div class="car-name">NISSAN </div>
            <div class="car-price">$210/day</div>
        </div>
        <div class="car-item">
            <div class="car-name">PRADO</div>
            <div class="car-price">$400/day</div>
        </div>
        <div class="car-item">
            <div class="car-name">MERCEDES</div>
            <div class="car-price">$550/day</div>
        </div>
        <div class="car-item">
            <div class="car-name">BMW</div>
            <div class="car-price">$300/day</div>
        </div>
    </div>
</div>

<footer>
    <p>© 2025 CarRental. All rights reserved.</p>

    <div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","languages":["en","fr","it","es"],"wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/fd.js" defer></script>

</footer>
    <script src="./assets/js/index.js"></script>
    
</body>
</html>