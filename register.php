<?php
$servername = "localhost";
$username = "root";
$password = "psw";
$dbname = "rtswebsite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $phone = $_POST['phone-number'];

    if ($_POST['psw'] !== $_POST['psw-repeat']) {
        die("Passwords do not match.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Register (FirstName, LastName, Email, Password, Phone) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $firstName, $lastName, $email, $password, $phone);

    if ($stmt->execute()) {
        // Registration successful, redirect to login-page.php
        header("Location: login-page.php");
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>