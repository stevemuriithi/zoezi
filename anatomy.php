<?php
     include"connection.php";
    $sql = "SELECT * FROM exercise";
    $result = mysqli_query($con,$sql);
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
    

       <br><br><br><br><br><br> 
 <!--exercise-->   
   <div class="map-page">
        <div class="container"> 
            <div class="map-container">    <!--hides half of the image and slides to reveal the other half(hidding the 'first half') --> 
                 <div class="map-btn">      <!--buttons to slide the image--> 
                     <span onclick="login()"><p8>front</p8></span>
                     <span onclick="register()"><p8>back</p8></span>
                     <hr id="indicator">
                 </div>


             
              <form id="backForm">      <!--form to display back of the human anatomy--> 
                <img src="images/anatomy.png" alt="Anatomy-front" usemap="#map" >
              <map name="map" id="locations-map">       <!--image map to make sections of the image clickable--> 
                           <area shape="circle" coords="" title="Libye" href="profile.html" class="tooltip"/>
<area shape="rect" coords="220,153,344,214" title="chest" class="tooltip" onmouseover="myFunc(this)" href="chest.php" onmouseout="myFuncHide(this)"/>
<area shape="circle" coords="195,155,20" title="shoulder" onmouseover="myFunc(this)" class="tooltip" href="shoulders.php" onmouseout="myFuncHide(this)"/>
<area shape="circle" coords="363,155,20" title="shoulder" onmouseover="myFunc(this)" class="tooltip" href="shoulders.php" onmouseout="myFuncHide(this)"/>
<area shape="rect" coords="220,227,350,365" title="abs" class="tooltip" onmouseover="myFunc(this)" href="" onmouseout="myFuncHide(this)"/>
<area shape="circle" coords="180,220,22" title="biceps" onmouseover="myFunc(this)" class="tooltip" href="#" onmouseout="myFuncHide(this)"/>
<area shape="circle" coords="380,220,22" title="biceps" onmouseover="myFunc(this)" class="tooltip" href="#" onmouseout="myFuncHide(this)"/>
<area shape="rect" coords="200,374,365,550" title="quads" class="tooltip" onmouseover="myFunc(this)" href="legs.php" onmouseout="myFuncHide(this)"/>
<area shape="rect" coords="733,173,880,347" title="back" class="tooltip" onmouseover="myFunc(this)" href="" onmouseout="myFuncHide(this)"/>
<area shape="circle" coords="694,255,22" title="triceps" onmouseover="myFunc(this)" class="tooltip" href="#" onmouseout="myFuncHide(this)"/>
<area shape="circle" coords="918,255,22" title="triceps" onmouseover="myFunc(this)" class="tooltip" href="#" onmouseout="myFuncHide(this)"/>
<area shape="rect" coords="720,430,890,560" title="hamstrings" class="tooltip" onmouseover="myFunc(this)" href="legs.php" onmouseout="myFuncHide(this)"/>
<area shape="rect" coords="717,570,777,685" title="calves" class="tooltip" onmouseover="myFunc(this)" href="legs.php" onmouseout="myFuncHide(this)"/>
<area shape="rect" coords="820,570,885,685" title="calves" class="tooltip" onmouseover="myFunc(this)" href="legs.php" onmouseout="myFuncHide(this)"/>

                    </map>
                        
<div id="myTooltip" />  
                </form>
                <form id="frontForm"><!--form to display back of the human anatomy--> 
                </form>
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
                        <h3>JOKA</h3>
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

<script type="text/javascript"> //script to display hover text on the image
    function myFunc (el) {

  var tooltip = document.getElementById('myTooltip');
  tooltip.style.display = 'block';
  tooltip.innerHTML = el.title;
}

function myFuncHide(el) {
  var tooltip = document.getElementById('myTooltip');
  tooltip.style.display = 'none';
  tooltip.innerHTML = '';
}

document.addEventListener('mousemove', function(e){
    
    document.getElementById('myTooltip').style.left = (e.pageX+5)+"px";
      document.getElementById('myTooltip').style.top = (e.pageY+5)+"px";
 
});
</script>

<script>  //script to allow sliding of image on the container
        var backForm = document.getElementById("backForm");
        var frontForm = document.getElementById("frontForm");
        var Indicator = document.getElementById("indicator");
        
         function login(){
                frontForm.style.transform = "translateX(500px)";
                backForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(0px)"
            };
        
        function register(){
                frontForm.style.transform = "translateX(0px)";
                backForm.style.transform = "translateX(-540px)";
                Indicator.style.transform = "translateX(100px)"
            };            
    </script>
</body>
</html>

