
document.addEventListener("DOMContentLoaded", function() {
    // Function to toggle password visibility
    const togglePasswordVisibility = (event) => {
        const passwordInput = document.querySelector('#password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        event.target.textContent = type === 'password' ? 'Show Password' : 'Hide Password';
    };

    // Function to validate the login form
    const loginForm = document.querySelector('#login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            const username = document.querySelector('#username').value;
            const password = document.querySelector('#password').value;

            // Simple validation
            if (!username || !password) {
                alert("Please fill in all fields.");
                event.preventDefault(); // Prevent form submission
                return;
            }

            // alert("Login successful!");
        });
    }

    // Add event listener for password visibility toggle
    const toggleButton = document.querySelector('#toggle-password');
    if (toggleButton) {
        toggleButton.addEventListener('click', togglePasswordVisibility);
    }
});