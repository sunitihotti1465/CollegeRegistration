<?php
// Include database configuration file
$servername = "localhost"; // typically localhost
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "college_admission"; // name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$perm_street = $_POST['perm-street'];
$perm_city = $_POST['perm-city'];
$perm_country = $_POST['perm-country'];
$perm_zip = $_POST['perm-zip'];
$curr_street = $_POST['curr-street'];
$curr_city = $_POST['curr-city'];
$curr_country = $_POST['curr-country'];
$curr_zip = $_POST['curr-zip'];
$emergency_name = $_POST['emergency-name'];
$emergency_phone = $_POST['emergency-phone'];
$emergency_address = $_POST['emergency-address'];
$emergency_email = $_POST['emergency-email'];
$emergency_relationship = $_POST['emergency-relationship'];
$high_school_name = $_POST['high-school-name'];
$graduation_date = $_POST['graduation-date'];
$school_city = $_POST['school-city'];
$school_state = $_POST['school-state'];
$school_country = $_POST['school-country'];
$payment_method = $_POST['payment-method'];

// Handle file upload

// Insert data into the database
$sql = "INSERT INTO admissions (first_name, last_name, birthdate, gender, phone, email, perm_street, perm_city, perm_country, perm_zip, curr_street, curr_city, curr_country, curr_zip, emergency_name, emergency_phone, emergency_address, emergency_email, emergency_relationship, high_school_name, graduation_date, school_city, school_state, school_country, payment_method) 
VALUES ('$first_name', '$last_name', '$birthdate', '$gender', '$phone', '$email', '$perm_street', '$perm_city', '$perm_country', '$perm_zip', '$curr_street', '$curr_city', '$curr_country', '$curr_zip', '$emergency_name', '$emergency_phone', '$emergency_address', '$emergency_email', '$emergency_relationship', '$high_school_name', '$graduation_date', '$school_city', '$school_state', '$school_country', '$payment_method')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
