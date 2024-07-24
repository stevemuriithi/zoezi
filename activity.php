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
       <br><br><br><br><br><br> <br><br><br><br><br><br>
       <h1>Dinstance covered in meters</h1>
       <br><br><br><br><br><br>
    
<br>

       <?php
include "connection.php";

//sql to get data from table
$sql = "SELECT Day, Distance from activity";
$result= mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title> Form</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"> </script>
    
    </head>
<body>
<div class="container">
    <?php    
    $dataX = "";
    $dataY="";
    $dataZ="";
//to fetch data from the database and alocate it to the X and y axis
    while($row=mysqli_fetch_assoc($result)){
        $dataX= $dataX."'".$row['Day']."',"; //allocate data from the database to variables
        $dataY= $dataY."'".$row['Distance']."',"; //allocate data from the database to variables
        
    }
        $dataX=trim($dataX,",");
        $dataY=trim($dataY,",");      
    ?>        
        <canvas id="MyChart" ></canvas>        
        <script type="text/javascript">        
        var mychart = document.getElementById('MyChart').getContext('2d');
            var myData = {
                type: 'line',
                
                data:{

                    labels:[<?php echo $dataX;?>],fontColor: 'red',//allocate data from the database to the X axis
                    datasets: [{

                        label: 'Distance',
                        fontColor: 'white',
                        data: [<?php echo $dataY;?>],//allocate data from the database to the Y axis
                        
                        backgroundColor: ['#1b236b',],borderWidth: 1,
                        borderColour: 'red', hoverBorderColor: 'blue'
                    }],
                },               
                options: {
                    title: {
                        display: true,
                        fontColor: 'white',
                        text: 'Enter distance covered on the days of the week'}, 
                          legend: {    display: true,},
                    scales: {   
                        xAxes: [{ 
                            ticks: {
                                fontColor: ['black']
                            }
                            }],
                        yAxes: [{ 
                            display: true,
                            ticks: {
                                fontColor: "#CCC",
                                beginAtZero: true, 
                                steps: 10,
                                stepValue: 5, 
                                max: 9000 
                            }    
                        }]
                    }
                }
            };            
            var mychart = new Chart(mychart, myData);        
        </script>
    </div>
    <?php 

include "connection.php";
      //make sure required fields are not empty


      //check if username and password are valid
$sql = "SELECT * FROM activity  ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
 ?>
<br><br><br><br><br><br>
   <h2 class="title">ENTER DISTANCE COVERED IN METERS</h2>
             <div class="row">
                <form id="LoginForm" action="mon.php" method="post">
                   <input type="text" name="Distance" placeholder="Mon">     
                   <input type="submit">      
               </form>
               <form id="LoginForm" action="tue.php" method="post">
                   <input type="text" name="Distance" placeholder="Tue">     
                   <input type="submit">      
               </form>
               <form id="LoginForm" action="wed.php" method="post">
                   <input type="text" name="Distance" placeholder="Wed">     
                   <input type="submit">      
               </form>
               <form id="LoginForm" action="thur.php" method="post">
                   <input type="text" name="Distance" placeholder="Thur">     
                   <input type="submit">      
               </form> 
               <form id="LoginForm" action="fri.php" method="post">
                   <input type="text" name="Distance" placeholder="Fri">     
                   <input type="submit">      
               </form>
               <form id="LoginForm" action="sat.php" method="post">
                   <input type="text" name="Distance" placeholder="Sat">     
                   <input type="submit">      
               </form>
               <form id="LoginForm" action="sun.php" method="post">
                   <input type="text" name="Distance" placeholder="Sun">     
                   <input type="submit">      
               </form>
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

