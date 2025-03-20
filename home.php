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
        <h1>CarRental</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="car.php">Cars</a>
            <a href="booking.php">Bookings</a>
            <a href="about.php">About</a>
            <a href="contact us.php">Contact us</a>
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

                <label for="amount-display">Amount (USD):</label>
                <div id="amount-display">$0</div>

                <label for="payment-method">Select Payment Method:</label>
                <select id="payment-method" onchange="showPaymentDetails()">
                    <option value="">--Select Payment Method--</option>
                    <option value="Mobile Money">Mobile Money</option>
                    <option value="Orange Money">Orange Money</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="Cryptocurrency">Cryptocurrency</option>
                </select>

                <div id="payment-details" style="display:none;">
                    <label for="payment-info">Payment Information:</label>
                    <input type="text" id="payment-info" placeholder="Enter payment details" required>

                    <label for="payment-amount">Payment Amount (USD):</label>
                    <input type="number" id="payment-amount" required>
                </div>

                <div id="crypto-details" style="display:none;">
                    <label for="crypto-type">Cryptocurrency Type:</label>
                    <select id="crypto-type">
                        <option value="Bitcoin">Bitcoin (BTC)</option>
                        <option value="Ethereum">Ethereum (ETH)</option>
                        <option value="USDT">Tether (USDT)</option>
                    </select>
                    <label for="crypto-wallet">Wallet Address:</label>
                    <input type="text" id="crypto-wallet" placeholder="Enter your wallet address" required>
                    <label for="crypto-amount">Cryptocurrency Amount:</label>
                    <input type="number" id="crypto-amount" placeholder="Enter amount in cryptocurrency" required>
                    <label for="crypto-exchange-rate">Exchange Rate (1 Cryptocurrency to USD):</label>
                    <input type="number" id="crypto-exchange-rate" placeholder="Enter exchange rate" required>
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
    </footer>

    <script src="./assets/js/booking.js"></script>
    <script>
        function showPaymentDetails() {
            const paymentMethod = document.getElementById("payment-method").value;
            const paymentDetails = document.getElementById("payment-details");
            const cryptoDetails = document.getElementById("crypto-details");

            if (paymentMethod === "Cryptocurrency") {
                paymentDetails.style.display = "block";
                cryptoDetails.style.display = "block";
            } else if (paymentMethod) {
                paymentDetails.style.display = "block";
                cryptoDetails.style.display = "none";
            } else {
                paymentDetails.style.display = "none";
                cryptoDetails.style.display = "none";
            }
        }

        function validatePayment() {
            const paymentMethod = document.getElementById("payment-method").value;
            const paymentInfo = document.getElementById("payment-info").value;
            const paymentAmount = document.getElementById("payment-amount").value;
            const cryptoWallet = document.getElementById("crypto-wallet").value;
            const cryptoAmount = document.getElementById("crypto-amount").value;
            const cryptoExchangeRate = document.getElementById("crypto-exchange-rate").value;

            if (paymentMethod === "Mobile Money" && !/^(\+33|0)[67]\d{8}$/.test(paymentInfo)) {
                alert("Invalid MTN number. Please enter a valid MTN number.");
                return false;
            }

            if (paymentMethod === "Orange Money" && !/^(\+33|0)[67]\d{8}$/.test(paymentInfo)) {
                alert("Invalid Orange number. Please enter a valid Orange number.");
                return false;
            }

            if (paymentMethod === "Bank Transfer" && paymentInfo.trim() === "") {
                alert("Please enter your bank's name and number.");
                return false;
            }

            if (paymentMethod === "Cryptocurrency") {
                if (cryptoWallet.trim() === "" || paymentInfo.trim() === "" || cryptoAmount <= 0 || cryptoExchangeRate <= 0) {
                    alert("Please enter your cryptocurrency wallet address, payment details, a valid amount, and a valid exchange rate.");
                    return false;
                }
                if (isNaN(cryptoExchangeRate) || cryptoExchangeRate <= 0) {
                    alert("Invalid exchange rate. Please enter a positive number.");
                    return false;
                }
            }

            if (paymentAmount <= 0) {
                alert("Please enter a valid payment amount.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>