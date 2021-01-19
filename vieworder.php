n<?php
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
    <div class="container-fluid" style="background-color: #fff;">
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
                        <p style="float: right; margin-top: 7%; color: #00394e;" id="time"></p>
                        <script>
                        var d = new Date(2018, 11, 24, 10, 33, 30, 0);
                        document.getElementById("time").innerHTML = d;
                        </script>
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

                  <li class="nav-item ml-3">
                    <a class="nav-link text-light" href="myaccount.php">My Account</a>
                  </li>
                </ul>
              </div>
            </nav>
<!--/.Navbar -->
    </div>
<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-left">

             <?php   
                  $getEmail = $_SESSION['customer_id'];
                  $count = 0;

                  $viewquerys = " SELECT * FROM customer where customer_id = '".$getEmail."'";
                  $viewresults = mysqli_query($con,$viewquerys);
                  $row3 = mysqli_fetch_assoc($viewresults);
                  $pid = $row3['customer_id'];
                  
                  $viewquery = " SELECT * FROM getorder where customer_id='".$pid."'";
                  $viewresult = mysqli_query($con,$viewquery);

                  

           ?>
        
            <?php 
                  while($row1 = mysqli_fetch_assoc($viewresult)) { ?>

                  <div class="row" style="padding: 2%;  margin: 1%; color: #00394e; background-color: #f9f6f7">

                    <div class="dropdown-divider"></div>
                    <div class="col-sm-2 justify-content-left">
                      <?php   
                        $dlist = $row1['product_ids'];

                         $stri = explode(',', $dlist);
                         $count = 0;
                         // $arrlength=strlen($stri);


                      foreach ($stri as $s){

                          $getDetail_Query = "SELECT * FROM product where pid ='".$s."' ";
                          $getResult = mysqli_query($con,$getDetail_Query);

                          $getDetail_Query1 = "SELECT * FROM product_backup where pid ='".$s."' ";
                          $getResult1 = mysqli_query($con,$getDetail_Query1);

                          if($row4 = mysqli_fetch_assoc($getResult)){ 
                          $image = $row4['image'];
                          $image_src = "img/upload/product/".$image;

                          ?>
                          <div class="row">
                            <div class="col-md-6">
                              <p><?php echo $row4['title']; ?></p>
                            </div>
                            <div class="col-md-6 mt-3">
                              <img width="100%" src="<?php echo $image_src; ?>" >
                            </div>
                          </div>

                        <?php }else if($row5 = mysqli_fetch_assoc($getResult1)){
                          $image = $row5['image'];
                          $image_src = "img/upload/product/".$image;

                          ?>
                          <div class="row">
                            <div class="col-md-6">
                              <p><?php echo $row5['title']; ?></p>
                            </div>
                            <div class="col-md-6 mt-3">
                              <img width="100%" src="<?php echo $image_src; ?>" >
                            </div>
                            
                          </div>
                        <?php } ?>
                           
                      <?php   $count++; }?>
                    </div>
                    <div class="col-sm-1">
                      <p>Rs. <?php echo $row1['amount']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p><?php echo $row1['payment_type']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p><?php echo $row1['address']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p style="color: red">Accepting Order</p>
                      <p><?php echo $row1['accept']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p style="color: red">Shipping Order</p>
                      <p><?php echo $row1['shipped']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p style="color: red">Delivering Order</p>
                      <p><?php echo $row1['deliver']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p style="color: red">Payments Order</p>
                      <p><?php echo $row1['paid']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p><?php echo $row1['trn_date']; ?></p>
                    </div>

                  </div>
                  
                  <?php  $count++;
                    
                  
                }
             ?>
                                
        </div>
    </div>
    </br>


<style type="text/css">

.table_cart{
  width: 100%;
}

.but_01{
  border-radius: 1em;
}


body {
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
    color:green!important;
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

