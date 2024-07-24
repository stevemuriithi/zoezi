 <?php 
include 'connection.php';
//check ID for use in the WHERE
if(isset($_POST["Id"])){
    $Id=$_POST["Id"];
}
if(isset($_POST["Day"])){
    $Day=$_POST["Day"];
}
if(isset($_POST["Day"])){
    $Day=$_POST["Day"];
}

     //define the query to be updated
$sql="UPDATE activity SET Day='$Day', Day='$Distance' WHERE Id ='$Id' ";
        //run the query and redirect the user if succesful
if(mysqli_query($con, $sql)){
    header("Location: activity.php");
}
else{
    echo mysqli_error($con);
}
?>