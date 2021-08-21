<!DOCTYPE html>
<html>
<head>
<title>HireMe</title>
<?php include 'CSS/style.php'; ?>
<script src="JAVASCRIPT/homepage.js"></script>
</head>

<body>
<div class="companyName">HireMe</div>
<div class="topnav">
  <a href="homepage.php">Home</a>
  <a class="active">About us</a>
  <a href="contactus.php">Contact us</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="userOptions()">Login
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="User/userlogin.php">User</a>
    <a href="Company/companylogin.php">Company</a>
  </div>
  </div> 
</div>
<div class="footer">
	Powered by HireMe Team &copy
</div>
</body>
</html>