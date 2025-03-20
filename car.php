</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Cars | Car Rental</title>
    <link rel="stylesheet" href="./assets/css/car.css">
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
        <div class="filter-section">
            <h2>Filter Cars</h2>
            <label for="car-type">Car Type:</label>
            <select id="car-type">
                <option value="All">All</option>
                <option value="PICK-UP">PICK-UP</option>
                <option value="SUV">SUV</option>
                <option value="BMW">BMW</option>
                <option value="TOYOTA">TOYOTA</option>
                <option value="HATCHBACK">HATCHBACK</option>
                <option value="NISSAN">NISSAN</option>
                <option value="LAND CRUISER">LAND CRUISER</option>
                <option value="ROYAN SUPER">ROYAN SUPER</option>
                <option value="LAMBOGHINI">LAMBOGHINI</option>
                <option value="SPORT CAR">SPORT CAR</option>
                <option value="MERCEDES BENZ">MERCEDES BENZ</option>
                <option value="MIN-VAN">MIN-VAN</option>
                <option value="HONDA">HONDA</option>
                <option value="SPORT CAR">SPORT CAR</option>
                <!-- Add other car types here -->
            </select>
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
            <div class="car-item" data-type="SPORT CAR">
            <img class="car-item-image" src="./assets/image/006.jpg" alt="SPORT CAR">
                <h3>SPORT CAR</h3>
                <p>Price: $200/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="LAMBOGHINI">
            <img class="car-item-image" src="./assets/image/005.jpg" alt="LAMBOGHINI">
                <h3>LAMBOGHINI</h3>
                <p>Price: $600/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="ROYAN SUPER">
            <img class="car-item-image" src="./assets/image/004.jpg" alt="ROYAN SUPER">
                <h3>ROYAN SUPER</h3>
                <p>Price: $400/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="LUXURY">
            <img class="car-item-image" src="./assets/image/003.jpg" alt="LUXURY">
                <h3>LUXURY</h3>
                <p>Price: $130/day</p>
                <p>Seating: 4</p>
                <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="MIN-VAN">
            <img class="car-item-image" src="./assets/image/002.jpg" alt="MIN-VAN">
                <h3>MIN-VAN</h3>
                <p>Price: $110/day</p>
                <p>Seating: 8</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="HONDA">
            <img class="car-item-image" src="./assets/image/001.jpg" alt="HONDA">
                <h3>HONDA</h3>
                <p>Price: $100/day</p>
                <p>Seating: 4</p>
                <a class="book-button" href="booking.php">Book Now</a>            </div>
            <div class="car-item" data-type="TOYOTA">
            <img class="car-item-image" src="./assets/image/9.jpg" alt="TOYOTA INNOVA">
                <h3>TOYOTA INNOVA</h3>
                <p>Price: $100/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="PICK-UP">
            <img class="car-item-image" src="./assets/image/7.jpg" alt="PICK-UP">
                <h3>PICK-UP</h3>
                <p>Price: $300/day</p>
                <p>Seating: 4</p>
                <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="MERCEDES BENZ">
            <img class="car-item-image" src="./assets/image/6.jpg" alt="MERCEDES BENZ">
                <h3>MERCEDES BENZ</h3>
                <p>Price: $100/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="COUPE CAR">
            <img class="car-item-image" src="./assets/image/5.jpg" alt="COUPE CAR">
                <h3>COUPE CAR</h3>
                <p>Price: $100/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="SUV">
            <img class="car-item-image" src="./assets/image/4.jpg" alt="MUV/SUV">
                <h3>MUV/SUV</h3>
                <p>Price: $90/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="HATCHBACK">
            <img class="car-item-image" src="./assets/image/2.jpg" alt="HATCHBACK">
                <h3>HATCHBACK</h3>
                <p>Price: $90/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="BMW">
            <img class="car-item-image" src="./assets/image/1.jpg" alt="BMW">
                <h3>BMW</h3>
                <p>Price: $100/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
            <div class="car-item" data-type="JEEP">
            <img class="car-item-image" src="./assets/image/8.jpg" alt="JEEP">
                <h3>JEEP</h3>
                <p>Price: $80/day</p>
                <p>Seating: 4</p>
                 <a class="book-button" href="booking.php">Book Now</a>
            </div>
        </div>
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
    <script src="./assets/js/car.js"></script>
</body>
</html>