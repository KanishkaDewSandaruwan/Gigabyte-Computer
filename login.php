<?php
	require_once 'connection.php';
	session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">

    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Load Icon -->
	<link rel="icon" type="image/png" href="img/icon/92132887_1057695377947727_5332802222742831104_o.jpg" sizes="300x300" />
</head>
<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 text-center">
            <h1 class='text-white'>GIGABYTE Computers</h1>
              <div class="form-login"></br>
              	<form action="login.php" method="POST">	
	                <h4>Dashboard Login</h4>
	                </br>
	                <input type="text" id="userName" name="email" style="text-transform: uppercase;" class="form-control input-sm chat-input" placeholder="username"/>
	                </br></br>
	                <input type="password" name="pass" id="userPassword" class="form-control input-sm chat-input" placeholder="password"/>
	                </br></br>
	                <div class="wrapper">
	                	<button class="but_01 col-8 input-sm btn-danger" type="submit" name="submit"><b>Log In <i class="fa fa-sign-in"></i></b></button><br><br>
	                        <!-- <button type="submit" name="submit" class="group-btn">login </button> -->
	                </div>
              	</form>
            </div>
        </div>
    </div>
    </br>

    <div class="footer text-white text-center">
        <p>© 2020 Gigabyte. All rights reserved</p>
    </div>

<style type="text/css">
.but_01{
	border-radius: 1em;
}


body {
  background-image:url('img/back/3d-futuristic-background-with-connecting-lines-dots.jpg');
  background-position:center;
  background-size:cover;
  
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
  font-family: 'Stencil Std, fantasy'!important;
}

.container {
    padding: 110px;
}
::placeholder { 
    color: #ffffff!important;
    opacity: 1;
    font-size:18px!important;
}
.form-login {
    background-color: rgba(0,0,0,0.55);
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:white;
    box-shadow:0 1px 0 #cfcfcf;
}
.form-control{
    background:transparent!important;
    color:white!important;
    font-size: 18px!important;
}
h1{
    color:white!important;
}
h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}
.text-white{
    color: white!important;
}
.wrapper {
    text-align: center;
}
.footer p{
    font-size: 18px;
}
</style>
<?php
	if(isset($_POST['submit']))
	{
		$email=stripslashes($_REQUEST['email']);
		$password=stripslashes($_REQUEST['pass']);


		$loginsql3="SELECT * FROM employee WHERE username='$email' AND password='".md5($password)."'";
		$result3=mysqli_query($con,$loginsql3) or mysqli_errno();
		$rows4=mysqli_num_rows($result3);

		if($rows4 == 1){
			$_SESSION['username']=$email;
			echo "<script type=\"text/javascript\">window.location.href='dashboard.php'; </script>";
		}else{
			echo "<script>alert(\"Username or Password is incorrect\");</script>";
		}
	}
?>
</div>
</body>
</html>

