<?php
function check_login($con){
	if(isset($_SESSION['userid'])){
	$id = $_SESSION['userid']
	$query = "select * from candidate where userid = 'id' limit 1";
	$result = mysqli_query($con, $query);
	if($result && mysqli_num_rows($result) > 0){
		$userdata = mysqli_fetch_assoc($result);
		return $userdata;
		}
	}
	//redirect to homepage
	header("Location: ../homepage.php");
	die;
}