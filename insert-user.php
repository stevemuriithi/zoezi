
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account </title>
    <link rel="stylesheet" href="zoezi.css">   
</head>
<body>
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
            
<!--Cart-->
<div class="accout-page">
    <div class="container"> 
    <h2 class="title">ADD USER ACCOUNTS or WORKOUTS</h2> 
       <div class="row">     
         
          
           <div class="col-2">
              <div class="form-container">
                 <div class="form-btn">
                     <span onclick="login()">Member</span>
                     <span onclick="register()">Workout</span>
                     <hr id="indicator">
                 </div>
                 
               <form id="LoginForm" action="inserting-user.php" method="post">
                <h4> <b> MEMBER DETAILS</b></h4>
                   <input type="text" name="username" placeholder="username">
                   <input type="password" name="password" placeholder="Password">
                   <input type="age" name="age" placeholder="Age">                
                   <input type="submit">      
               </form>
                  
               <form id="RegForm" action="inserting-chest.php" method ="post">
                   <h4> <b> WORKOUT DETAILS</b></h4>
                   <input type="text" name="Name" placeholder="Name">
                   <input type="text" name="Image" placeholder="Image">
                   <input type="text" name="Muscle" placeholder="Muscle">
                   <input type="text" name="type" placeholder="type">
                    <input type="submit" value="Submit" name="submit">
                   
               </form>
            
              </div>
           </div>
       </div>
</div>
</div>

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
                    <img src="pics/play-store.png">
                    <img src="pics/app-store.png">
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
                    <li><a href="#" class="footer-link">Facebook</a></li>
                    <li><a href="#" class="footer-link">Instagram</a></li>
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

<!-- login/register toggle -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("indicator");
        
         function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)"
            };
        
        function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)"
            };            
    </script>
        
</body>
</html>

