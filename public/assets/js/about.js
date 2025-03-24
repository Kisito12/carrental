
document.addEventListener("DOMContentLoaded", function() {
    // Smooth scrolling to sections
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Toggle additional information in "Why Choose Us?"
    const whyChooseUsItems = document.querySelectorAll('.why-choose-us li');
    whyChooseUsItems.forEach(item => {
        item.addEventListener('click', function() {
            const additionalInfo = this.querySelector('.additional-info');
            if (additionalInfo) {
                additionalInfo.classList.toggle('visible');
                additionalInfo.style.display = additionalInfo.style.display === 'none' ? 'block' : 'none';
            }
        });
    });
});