<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "typingtutor";
    $conn = mysqli_connect($host,$username,$password,$db_name);
     if($conn)
     {
         echo "";
     }
    else
    {
        die("Connection Failed Because" .mysqli_connect_error());
    }
?>