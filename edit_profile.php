<?php
    require_once 'connection.php';
    require_once 'user.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>GIGABYTE</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">


   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- <link href="css/style.css" rel="stylesheet" id="style"> -->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">
    <!-- Bootstrap core Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Load Icon -->
    <link rel="icon" type="image/png" href="img/icon/92132887_1057695377947727_5332802222742831104_o.jpg" sizes="300x300" />
    <link rel="stylesheet" type="text/css" href="css/home/product2.css">
</head>
<body style="font-family: 'Times New Roman', Times, serif;">
    <div class="container-fluid" style="background-color: #00394e;">
      <div class="row" >
        <!--Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="width: 100%; background-color: #fff; margin-top: -1%;">
            <div class="col-md-6 justify-content-left">
                <a class="logo" href="index.php"><img src="img/icon/92132887_1057695377947727_5332802222742831104_o.jpg" style="float: left;" width="130px"></a>
                <h2 style="margin-top: 10%; margin-left: 5%; color: #00394e;"><b>GIGABYETE</b></h2>
            </div>
            <div class="col-md-6">
                <div class="row" style="height: 30px;">
                    <div class="col-sm-12">
                        <p style="float: right; margin-top: 2%; color: #00394e;" id="time"></p>
                        <script>
                        var d = new Date(2018, 11, 24, 10, 33, 30, 0);
                        document.getElementById("time").innerHTML = d;
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8" style="margin-top: 9%;">
                        <form class="form-inline justify-content-left my-2 my-lg-0">
                          <input class="form-control col-10" type="search" placeholder="Search Here..." style="border: 2px solid #00394e;" aria-label="Search">
                          <button class="btn my-2 my-sm-0 ml-1" type="submit" style="background-color: #00394e;"><i style="color: white;" class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-md-2" style="margin-top: 5%; float: right;">
                        <div class="navbar-collapse" id="">
                            <ul class="navbar-nav mr-auto">
                              
                              <li class="nav-item dropdown ml-5">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="color: black; font-size: 45px;" class="fas fa-users"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: -30%;">
                                  <a class="dropdown-item" href="signin.php">Sign In</a>
                                  <div class="dropdown-divider"></div>
                                </div>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link text-light ml-3" href="#"><i style="color: black; font-size: 45px;" class="fas fa-cart-arrow-down"></i></a>
                              </li>
                            </ul>
                        </div>
                    </div>
            </div>
            </div>
        </nav>
      </div>
      <div class="row">

        <!--Navbar -->

            <nav class="navbar navbar-expand-lg navbar-dark" style="width: 100%; margin-top: -2%; background-color: #00394e; border-bottom: 5px solid white">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 22px;">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active ml-3">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  
                  <li class="nav-item ml-3">
                    <a class="nav-link text-light" href="contact.php">Contact Us</a>
                  </li>
                </ul>
              </div>
            </nav>
<!--/.Navbar -->
    </div>

<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mt-5 col-md-5 text-center" style="margin-left: 20%;">
            <h1 class='text-light'>GIGABYTE Edit Profile</h1>
              <div class="form-login"></br>
                <form action="" method="POST"> 
                    <h2>Edit Details</h2>
                    </br>
                    <input type="text" id="userName" name="fname" style="text-transform: uppercase;" class="form-control input-sm chat-input" placeholder="First Name"/>
                    </br></br>
                    <input type="text" name="lname" id="userPassword" class="form-control input-sm chat-input" placeholder="Last Name"/>
                    </br></br>
                    <input type="text" name="dob" id="userPassword" class="form-control input-sm chat-input" placeholder="Date of Birth"/>
                    </br></br>
                    <input type="text" name="phone" id="userPassword" class="form-control input-sm chat-input" placeholder="Phone Number"/>
                    </br></br>
                    <input type="text" name="address" id="userPassword" class="form-control input-sm chat-input" placeholder="Your Address"/>
                    </br></br>
                    <div class="wrapper">
                        <button style="font-size: 20px; padding-bottom: 7%;" class="but_01 col-8 input-sm btn-danger" type="submit" name="submit"><b>Change Details<i class="fa fa-sign-in"></i></b></button><br><br>
                            <!-- <button type="submit" name="submit" class="group-btn">login </button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    </br>

<style type="text/css">
.but_01{
  border-radius: 1em;
}


body {
/*  background-image:url('img/back/3d-futuristic-background-with-connecting-lines-dots.jpg');
  background-position:center;
  background-size:cover;*/
  
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
  font-family: 'Stencil Std, fantasy'!important;
}

.container {
    padding: 110px;
}
::placeholder { 
    color: #000!important;
    opacity: 1;
    font-size:18px!important;
}
.form-login {
    background-color: white;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:black;
    box-shadow:0 1px 0 #cfcfcf;
}
.form-control{
    background:transparent!important;
    color:black!important;
    font-size: 18px!important;
}
h1{
    color:white!important;
}
h4 { 
 border:0 solid #000; 
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


        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $dob = $_REQUEST['dob'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $getmail = $_SESSION['email'];
        $cdate = date("Y/m/d m:H:s");


          
                    if(!empty($fname))
                      {
                        $query3="UPDATE customer SET first_name='$fname' WHERE email='".$getmail."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                      }
                      if(!empty($lname))
                      {
                        $query3="UPDATE customer SET last_name='$lname' WHERE email='".$getmail."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                      }

                      if(!empty($address))
                      {
                        $query3="UPDATE customer SET address='$address' WHERE email='".$getmail."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                      }

                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE customer SET phone='$phone' WHERE email='".$getmail."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";

                          }else{echo "Enter Valid Phone Number";}
                      }


                      if(!empty($dob))
                      {
                        $query3="UPDATE customer SET date_of_birth='$dob' WHERE email='".$getmail."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                      }

    }
?>
    </div>
</div>
</body>
<footer>
    <div class="container-fluid">
        <div class="row mt-2" style="background-color: #00394e; padding-top: 1%; padding-bottom: 1%; ">
            <div class="footer col-md-6 text-white text-left">
                <p style="font-size: 15px; margin-left: 20px;">Gigabyte Computers <br>Palawaththa Rd, Neluwa, Galle, sri Lanka <br> 0702298989</p>
            </div>
            <div class="footer col-md-6 text-white text-right">
                <p style="font-size: 15px; margin-left: 20px;">© 2020 Gigabyte. All rights reserved <br> Created By : D.G.K.Sewwandi SEU/IS/16/MIT/073</p>
            </div>
        </div>
    </div>
</footer>
</html>

