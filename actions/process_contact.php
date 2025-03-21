<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate the data (basic validation)
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // You can now proceed to store the data in the database
    // For example, you can use PDO or MySQLi to insert the data

    // Example: Display the collected information
    echo "<h2>Contact Information Received:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . nl2br($message) . "<br>";

    // Redirect to a success page or display a success message
    // header("Location: success.php");
    // exit;

} else {
    echo "Invalid request method.";
}
?>