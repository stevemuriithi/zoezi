 <?php 
include 'connection.php';
//check ID for use in the WHERE
if(isset($_POST["ID"])){
    $ID=$_POST["ID"];
}
if(isset($_POST["username"])){
    $username=$_POST["username"];
}
if(isset($_POST["password"])){
    $password=$_POST["password"];
}

     //define the query to be updated
$sql="UPDATE login SET username='$username', password='$password' WHERE ID =3 ";
        //run the query and redirect the user if succesful
if(mysqli_query($con, $sql)){
    header("Location: insert-user-result.php");
}
else{
    echo mysqli_error($con);
}
?>