<?php

if (isset($_POST['submit'])) {
    // grab and sanitize values (basic example)
    $fullname    = htmlspecialchars(trim($_POST['fullname'] ?? ''));
    $date        = htmlspecialchars(trim($_POST['dob'] ?? ''));
    $gender      = htmlspecialchars(trim($_POST['gender'] ?? ''));
    $nationality = htmlspecialchars(trim($_POST['nationality'] ?? ''));
    $email       = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone       = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $address     = htmlspecialchars(trim($_POST['address'] ?? ''));
    $service     = htmlspecialchars(trim($_POST['service'] ?? ''));

    echo "Full Name: " . $fullname . "<br>";
    echo "Date of Birth: " . $date . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Nationality: " . $nationality . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Service: " . $service . "<br>";
} else {
    // no form submission, optionally redirect or show a message
    echo "<p>No data submitted. Please go back and fill out the form.</p>";
}

?>

