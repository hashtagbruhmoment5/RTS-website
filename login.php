<?php
$servername = "localhost";
/*
My computer would not let me download any apps because I forgot the admin password. 
So I could not get an sql database set up. 
This PHP below is just an example of how the code will probably look like.
*/
$username = "root"; // will be replaced with my actual username if I get it set up
$password = ""; // will be replaced with my actual password if I get it set up
$dbname = "rtswebsite"; // will be replaced with my actual database name if I get it set up

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM Register WHERE Email = ? AND Password = ?");
    $stmt->bind_param("ss", $email, $password);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Login successful, redirect to log-hrs.php
        header("Location: log-hrs.php");
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "Invalid email or password.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>