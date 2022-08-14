<?php
  include("connection.php");
  error_reporting(0);
?>



<?php
     if(isset($_POST['submit']))
     {
         
     $name=$_POST['name'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $query = "INSERT INTO users(username,email,password) VALUES ('$name','$email','$password')";
    $data =mysqli_query($conn,$query);
if ($data)
{
    echo "Congratulations Your Account has Been Created";
}
else 
{
    echo "Your Account Is Not Created";
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
    <link href="css/style.css" rel="stylesheet">  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> 
     <!--<link href="css/signup.css" type="text/css" rel="stylesheet">-->
    <link href="css/SignUpPage.css" rel="stylesheet" type="text/css">
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

<div class="row " >
  <div class="col-xs-6 col-md-4 col-centered">
      <div class="form-group">
      <h3>Sign up using your email</h3>
 </div>
</div>
</div>
<div class="row " >
  <div class="col-xs-6 col-md-4 col-centered">
      <div class="form-group">
    <label for="firstname">First Name</label>
    <div class="input-group">
  <span class="glyphicon glyphicon-user input-group-addon" aria-hidden="true"></span>
	<input type="text" class="form-control" name="name" />
      </div>
</div>

  </div>
</div>

<div class="row " >
  <div class="col-xs-6 col-md-4 col-centered">
      <div class="form-group">
    <label for="email">Email ID</label>
    <div class="input-group">
  <span class="input-group-addon" aria-hidden="true">@</span>
  <input type="email" class="form-control" name="email" />
      </div>
</div>

  </div>
</div>
    <div class="row " >
  <div class="col-xs-6 col-md-4 col-centered">
      <div class="form-group">
    <label for="lastname">Password</label>
    <div class="input-group">
  <span class="glyphicon glyphicon-asterisk input-group-addon" aria-hidden="true"></span>
  <input type="text" class="form-control" name="password" />
      </div>
</div>

  </div>
</div>





<div class="row "  >
<div class="col-xs-6 col-md-4 col-centered center-block">
  <div class="form-group" >
    <h6 >By registering, you agree to the terms and conditions.</h6>
  
  <div>

</div>

  </div>
</div>






<div class="row">
<div class="col-xs-6 col-md-4 col-centered">
  <div class="form-group" >
    
	<input type="submit" value="Sign Up" class="btn btn-default center-block colourtwo " name="submit" style="background-color: #E0F7FA "/>
  <div>

</div>

  </div>
</div>


<div class="row"  >
<div class="col-xs-6 col-md-4 col-centered">
  <div class="form-group" >
   <center><label class="center-block">OR</label> </center>
   <span class="social social-google-plus "></span>
 </div>


  </div>
</div>




<div class="row">
<div class="col-xs-6 col-md-4 col-centered">
  <div class="form-group" >
    
  <input type="submit" value="Sign up via Google+" class="btn btn-default center-block  colour " style="background-color: #de4e43 " name="Sign Up"/>
   
 </div>


  </div>
</div>
<div class="row"  >
<div class="col-xs-6 col-md-4 col-centered">
  <div class="form-group" >
    <span class="social social-google-plus"></span>
  <input type="submit" value="Sign up via Facebook" class="btn btn-default center-block colour " style="background-color: #415e9b " name="Sign Up"/>
  
 </div>
</div>
</div>
</form>
</div>
    </body>
</html>