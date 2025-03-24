
document.addEventListener("DOMContentLoaded", function() {
    // Function to filter cars
    const filterCars = () => {
        const carTypeSelect = document.querySelector('#car-type');
        const selectedType = carTypeSelect.value;
        const carItems = document.querySelectorAll('.car-item');

        carItems.forEach(item => {
            const carType = item.getAttribute('data-type');
            if (selectedType === 'All' || selectedType === carType) {
                item.style.display = 'block'; // Show item
            } else {
                item.style.display = 'none'; // Hide item
            }
        });
    };

    // Function to show booking confirmation
    // const bookCar = (event) => {
    //     const carName = event.target.closest('.car-item').querySelector('h3').textContent;
    //     alert(`You've booked the ${carName} successfully!`);
    // };

    // Event listener for car type filter
    const carTypeSelect = document.querySelector('#car-type');
    if (carTypeSelect) {
        carTypeSelect.addEventListener('change', filterCars);
    }

    // Event listeners for booking buttons
    // const bookButtons = document.querySelectorAll('.book-button');
    // bookButtons.forEach(button => {
    //     button.addEventListener('click', bookCar);
    // });
});