document.addEventListener("DOMContentLoaded", function() {
    // Function to handle search button click
    const searchButton = document.querySelector('.search-button');
    if (searchButton) {
        searchButton.addEventListener('click', function() {
            alert('Searching for available cars...');
            // Here you can add logic to perform the search
        });
    }

    // Function to handle car card clicks
    const carCards = document.querySelectorAll('.car-card');
    carCards.forEach(card => {
        card.addEventListener('click', function() {
            const carName = card.querySelector('h3').innerText;
            alert(`You selected: ${carName}`);
            // Here you can navigate to the car details page or show more info
        });
    });

    // Function to handle login and registration
    const loginButton = document.querySelector('.login-button');
    const registerButton = document.querySelector('.register-button');

    if (loginButton) {
        loginButton.addEventListener('click', function() {
            alert('Redirecting to login page...');
            // Logic for redirection can be added here
        });
    }

    if (registerButton) {
        registerButton.addEventListener('click', function() {
            alert('Redirecting to registration page...');
            // Logic for redirection can be added here
        });
    }

    // Function to toggle 24/7 support information
    const supportButton = document.querySelector('.support-button');
    if (supportButton) {
        supportButton.addEventListener('click', function() {
            const supportInfo = document.querySelector('.support-info');
            if (supportInfo) {
                supportInfo.classList.toggle('hidden');
                supportInfo.style.display = supportInfo.style.display === 'none' ? 'block' : 'none';
            }
        });
    }
});