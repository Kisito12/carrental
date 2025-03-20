<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Car | Car Rental</title>
    <link rel="stylesheet" href="./assets/css/booking.css">
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
            <h2>Book Your Car</h2>
            <p>Complete the form below to confirm your booking.</p>
            <form id="booking-form" onsubmit="return validatePayment()">
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" required>

                <label for="car-select">Select Car:</label>
                <select id="car-select">
                    <option value="Luxury Sedan">Luxury Sedan - $50/day</option>
                    <option value="Family SUV">Family SUV - $70/day</option>
                    <option value="Hatchback">Hatchback - $250/day</option>
                    <option value="Convertible">Convertible - $130/day</option>
                    <option value="Sports Car">Sports Car - $150/day</option>
                    <option value="Pickup Truck">Pickup Truck - $150/day</option>
                    <option value="Van">Van - $150/day</option>
                    <option value="Luxury">Luxury - $250/day</option>
                    <option value="NISSAN">NISSAN - $210/day</option>
                    <option value="PRADO">PRADO - $400/day</option>
                    <option value="TOYOTA">TOYOTA - $100/day</option>
                    <option value="MIN-VAN">MIN-VAN - $110/day</option>
                    <option value="HONDA">HONDA - $100/day</option>
                    <option value="MERCEDES">MERCEDES - $550/day</option>
                    <option value="Sedan">Sedan - $100/day</option>
                    <option value="TOYOTA-HONDA">TOYOTA-HONDA - $100/day</option>
                    <option value="BMW">BMW - $300/day</option>
                    <option value="HYUNDAI">HYUNDAI - $90/day</option>
                    <option value="PRADO-HYUNDAI">PRADO-HYUNDAI - $80/day</option>
                    <option value="JEEP">JEEP - $90/day</option>
                </select>

                <label for="pickup-date">Pick-up Date:</label>
                <input type="date" id="pickup-date" required>

                <label for="dropoff-date">Drop-off Date:</label>
                <input type="date" id="dropoff-date" required>


                <label for="payment-method">Select Payment Method:</label>
                <select id="payment-method" onchange="showPaymentDetails()">
                    <option value="">--Select Payment Method--</option>
                    <option value="Mobile Money">Mobile Money</option>
                    <option value="Orange Money">Orange Money</option>
                </select>

                <div id="payment-details" style="display:none;">
                    <label for="payment-info">Payment Information:</label>
                    <input type="text" id="payment-info" placeholder="Enter payment details" required>

                    <label for="payment-amount">Payment Amount (USD):</label>
                    <input type="number" id="payment-amount" required>
                </div>

                <label for="notes">Additional Notes (Optional):</label>
                <textarea id="notes" rows="4"></textarea>

                <button type="submit">Confirm Booking</button>
            </form>
        </section>

        <section class="faq">
            <h2>Booking FAQ</h2>
            <h3>What documents do I need?</h3>
            <div class="answer hidden">You need a valid driver’s license and a payment method.</div>
            <h3>Can I cancel my booking?</h3>
            <div class="answer hidden">Yes, cancellations are free up to 24 hours before pick-up.</div>
            <h3>Is insurance included?</h3>
            <div class="answer hidden">Basic insurance is included, but you can add extra coverage.</div>
            <h3>How does Rock hiring work?</h3>
            <div class="answer hidden">We use the same technology that powers our award-winning flight search to scan the web for car hire deals from most major providers. So you can see every price in one place, instead of having to search and compare across a dozen different car hire websites. Currently, you'll be able to find the lowest price for car hire in 18,000 pick-up locations globally right here in our search.</div>
        </section>
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

    <script src="./assets/js/booking.js"></script>
   
</body>
</html>