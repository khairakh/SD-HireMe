<!DOCTYPE html>
<html>
<head>
<title>HireMe</title>
<?php include 'CSS/style.php'; ?>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function userOptions() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</head>

<body>
<div class="companyName">HireMe</div>
<div class="topnav">
  <a class="active">Home</a>
  <a href="#">About us</a>
  <a href="#">Contact us</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="userOptions()">Login
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="#">User</a>
    <a href="#">Company</a>
  </div>
  </div> 
</div>
<div class="footer">
	Powered by HireMe Team &copy
</div>
</body>
</html>