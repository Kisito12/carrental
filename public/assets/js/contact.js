
document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    const successMessage = document.querySelector('.success-message');
    const errorMessage = document.querySelector('.error-message');

    // Clear messages on input focus
    form.addEventListener('focusin', function() {
        successMessage.style.display = 'none';
        errorMessage.style.display = 'none';
    });

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const name = form.querySelector('input[name="name"]').value.trim();
        const email = form.querySelector('input[name="email"]').value.trim();
        const message = form.querySelector('textarea[name="message"]').value.trim();

        // Simple validation
        if (name === "" || email === "" || message === "") {
            errorMessage.textContent = "All fields are required!";
            errorMessage.style.display = 'block';
            return;
        }

        // Simulate successful form submission
        successMessage.textContent = "Your message has been sent successfully!";
        successMessage.style.display = 'block';

        // Clear the form
        form.reset();

        // Scroll to the top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});