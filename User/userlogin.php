<!DOCTYPE html>
<html lan="en" and dir="Itr">
<head>
  <meta charset="utf-8">
  <title>HireMe</title>
    <?php include 'userloginstyle.php'; ?>
  <script src="userlogin.js"></script>
</head>
<body>
<div class="companyName">HireMe</div>
  <form class="box" action="login.php" method="post">
    <h1>
      user login
    </h1>
    <input type="text" name="" placeholder="Enter Username" id="username">
    <input type="text" name="" placeholder="Enter Password" id="password">
    <input type="submit" name="" value="Login" onClick="validate()" >
    <a href="signup.php">New user? Signup</a>
</form>
<div class="footer">
	Powered by HireMe Team &copy
</div>
</body>
</html>
