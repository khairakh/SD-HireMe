<!DOCTYPE html>
<html lan="en" and dir="Itr">
<head>
  <meta charset="utf-8">
  <title>Company Login Form</title>
  <?php include 'CSS/companyloginstyle.php'; ?>
  <script src="companylogin.js"></script>
  </html>
</head>
<body>
  <form class="box" action="companylogin.php" method="post">

    <h1>
      company login
    </h1>
    <input type="text" name="" placeholder="Enter Email" id="email">
    <input type="text" name="" placeholder="Enter Password" id="password">
    <input type="submit" name="" value="Login" onClick="validate()" >
    <a href="forgot.html">Forgot Password?</a>
</form>
</body>
</html>
