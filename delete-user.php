<?php
include "connection.php";

$id=$_REQUEST["ID"];

$sql="DELETE FROM login2 WHERE ID='$id'";

if (mysqli_query($con, $sql)){
	header("Location: insert-user-result.php");
}
else{
	echo msqli_error($con);
}
?>