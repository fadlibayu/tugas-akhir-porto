<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $message = $_POST['message'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $address = $_POST['address'] ?? null;

    $firstName = $_POST['firstName'] ?? null;
    $lastName = $_POST['lastName'] ?? null;
    $emailNewsletter = $_POST['emailNewsletter'] ?? null;
    $preferences = $_POST['preferences'] ?? null;
    $frequency = $_POST['frequency'] ?? null;

    // Validate the form data
    if ($name && $email && $message) {
        echo "Contact form submitted successfully. <br>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Message: $message <br>";
        echo "Phone: $phone <br>";
        echo "Address: $address <br>";
    } else if ($firstName && $lastName && $emailNewsletter) {
        echo "Newsletter form submitted successfully. <br>";
        echo "First Name: $firstName <br>";
        echo "Last Name: $lastName <br>";
        echo "Email: $emailNewsletter <br>";
        echo "Preferences: $preferences <br>";
        echo "Frequency: $frequency <br>";
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
