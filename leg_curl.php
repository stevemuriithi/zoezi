<?php
     include"connection.php";
    $sql = "SELECT * FROM legs WHERE Id =1";
    $result = mysqli_query($con,$sql);
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoezi</title>
    <link rel="stylesheet" href="css.css">
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
    

       <br><br><br><br><br><br> 
 <!--exercise-->   
   <div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="images/workouts/legs/leg_curl.png" width="100%" id="ProductImg"> 
            <div class="small-img-row">
               <div class="small-img-col">
                   <img src="images/workouts/legs/leg_curl.png" class="small-img" width="100%">
               </div>
               <div class="small-img-col">
                   <img src="images/workouts/legs/leg_curl2.png" class="small-img" width="100%">
               </div>
            </div>            
        </div>
        <div class="col-2">
            <h1>Instructions</h1>
            <ol>
                <li>Lie flat on the bench holding the barbell within a shoulder width pronated grip.</li>
                <li>Retaract scapula and have elbows between 45 to 90 degree angle.</li>
            <li>Lift the bar from the rack and hold above the chest with arms extended.</li>
                <li>Pause at the bottom, push the bar to the start position while squeezing the chest.</li>
            </ol>    
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
<script> 
    
//swiches between start and stop position   
    var ProductImg = document.getElementById("ProductImg");
    
    var SmallImg = document.getElementsByClassName("small-img");
       
 
        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        
        }
    
</script>
</body>
</html>

