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
        <img class="logo" src="{{ asset('assets/images/cars/LOGO.jpg') }}" alt="logo">
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="car.php">Cars</a>
            <a href="about.php">About</a>
            <a href="contact_us.php">Contact us</a>
            <a href="location.php">Location</a>
            <a href="{{ route('login') }}" class="login-button">Login</a>
        </nav>
    </header>

    <div class="hero-section">
        @foreach (range(25, 49) as $num)
            <div class="hero-slide" style="background-image: url('{{ asset("assets/images/cars/$num.jpg") }}');"></div>
        @endforeach
        @foreach (range(1, 9) as $num)
            <div class="hero-slide" style="background-image: url('{{ asset("assets/images/cars/00$num.jpg") }}');"></div>
        @endforeach
        @foreach (range(10, 10) as $num)
            <div class="hero-slide" style="background-image: url('{{ asset("assets/images/cars/$num.jpg") }}');"></div>
        @endforeach
        <div class="hero-content">
            <h2>Your Fast & Reliable Car Rental Service</h2>
            <p>Find the best cars at the best prices, anytime, anywhere.</p>
        </div>
    </div>
    

    <div class="container">
        <form method="GET" action="{{ route('home') }}">
            <input type="text" name="search" id="search-input" placeholder="Search for cars..." value="{{ request('search') }}">
            <button type="submit" id="search-button">Search</button>
        </form>        

        <div class="car-listings">
            @foreach ($cars as $car)
                <div class="car-item" data-type="TOYOTA">
                    <img class="car-item-image" src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}">
                    <h3>{{ $car->name }}</h3>
                    <p>Price: {{ number_format($car->price_per_day, 2) }} FCFA/day</p>
                    <p>Brand: {{ $car->brand }} - {{ $car->year }}</p>
                    <a class="book-button" href="{{route('book.index', $car->id)}}">Book Now</a>
                </div>
            @endforeach

        </div>
    </div>

    <footer>
        <p>© 2025 CarRental. All rights reserved.</p>

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
    <script src="{{ asset('assets/js/index.js') }}"></script>

</body>

</html>
