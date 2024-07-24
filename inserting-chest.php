

<?php
include "connection.php";
if(isset($_POST["Name"])){
$Name = $_POST["Name"];
}

if(isset($_POST["Image"])){
$Image = $_POST["Image"];
}
if(isset($_POST["Muscle"])){
$Muscle = $_POST["Muscle"];
}
if(isset($_POST["type"])){
$type = $_POST["type"];
}
$sql = "INSERT INTO exercises (Name,Image, Muscle, type) VALUES ('$Name', '$Image','$Muscle','$type')";
if (mysqli_query($con, $sql)){
header("Location: edit-workout.php");
}
else{
echo "Error: " . mysqli_error($con);
} ?>