
        document.addEventListener("DOMContentLoaded", function() {
            // Function to display location details
            const locationDetails = {
                "New York": "Explore the bustling streets of New York City, known for its iconic skyline and vibrant culture.",
                "Paris": "Experience the romance of Paris, the City of Light, famous for the Eiffel Tower and art museums."
            };

            // Event listener for major locations
            const majorLocationItems = document.querySelectorAll('.major-location-item');
            majorLocationItems.forEach(item => {
                item.addEventListener('click', function() {
                    const cityName = this.textContent;
                    const details = locationDetails[cityName] || "Details not available.";
                    alert(details); // Display location details in an alert
                });
            });
        });