<!DOCTYPE html>
<html lan="en" and dir="Itr">
<head>
  <meta charset="utf-8">
  <title>HireMe</title>
  <?php include 'companyloginstyle.php'; ?>
  <script src="companylogin.js"></script>
  </html>
</head>
<body>
  <div class="companyName">HireMe</div>
  <form class="box" action="companylogin.php" method="post">

    <h1>
      company login
    </h1>
    <input type="text" name="" placeholder="Enter Email" id="email">
    <input type="text" name="" placeholder="Enter Password" id="password">
    <input type="submit" name="" value="Login" onClick="validate()" >
    <a href="signup.php">New company? Signup</a>
</form>
<div class="footer">
	Powered by HireMe Team &copy
</div>
</body>
</html>
