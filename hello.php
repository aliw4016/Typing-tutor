<?php
    session_start();
   if(isset($_GET['submit'])){
    $_SESSION['as'] = $_GET['accuh'];
    $_SESSION['netsp'] = $_GET['net_speedh'];
    $_SESSION['tk'] = $_GET['tot_keystrockh'];   
    header('Location: http://localhost/fyp/login.php');
   }  
?>

<html>
<head></head>
<body></body>
</html>