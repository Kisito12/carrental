<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Car | Car Rental</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/booking.css') }}">
</head>

<body>
    <header>
        <img class="items-center justify-center w-16" src="{{ asset('assets/images/cars/LOGO.jpg') }}" alt="logo">
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="car.php">Cars</a>
x            <a href="about.php">About</a>
            <a href="contact_us.php">Contact us</a>
            <a href="location.php">Location</a>
            <a href="{{ route('login') }}" class="login-button">Login</a>
        </nav>
    </header>

    <div class="container">
        {{ $slot }}
    </div>

    <footer>
        <p>© 2025 CarRental. All rights reserved.</p>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>

        <div class="gtranslate_wrapper"></div>
        <script>
            window.gtranslateSettings = {
                "default_language": "en",
                "languages": ["en", "fr", "it", "es"],
                "wrapper_selector": ".gtranslate_wrapper"
            }
        </script>
        <script src="https://cdn.gtranslate.net/widgets/latest/fd.js" defer></script>

    </footer>

    <script src="{{ asset('assets/js/booking.js') }}"></script>

</body>

</html>
