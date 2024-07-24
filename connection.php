<?php
     $host = "localhost";
     $username = "n0891597";
     $pass = "Cz6pEsIy";
     $db = "m_misc2022_n0891597";
     
     $con = mysqli_connect($host, $username, $pass, $db);
         
     if (mysqli_connect_errno())
     {
     echo "failed to connect:" .
     mysqli_connect_error();
     }
     else
     {
     echo"";
     }
     ?>