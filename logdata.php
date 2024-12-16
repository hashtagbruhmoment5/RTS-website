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

// Check if the user is logged in by verifying the session
if (!isset($_SESSION['user_email'])) {
    echo "Error: You must be logged in to log volunteer hours.";
    echo '<br><a href="login-page.php">Login</a>'; // Provide a link to the login page
    exit(); // Terminate the script
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $timeStarted = $_POST['time_started'];
    $timeEnded = $_POST['time_ended'];
    $activity = $_POST['activity'];

    // Retrieve the user's Email, UserID, and FirstName based on the session email
    $email = $_SESSION['user_email']; // Get the email from the session
    $stmt = $conn->prepare("SELECT UserID, FirstName FROM Register WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($userID, $firstName); // Bind both UserID and FirstName
    $stmt->fetch();
    $stmt->close();

    // Check if the user was found
    if (!$userID) {
        echo "Error: No user found with that email.";
        $conn->close();
        exit();
    }

    // Prepare the insert statement for logdata
    $stmt = $conn->prepare("INSERT INTO logdata (User ID, FirstName, Email, Date, TimeStarted, TimeEnded, Activity) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssss", $userID, $firstName, $email, $date, $timeStarted, $timeEnded, $activity);

    if ($stmt->execute()) {
        echo "Volunteer hours logged successfully. <br>";
        echo '<a href="log-hrs.php">Return to Log Hours</a>'; // Link to go back to log-hrs.php
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>