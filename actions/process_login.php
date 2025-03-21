<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the form data
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Validate the data (basic validation)
    if (empty($username) || empty($password)) {
        echo "Both fields are required.";
        exit;
    }

    // Here you can proceed to check the credentials against your database
    // For demonstration, we'll just display the collected information
    echo "<h2>Login Information Received:</h2>";
    echo "Username: " . $username . "<br>";
    echo "Password: (hidden for security purposes)<br>";

    // If you want to redirect to a success page after processing
    // header("Location: success.php");
    // exit;

} else {
    echo "Invalid request method.";
}
?>