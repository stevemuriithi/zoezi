
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
              
          </div>         
       </div>
            
<!--Cart-->
<div class="accout-page">
    <div class="container">  
       <div class="row">     
          <div class="col-2">
             <img src="images/logo.png" width="100%">
          </div>
          
           <div class="col-2">
              <div class="form-container">
                 <div class="form-btn">
                     <span onclick="login()">Login</span>
                     <span onclick="register()">Register</span>
                     <hr id="indicator">
                 </div>
                 
               <form id="LoginForm" action="login.php" method ="post">
                   <input type="text" name="username" placeholder="username">
                   <input type="password" name="password" placeholder="Password"> 
                                 
                   <input type="submit">
                   <a href="">Forgot password</a>  
               </form>
                  
               <form id="RegForm" action="insert-account.php" method ="post">
                <input type="text" placeholder="username">
                   <input type="password" placeholder="Password">
                   <input type="age" name="age" placeholder="Age">

                   <h4> <b>GENDER</b></h4>
                    <select class="form-control">
                        <option>male</option>
                        <option>female</option>
                        <option>other</option>
                    </select> <br><br>
                   
                   <input type="checkbox"  id="dropdown-checkbox" class="form-check-input">
                                 <label for="dropdown-checkbox" class="form-check-label">By clicking 'Submit' you agree to the Creators Club Terms & Conditions, Zoezi Terms & Conditions </label>
                   <input id="6_letters_code" name="6_letters_code" type="text">
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
                 <li><a href="#" class="footer-link">Email</a></li>
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
        var Indicator = document.getElementById("indicator");
        var RegForm = document.getElementById("RegForm");
        
        
         function login(){
                LoginForm.style.transform = "translateX(300px)";
                RegForm.style.transform = "translateX(300px)";
                
                Indicator.style.transform = "translateX(0px)"
            };
        
        function register(){
                
                LoginForm.style.transform = "translateX(0px)";
                RegForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)"
            };            
    </script>
        
</body>
</html>

