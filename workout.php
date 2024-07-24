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
    

       <br><br><br><br><br><br> <br><br>
 <div class="small-container single-product">
    <center>
        <h1>Stopwatch</h>
        <div id="mainstopwatch">
            <div class="mainTime">
                <span id="mainminute">00</span>
                <span id="mainsecond">00</span>
                <span id="milliseconds">00</span>
            </div>
        </div>


<br> <!--creating stopwatch buttons-->
        <button  id="start" onclick="start();"> <img src="images/icons/play.png" width="20" height="20"></button>
        <button id="stop" onclick="stop();"><img src="images/icons/stop.png" width="20" height="20"></button>
        <button id="reset" onclick="reset();"><img src="images/icons/reset.png" width="20" height="20"></button>
    </center>
</div>


    <div class="small-container single-product">
   <a href="anatomy.php" class="btn">Gym</a>
    </div>
    <div class="small-container single-product">
   <a href="home_anatomy.php" class="btn">Home</a>
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
                    <li><a href="#" class="footer-link">Order status</a></li>
                    <li><a href="#" class="footer-link">Shipping and Delivery</a></li>
                    <li><a href="#" class="footer-link">Returns</a></li>
                    <li><a href="#" class="footer-link">Payment options</a></li>
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
<script type="text/javascript">
    let [milliseconds,second,minute,] = [0,0,0];
let timerRef = document.querySelector('.mainTime');
let int = null;
document.getElementById('start').addEventListener('click', ()=>{if(int!==null){
clearInterval(int);
}
int = setInterval(mainTime,10);
});
document.getElementById('stop').addEventListener('click', ()=>{
clearInterval(int);
});
document.getElementById('reset').addEventListener('click', ()=>{clearInterval(int);
[milliseconds,seconds,minutes,hours] = [0,0,0];
timerRef.innerHTML = '00 : 00 : 00';
});
function mainTime(){
    milliseconds+=10;
    if(milliseconds == 1000){
        milliseconds = 0;
        second++;
    if(second == 60){
        second = 0;
        minute++;
if(minute == 60){
minute = 0;
}
}
}
let m = minute < 10 ? "0" + minute : minute;
let s = second < 10 ? "0" + second : second;
let ms = milliseconds < 10 ? "00" + milliseconds : milliseconds < 100 ? "0" + milliseconds : milliseconds;
timerRef.innerHTML = ` ${m} : ${s} : ${ms}`;
}

</script>
</body>
</html>

