<?php
include "connection.php";

$id=$_REQUEST["ID"];

$sql="DELETE FROM exercises WHERE ID='$id'";

if (mysqli_query($con, $sql)){
	header("Location: edit-workout.php");
}
else{
	echo msqli_error($con);
}
?>