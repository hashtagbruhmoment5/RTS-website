<?php include('logdata.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Hours Log</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        body {
            background-color: #ffffff;
        }

        .banner {
            display: flex;
            align-items: ce<?php include('logdata.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Hours Log</title>
    <link rel="icon" href="thiruvalluvar.png" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        body {
            background-color: #ffffff;
        }

        .banner {
            display: flex;
            align-items: center;
            background-color: #ff0000;
            color: #ffffff;
            padding: 20px;
        }

        img {
            height: 100px;
            width: auto;
            margin-right: 20px;
        }
    </style>
    
</head>
<body>
    <div class="banner">
        <img src="thiruvalluvar.png" alt="Thiruvalluvar">
        <h1>Redmond Tamil School</h1>
      </div>
<h1></h1>
<h2>Volunteer Hours Log</h2>
<form action="logdata.php" method="POST">
    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first_name" required>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="time-started">Time Started:</label>
    <input type="time" id="time-started" name="time_started" required>

    <label for="time-ended">Time Ended:</label>
    <input type="time" id="time-ended" name="time_ended" required>

    <label for="activity">Activity(don't add commas):</label>
    <textarea id="activity" name="activity" rows="4" required></textarea>

    <button type="submit">Log Hours</button>
</form>

</body>
</html>nter;
            background-color: #ff0000;
            color: #ffffff;
            padding: 20px;
        }

        img {
            height: 100px;
            width: auto;
            margin-right: 20px;
        }
    </style>
    
</head>
<body>
    <div class="banner">
        <img src="thiruvalluvar.png" alt="Thiruvalluvar">
        <h1>Redmond Tamil School</h1>
      </div>
<h1></h1>
<h2>Volunteer Hours Log</h2>
<form action="logdata.php" method="POST">
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="time-started">Time Started:</label>
    <input type="time" id="time-started" name="time_started" required>

    <label for="time-ended">Time Ended:</label>
    <input type="time" id="time-ended" name="time_ended" required>

    <label for="activity">Activity:</label>
    <textarea id="activity" name="activity" rows="4" required></textarea>

    <button type="submit">Log Hours</button>
</form>

</body>
</html>