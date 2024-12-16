<?php
session_start(); // Start the session

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
    // Check if email and password are set in the POST request
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM Register WHERE Email = ? AND Password = ?");
    $stmt->bind_param("ss", $email, $password);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Login successful, set session variable
        $_SESSION['user_email'] = $email; // Set the session variable
        header("Location: log-hrs.php"); // Redirect to log-hrs.php
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "Invalid email or password.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>