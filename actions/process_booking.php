<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the form data
    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $car = htmlspecialchars(trim($_POST['car']));
    $pickup_date = htmlspecialchars(trim($_POST['pickup_date']));
    $dropoff_date = htmlspecialchars(trim($_POST['dropoff_date']));
    $payment_method = htmlspecialchars(trim($_POST['payment_method']));
    $payment_amount = htmlspecialchars(trim($_POST['payment_amount']));
    $additional_notes = htmlspecialchars(trim($_POST['additional_notes']));

    // Validate the data (basic validation)
    if (empty($full_name) || empty($email) || empty($phone) || empty($car) || empty($pickup_date) || empty($dropoff_date) || empty($payment_method) || empty($payment_amount)) {
        echo "All fields are required.";
        exit;
    }

    // Here you can proceed to store the data in the database
    // For demonstration, we'll just display the collected information
    echo "<h2>Booking Information Received:</h2>";
    echo "Full Name: " . $full_name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "Car: " . $car . "<br>";
    echo "Pick-up Date: " . $pickup_date . "<br>";
    echo "Drop-off Date: " . $dropoff_date . "<br>";
    echo "Payment Method: " . $payment_method . "<br>";
    echo "Payment Amount: " . $payment_amount . " USD<br>";
    echo "Additional Notes: " . nl2br($additional_notes) . "<br>";

    // Redirect to a success page after processing
    // header("Location: success.php");
    // exit;

} else {
    echo "Invalid request method.";
}
?>