<?php
   include("connection.php");
   
    session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = $_POST['username'];
      $mypassword =$_POST['password']; 
      $accu = $_SESSION['as'];
      $net = $_SESSION['netsp'];
      $tkk = $_SESSION['tk'];
      $sql = "SELECT u_id FROM users WHERE username = '$myemail' and password = '$mypassword'";
      $result = mysqli_query ($conn ,$sql);
      $row = mysqli_fetch_array($result);
      $active = $row['u_id'];
      $_SESSION['user_id'] = $active;
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1)
      {
         
         $_SESSION['login_user']=$myemail;
         $in = "INSERT INTO scores (accuracy, wpm, leystrock, u_id)
VALUES ('$accu', '$net', '$tkk','$active')";
          $resultt = mysqli_query($conn,$in);
          
          /* Recent Score Query    */      
          $rs = "SELECT * FROM `scores` WHERE u_id='$active' ORDER BY id DESC LIMIT 1";
          $rsQuery = mysqli_query($conn,$rs);
          $rsResult = mysqli_fetch_array($rsQuery);
          $_SESSION['rScore'] = $rsResult['wpm'] ;
    
          
          header("location:http://localhost/fyp/dashboard/pages/dashboard.php");
      }
       else 
       {
         ?>
        <script>
            alert("User Name Or Password Does Not Match Please Try Again !");
</script>
<?php
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Typing Master,English Typing Tutor">
    <meta name="author" content="Usama Siddiqui"> 
	<meta name="Keyword" content="Typing Tutor, Inscript Keyboard">
    <title>Online Free Typing Tutor</title> 
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/signup.css" rel="stylesheet">  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> 
     <!--<link href="css/SignUpPage.css" type="text/css" rel="stylesheet">-->
    <script src="js/glow.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body> 
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom">
        <div class="container-fluid top-head">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Free Typing Master</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="index.html">Home</a></li>
                    <li> <a href="About.html">About</a></li>
                    <li> <a href="contact.html">Contact</a></li>
                    <li> <a href="login.html">Login</a></li>
                                        

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container " >
	


<form method="post">

<div class="row">
  <div class="col-xs-6 col-md-4 col-centered">
      <div class="form-group">
      <h1>Login</h1>
    
	
      </div>

  </div>
</div>




<div class="row " >
  <div class="col-xs-6 col-md-4 col-centered">
      <div class="form-group">
    <label for="username">Username</label>
    <div class="input-group">
  <span class="glyphicon glyphicon-user input-group-addon" aria-hidden="true"></span>
	<input type="text" class="form-control" name="username" id="username" />
      </div>
</div>

  </div>
</div>
<div class="row " >
  <div class="col-xs-6 col-md-4 col-centered">
      <div class="form-group">
    <label for="password">Password</label>
    <div class="input-group">
  <span class="glyphicon glyphicon-asterisk input-group-addon" aria-hidden="true"></span>
	<input type="Password" class="form-control" name="password" id="password" />
      </div>
</div>

  </div>
</div>

<div class="row " >
<div class="col-xs-6 col-md-4 col-centered">
  <div class="checkbox">
	
	<label>
		<input type="checkbox" name="">
		Keep me logged in
	</label>
</div>

  </div>
</div>

<div class="row "  >
<div class="col-xs-6 col-md-4 col-centered">
  <div class="form-group" >
    
	<input type="submit" id="signin" value="Login In" class="btn btn-default center-block colourtwo " name="Sign Up" style="background-color: #E0F7FA "/>
      
    <a href="signup.php">Sign up</a>
  <div>
 
</div>

  </div>
</div>





</form>

</div>
       
    </div>
    </body>
</html>
