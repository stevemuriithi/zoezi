<?php 

session_start();
include "connection.php";


if(isset($_POST["add"]))
{
	if(isset($_SESSION["calorie"]))//maintains the calorie table for the sessioned user
	{
		$item_array_id = array_column($_SESSION["calorie"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["calorie"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_cal'		=>	$_POST["hidden_cal"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["calorie"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_cal'		=>	$_POST["hidden_cal"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["calorie"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["calorie"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["calorie"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="calories.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoezi</title>
    <link rel="stylesheet" href="zoezi.css">
</head>
<body>
   
   <div class="header">
       <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="home.html"><img src="images/logo.png" width="125px"></a>
              </div>
              <nav>
               <ul id="MenuItems">
                   <li><a href="plans.html">Plan</a></li>
                   <li><a href="athlete.php">Athlete</a></li>
                   <li><a href="workout.php">Workouts</a></li>
                   <li><a href="nutrition.html">Nutrition</a></li>
                   <li><a href="classes.php">Classes</a></li>
                   <li><a href="profile.php">Profile</a></li>
                   <li><a href="logout.php">logout</a></li>
                </ul>
              </nav>  
          </div>          
       </div>
       </div>
		
			<br><br><br>
			<h3 align="center">Daily calorie counter </h3>
			<br><br>
			<?php
				$sql  = "SELECT * FROM food ";
				$result = mysqli_query($con,$sql);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
	<div class="container">			
        <div class="row">
               <div class="col-7">
				<form method="post" action="calories.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
						<img class="img-responsive" /><?php echo "
                            <img src='https://udon.ads.ntu.ac.uk/web/Misc2022/N0891597/fyp/images/icons/food/".$row['image']."' >  "; ?>  <br>

						<br><br>
						<?php echo $row["name"]; ?><br>
						calories:<?php echo $row["cal"]; ?>

						<input type="text" name="quantity" value="1" class="form-control" />
						<input type="hidden" name="hidden_cal" value="<?php echo $row["cal"]; ?>" />
						<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add" />
					</div>
				</form>
			</div>
		</div>
	</div>
			<?php
					}//close while
				}//close if
			?>
			<div class="container">
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Food Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Calories</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["calorie"]))
					{
						$total = 0;
						foreach($_SESSION["calorie"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td> <?php echo $values["item_cal"]; ?></td>
						<td> <?php echo number_format($values["item_quantity"] * $values["item_cal"], );?></td>
						<td><a href="calories.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_cal"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"> <?php echo number_format($total, ); ?></td>
						<td></td>
					</tr>
					<?php
					}//close if
					?>		
				</table>
			</div>
		</div>
		<br><br><br><br>
		
	<!--Footer--> 
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
               
                <address>
                        <h3>ZOEZI</h3>
                        London, United Kingdom <br>
                        www.joka.com<br>
                        phone: +44 123 456 7890
                    </address>
            </div>
            <div class="footer-col2">
               <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col3">
               <h3>Company info</h3>
                <ul>
                 <li><a href="#" class="footer-link">About us</a></li>
                 <li><a href="#" class="footer-link">News</a></li>
                 <li><a href="#" class="footer-link">Careers</a></li>
                 <li><a href="#" class="footer-link">Sustainability</a></li>
               </ul>
            </div>
            <div class="footer-col4">
               <h3>Follow Us</h3>
                <ul>
                    <li><a href="#" class="footer-link">LinkedIn</a></li>
                    <li><a href="#" class="footer-link">Instagram</a></li>
                    <li><a href="#" class="footer-link">Facebook</a></li>
                    <li><a href="#" class="footer-link">Twitter</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="order-2">
                        <a href="#" class="footer-link">Cookie settings |</a>
                        <a href="#" class="footer-link ml-3">Terms an conditions |</a>
                        <a href="#" class="footer-link ml-3">privacy settings |</a>
                    </div>
    </div>    
</div>

</body>
</html>
	</body>
</html>

