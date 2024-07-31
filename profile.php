<!DOCTYPE html>
<html lang="en">
     <?php
     include "connection.php";
     ?>


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
                  <a href="#"><img src="images/logo.png" width="125px"></a>
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
           <?php
session_start();
?>

 <!--Profile-->    
    <div class="small-container">
   <div class="row">
               <div class="col-4">
                   <a href="user.php"><img 
                    src="images/profile2.png"height=300px width=300px></a>
                 <h4>Welcome:  <?php echo $_SESSION["username"]; ?></h4>
                 <h4><?php echo $_SESSION["level"]; ?></h4>
                                             
               </div> 
               <div class="col-4">
                   <a href="bmi.html"><img src="images/BMI2.png"height=300px width=300px></a>
                   <h4>BMI</h4>
                   
               </div> 
               <div class="col-4">
                   <a href="calories.php"><img src="images/kcal.png"height=300px width=300px></a>
                   <h4>Calories</h4>
                    
               </div> 
                <div class="col-4">
                    <a href="activity.php"><img src="images/activity.png"height=300px width=300px></a>
                   <h4>Distance covered </h4>
                   
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
                        <h3>Zoezi</h3>
                        London, United Kingdom <br>
                        www.zoezi.com<br>
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

