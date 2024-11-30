<?php
$servername = "localhost";
/*
My computer would not let me download any apps because I forgot the admin password. 
So I could not get an sql database set up. 
This PHP below is just an example of how the code will probably look like.
*/
$username = "example_username";//will be replaced with my actual username if I get it set up
$password = "example_password";//will be replaced with my actual password if I get it set up
$dbname = "example_database";//will be replaced with my actual database name if I get it set up

$conn = new mysqli($servername, $username, $password, $dbname);

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

    $stmt = $conn->prepare("INSERT INTO Register (FirstName, LastName, Email, Password, Phone) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $firstName, $lastName, $email, $password, $phone);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>