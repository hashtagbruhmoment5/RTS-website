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
    $date = $_POST['date'];
    $timeStarted = $_POST['time_started'];
    $timeEnded = $_POST['time_ended'];
    $activity = $_POST['activity'];

    $stmt = $conn->prepare("INSERT INTO VolunteerHours (Date, TimeStarted, TimeEnded, Activity) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $date, $timeStarted, $timeEnded, $activity);

    if ($stmt->execute()) {
        echo "Volunteer hours logged successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>