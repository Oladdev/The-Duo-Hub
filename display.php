<?php

if(isset($_POST['submit']))
$fullname = $_POST['fullname'];
$date = $_POST['dob'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$service= $_POST['service'];

echo "Full Name: " . $fullname . "<br>";
echo "Date of Birth: " . $date . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Nationality: " . $nationality . "<br>";
echo "Email: " . $email . "<br>";
echo "Phone: " . $phone . "<br>";
echo "Address: " . $address . "<br>";
echo "Service: " . $service . "<br>";

?>
?>