<?php
include "connection.php";
if(isset($_POST["Distance"])){
$Distance = $_POST["Distance"];
}

$sql = "UPDATE activity SET Distance='$Distance' WHERE id=1";
if (mysqli_query($con, $sql)){
header("Location: activity.php");
}
else{
echo "Error: " . mysqli_error($con);
header("Location: activity.php");
} ?>
