<!DOCTYPE html>
<html lan="en" and dir="Itr">
<head>
  <meta charset="utf-8">
  <title>Login Form</title>
    <?php include 'CSS/userloginstyle.php'; ?>
  <script src="userlogin.js"></script>
  </html>
</head>
<body>
  <form class="box" action="login.php" method="post">

    <h1>
      user login
    </h1>
    <input type="text" name="" placeholder="Enter Username" id="username">
    <input type="text" name="" placeholder="Enter Password" id="password">
    <input type="submit" name="" value="Login" onClick="validate()" >
    <a href="forgot.html">Forgot Password?</a>
</form>
</body>
</html>
