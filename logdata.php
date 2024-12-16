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
    $firstName = $_POST['first_name']; // Get the first name from the form
    $date = $_POST['date'];
    $timeStarted = $_POST['time_started'];
    $timeEnded = $_POST['time_ended'];
    $activity = $_POST['activity'];

    // Retrieve the user's Email and UserID based on the FirstName
    $stmt = $conn->prepare("SELECT UserID, Email FROM Register WHERE FirstName = ?");
    $stmt->bind_param("s", $firstName);
    $stmt->execute();
    $stmt->bind_result($userID, $email);
    $stmt->fetch();
    $stmt->close();

    // Check if the user was found
    if (!$userID || !$email) {
        echo "Error: No user found with that first name.";
        $conn->close();
        exit();
    }

    // Prepare the insert statement for logdata
    $stmt = $conn->prepare("INSERT INTO logdata (UserID, FirstName, Email, Date, TimeStarted, TimeEnded, Activity) VALUES (?, ?, ?, ?, ?, ?, ?)");
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