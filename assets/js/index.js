
    document.addEventListener("DOMContentLoaded", function() {
        // Automatic Slideshow
        const slides = document.querySelectorAll('.hero-slide');
        let currentSlide = 0;

        function showSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length; // Loop back to the start
            slides[currentSlide].classList.add('active');
        }

        // Start the slideshow
        setInterval(showSlide, 5000); // Change slide every 5 seconds

        // Search Functionality
        const searchButton = document.querySelector('#search-button');
        const searchInput = document.querySelector('#search-input');
        const carList = document.querySelectorAll('.car-item');

        searchButton.addEventListener('click', function() {
            const searchTerm = searchInput.value.toLowerCase();
            carList.forEach(car => {
                const carName = car.querySelector('.car-name').textContent.toLowerCase();
                if (carName.includes(searchTerm)) {
                    car.style.display = 'block'; // Show matching car
                } else {
                    car.style.display = 'none'; // Hide non-matching car
                }
            });
        });
    });