<?php 
session_start();
include "connection.php";
		//make sure required fields are not empty
if(isset($_POST["username"])){
	$username=$_POST["username"];
}
if(isset($_POST["password"])){
	$password=$_POST["password"];
}
		//check if username and password are valid
$sql = "SELECT * FROM login WHERE username='$username' and password='$password' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)==1){
	$_SESSION["username"]=$username;
	$_SESSION["level"]=$row["level"];

	if($_SESSION["level"] == "admin"){
header("Location: controls.php");
}
else{
header("Location: profile.php");
}
}
else{
header("Location: login_form.php");
}

?>