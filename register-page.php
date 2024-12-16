<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <style>
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
    <form action="register.php" method="POST">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email:</b></label><br>
            <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

            <label for="psw"><b>Password:</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br>

            <label for="psw-repeat"><b>Repeat Password:</b></label><br>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br>

            <label for="first-name"><b>First Name:</b></label><br>
            <input type="text" placeholder="First Name" name="first-name" id="first-name" required><br>

            <label for="last-name"><b>Last Name:</b></label><br>
            <input type="text" placeholder="Last Name" name="last-name" id="last-name" required><br>

            <label for="phone-number"><b>Phone Number:</b></label><br>
            <input type="text" placeholder="Phone Number" name="phone-number" id="phone-number" required><br>

            <hr>
            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="login.html">Sign in</a>.</p>
        </div>
    </form>
</body>
</html>