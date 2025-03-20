
        document.addEventListener("DOMContentLoaded", function() {
            // Function to toggle password visibility
            const togglePasswordVisibility = (event) => {
                const passwordInput = document.querySelector('#password');
                const confirmPasswordInput = document.querySelector('#confirm-password');
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                confirmPasswordInput.setAttribute('type', type);
                event.target.textContent = type === 'password' ? 'Show Passwords' : 'Hide Passwords';
            };

            // Function to validate the registration form
            const registrationForm = document.querySelector('#registration-form');
            if (registrationForm) {
                registrationForm.addEventListener('submit', function(event) {
                    const username = document.querySelector('#username').value;
                    const email = document.querySelector('#email').value;
                    const password = document.querySelector('#password').value;
                    const confirmPassword = document.querySelector('#confirm-password').value;

                    // Simple validation
                    if (!username || !email || !password || !confirmPassword) {
                        alert("Please fill in all fields.");
                        event.preventDefault();
                        return;
                    }

                    if (password !== confirmPassword) {
                        alert("Passwords do not match.");
                        event.preventDefault();
                        return;
                    }

                    if (password.length < 6) {
                        alert("Password must be at least 6 characters long.");
                        event.preventDefault();
                        return;
                    }

                    alert("Registration successful!");
                });
            }

            // Add event listener for password visibility toggle
            const toggleButton = document.querySelector('#toggle-password');
            if (toggleButton) {
                toggleButton.addEventListener('click', togglePasswordVisibility);
            }
        });