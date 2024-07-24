<?php
     include "connection.php";
    $sql = "SELECT * FROM exercises WHERE muscle='chest' AND type='g' ";
    $result = mysqli_query($con,$sql);
     ?>
     
<!DOCTYPE html>
<html>
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
    

       <br><br><br><br><br><br> <br><br><br><br><br><br>
 <!--Profile-->  
    <?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login_Form.php");
}
?>
    <p>Welcome: <?php echo $_SESSION["username"]; ?></p>
    <div class="small-container">
   <h2 class="title">CHEST</h2>

             <div class="row">
                <div class="col-2">
              <div >        
                    <?php
                          while ($row = mysqli_fetch_assoc($result))
                          {
                            if ($row["Id"] == 1) {
                            echo 
                            "<a href=chest_bench_press_barbell.php?ID=".$row['Id'].">
                            <img src='https://udon.ads.ntu.ac.uk/web/Misc2022/N0891597/fyp/images/workouts/chest/".$row['Image']."' height=300px width=300px>  ".$row['Name'].'';
                          }
                          else 
                            echo 
                            "<a href=cable_crossover.php?ID=".$row['Id'].">
                            <img src='https://udon.ads.ntu.ac.uk/web/Misc2022/N0891597/fyp/images/workouts/chest/".$row['Image']."' height=300px width=300px>  ".$row['Name'].'';
                          }
                      
                        ?>
                      </div> 
           </div>
</div>
    </div>
<br><br><br><br><br><br> <br><br><br><br><br><br>
    
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
                 <li><a href="#" class="footer-link">Stores</a></li>
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

