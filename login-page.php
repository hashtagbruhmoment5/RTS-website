<?php include('login.php') ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="icon" href="thiruvalluvar.png" type="image/png">
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
  <div class="banner">
    <img src="thiruvalluvar.png" alt="Thiruvalluvar">
    <h1>Redmond Tamil School</h1>
  </div>
  <form action="login.php" method="post">
  <br>
  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <button type="submit">Login</button><br>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw"><a href="register-page.php">New? Sign up here</a></span>
  </div>
</form>
<body>
</body>
</html>

