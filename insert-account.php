<?php
include "connection.php";
if(isset($_POST["username"])){
$username = $_POST["username"];
}
if(isset($_POST["password"])){
$password = $_POST["password"];
}
if(isset($_POST["age"])){
$age = $_POST["age"];
}
$sql = "INSERT INTO login (username,password,age) VALUES ('$username', '$password','$age')";
if (mysqli_query($con, $sql)){
header("Location: login_form.php");
}
else{
echo "Error: " . mysqli_error($con);
} ?>