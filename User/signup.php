<?php
session_start()

  include("conn/conn.php")
	include("User/functions.php")
	if($_SERVER['REQUEST_METHOD'] == "POST")
		{

		//something was posted
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];

		if(!empty($email) && !empty($firstname) && !empty($lastname) && !empty($password)
		 && !empty($phone) && !empty($address) && !empty($gender) && !is_numeric($firstname)
		 && !is_numeric($lastname) && !is_numeric($email))
		{

			//save to database
			$userid = random_num(20);
			$query = "insert into candidate (userid, firstname, lastname, email, phone,
			 address, gender, password) values ('$userid', '$firstname', '$lastname', 
			'$email', '$phone', '$address', '$gender', '$password')";

			mysqli_query($query);
			header("Location: ../homepage.php");
			die;
		} 
		else 
		{
			echo "Please enter some valid information!";
		}	
	}

  $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>HireMe</title>
<style>
/*To style all*/
body {
  font-family: Times New Roman;
  text-align:center;
  margin:0;
  height:100%;
}

.companyName {
	font-size:60px;
	color:#363636;
	text-align:center;
	font-weight: bold;
	background-color: #DBF6E9;
	padding:100;
    width: 100%;
}

/*To style the input box that user will fill*/
input[type=text], input[type=password], input[type=tel], input[type=address]{
  width: 40%;
  padding: 5px;
  display: inline-block;
  background-color: #8D93AB;
  border: 2px solid black;
  border-radius: 5px;
}

/*styling reset button */
.resetbtn {
  background-color: #393b44;
  border: 2px solid black;
  border-radius: 5px;
  color: white;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  transition-duration: 0.3s;
  width: 20%;
  cursor: pointer;
}

/*To style the reset button*/
.resetbtn:hover {
  background-color: #8D93AB;
  color: white;
  padding: 5x;
  font-size: 15px;
  cursor: pointer;
  width: 20%;
  border: 2px solid black;
  border-radius: 5px;
}

/*styling signup button */
.signupbtn {
  background-color: #393b44;
  border: 2px solid black;
  border-radius: 5px;
  color: white;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  transition-duration: 0.3s;
  width: 20%;
  cursor: pointer;
}

/*To style the sign up button*/
.signupbtn:hover {
  background-color: #8D93AB;
  color: white;
  padding: 5x;
  font-size: 15px;
  cursor: pointer;
  width: 20%;
  border: 2px solid black;
  border-radius: 5px;
}

/*To style the link signin and terms and privacy*/
a:visited {
  color: #8D93AB;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: #000000;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color:#D6E0F0;
  background-color: transparent;
  text-decoration: underline;
}

/*To style the word registeration*/
legend {
	background-color: #8D93AB;
	color: #000000;
	padding: 5px 20px;
	border: 2px #F1F3F8;
 	border-radius: 5px;
}

/*To style the outline fieldset*/
fieldset {
	background-color:#393B44;
	margin-left:19%;
	margin-right:20%;
	color: white;
	border: 2px solid #F1F3F8;
	border-radius: 50px;
}

/*To style the word in the fieldset*/
.field{
	padding-left: 18%;
	text-align: left;
}

/*To style the footer*/
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 2%;
    background-color: #3F3F44;
    color: white;
    text-align: center;
}
</style>

<script>
	function validateForm()
	{
		//collect form data in JavaScript variables
		var pw1 = document.getElementById("pswd1").value;
		var pw2 = document.getElementById("pswd2").value;
		var name1 = document.getElementById("fname").value;
		var name2 = document.getElementById("lname").value;
		var userEmail = document.getElementById("email").value;
		var address = document.getElementById("homeaddress").value;

		//check empty first name field
		if(name1 == "")
		{
			document.getElementById("blankMsg").innerHTML = "Fill in the first name";
			return false;
		}

		//character data validation
		if(!isNaN(name1))
		{
			document.getElementById("blankMsg").innerHTML = "Only characters are allowed";
			return false;
		}

		//character data validation
		if(!isNaN(name2))
		{
			document.getElementById("charMsg").innerHTML = "Only characters are allowed";
			return false;
		}

		//character data validation
		if((userEmail == ""))
		{
			document.getElementById("message3").innerHTML = "Please insert your email";
			return false;
		}


		if((address == ""))
		{
			document.getElementById("address").innerHTML = "Please insert your address";
			return false;
		}

		//check empty password field
		if(pw1 == "")
			{
				document.getElementById("message1").innerHTML = "Fill the password please!";
				return false;
			}

		//check empty confirm password field
		if(pw2 == "")
			{
				document.getElementById("message2").innerHTML = "Enter the password please!";
				return false;
			}

		//minimum password length validation
		if(pw1.length < 8)
			{
				document.getElementById("message1").innerHTML = "Password length must be atleast 8 characters";
				return false;
			}

		//maximum length of password validation
		if(pw1.length > 15)
		{
			document.getElementById("message1").innerHTML = "Password length must not exceed 15 characters";
			return false;
		}

		if(pw1 != pw2)
			{
				document.getElementById("message2").innerHTML = "Passwords are not same";
				return false;
			}
			else
				{
					alert ("Welcome to HireMe! Your account has been created successfully.");
				}
	}

</script>
</head>

<body>
    <div class="companyName">HireMe</div>
	<form onsubmit ="return validateForm()">
	<div class="container">
	<p style="color:black">Please fill in this form to create an account.</p>
	<fieldset class="field">
	<legend>User Registration</legend>

		<!-- Enter first name -->
		<td> First Name </td>
		<br><input type = "text" id = "fname" value = "">
		<span id = "blankMsg" style="color:red"> </span> <br><br>

		<!-- Enter last name -->
		<td> Last Name </td>
		<br><input type = "text" id = "lname" value = "">
		<span id = "charMsg" style="color:red"> </span> <br><br>

		<td>Email Address</td>
		<br><input type="text" id="email" value="">
		<span id = "message3" style="color:red"> </span> <br><br>

		<label for="phone">Phone Number:</label>
		<br><input type="tel" id="phone" name="phone">
		<span id = "phone" style="color:red"> </span> <br><br>

		<td>Address</td>
		<br><input type="address" id="homeaddress" value="">
		<span id = "address" style="color:red"> </span> <br><br>

		<label for="gender">Gender</label><br>
		<select name="gender" id="gender">
			<option value="female">Female</option>
			<option value="male">Male</option>
		</select>

		<br><br><td> Create Password </td>
		<br><input type = "password" id = "pswd1" value = "">
		<span id = "message1" style="color:red"> </span> <br><br>

		<td> Confirm Password </td>
		<br><input type = "password" id = "pswd2" value = "">
		<span id = "message2" style="color:red"> </span> <br><br>

		<!-- Click to verify valid password -->
		<button type = "submit" class = "signupbtn" onclick="document.location='';"
		value = "Sign Up" >Sign Up</button>

		<!-- Click to reset fields -->
		<button type = "reset" class = "resetbtn" value = "Reset" >Reset</button>

		<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>
    <br>
    <a href="userlogin.php">Already have an account? Login</a> </p>

	</fieldset>
	</div>
	<div class="container signin">
	<p style="color:black">Already have an account? <a href="userlogin.php">Sign In</a></p>
	</div>
	</form>

</body>
<footer class="footer">
	Powered by HireMe Team &copy
</footer>
</html>
