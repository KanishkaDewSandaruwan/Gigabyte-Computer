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
                  <li class="nav-item ml-3">
                    <a class="nav-link text-light" href="vieworder.php">Orders</a>
                  </li>
                </ul>
              </div>
            </nav>
<!--/.Navbar -->
    </div>
<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 text-left">
          <?php   
                  $getEmail = $_SESSION['email'];
                  $count=0;
                  $sum=0;
                  $diliverFee=219;
                  
                  $viewquery = " SELECT * FROM cart where email = '$getEmail'";
                  $viewresult = mysqli_query($con,$viewquery);

                  

           ?>
        
            <?php 
            if (mysqli_num_rows($viewresult) > 0) {

            
                  while($row1 = mysqli_fetch_assoc($viewresult)) {
                    
                  $pid = $row1['product_code'];

                  $getDetail_Query = "SELECT * FROM product join category on category.cat_id = product.cat_id where pid = '".$pid."'";
                  $getResult = mysqli_query($con,$getDetail_Query);


                  if($row = mysqli_fetch_assoc($getResult))
                  {
                    $image = $row['image'];
                    $image_src = "img/upload/product/".$image;
                    $sell_prices = $row['sell_price'];
                    $qnt = $row1['qty'];
                    $balance = $sell_prices * $qnt; 
                    $id = $row1['cart_id'];
                    $sum = $sum + $balance; ?>

                  <div class="row" style="padding: 2%;  margin: 1%; color: #00394e; background-color: #f9f6f7">

                    <div class="dropdown-divider"></div>
                    <div class="col-sm-2">
                      <img style="width: 100%;" src="<?php echo $image_src; ?>">
                    </div>
                    <div class="col-sm-5 justify-content-left">
                      <h2><?php echo $row['title']; ?></h2>
                      <p><?php echo $row['title']; ?></p>
                    </div>
                    <div class="col-sm-3">
                      <h3 style="color: tomato">LKR <?php echo $row['sell_price']; ?></h2>
                    </div>
                    <div class="col-sm-1">
                      <h2><?php echo $row1['qty']; ?></h2>
                    </div>
                    <div class="col-sm-1">
                      <h2><a href="removecart.php?cat_id=<?php echo $id;?>"><i style="color: #00394e;" class="fas fa-trash-alt"></i></a></h2>
                    </div>
                  </div>
                  
                  <?php  $count++;
                    
                  }
                }
                $total = $diliverFee + $sum;
             ?>
        </div>
        <div class="col-md-3 p-2">
          <div class="row mb-5"  style="background-color: #f9f6f7; padding-left: 5%;">
            <h1 style="color: tomato">Order Summery</h1>
              <?php 
               $dis  = 0;
                if(isset($_POST['submit'])){

                    $code = $_REQUEST['code'];
                    $cdate = date("Y/m/d");

                    if (!empty($code)) {
                      $query2="SELECT * FROM pramotion WHERE pramo_code='$code'";
                      $sql2=mysqli_query($con,$query2);

                      if(mysqli_num_rows($sql2)>0){
                        $row2 = mysqli_fetch_assoc($sql2);

                        if ($row2['end_date'] <= $cdate) {
                          $discount = $row2['promo_precentage'];
                          $dis = $total * $discount /100;
                          $total = $total - $dis;
                        }else{
                          echo "<script>alert(\"Sorry. This Pramotion is expired\");</script>";
                        }

                      }else{
                          echo "<script>alert(\"Pramo Code is Wrong\");</script>";
                      }
}

                }
               ?>
          </div>
          <div class="row"  style="background-color: #f9f6f7; color: black; padding-left: 5%;">
            <div class="col-sm-8">
              <p>Product Subtotal </p>
              <p>Shiping Fee </p>
              <p>Discount Fee </p>
              <p>Subtotal </p>
            </div>
            <div class="col-sm-4">
              <p>Rs. <?php echo $sum; ?> </p>
              <p>Rs. <?php echo $diliverFee; ?> </p>
              <p>Rs. <?php echo $dis; ?> </p>
              <p>Rs. <?php echo $total + $dis; ?> </p>
            </div>

          </div>
          
          <div class="row mt-5"  style="background-color: #f9f6f7; padding-left: 5%;">
              <form class="form-inline justify-content-left my-2 my-lg-0 mt-5" method="POST" action="">
                <input class="form-control col-8" type="search" name="code" placeholder="Pramo Code Here..." style="border: 2px solid #00394e;" aria-label="Search">
                <button class="btn btn-info my-2 my-sm-0 ml-1" name="submit" type="submit" style="background-color: #00394e;">APPLY</i></button>
              </form>
          </div>

          <div class="row"  style="background-color: #f9f6f7; color: red; padding-left: 5%;">
            <h2>Total </h2> <h2 style="margin-left: 35%;">Rs. <?php echo $total; ?></h2>
          </div>

          <div class="row mt-5 justify-content-center">
                <button class="btn btn-info col-sm-11 ml-1" onclick="redirectUser()" type="button" style="background-color: #00394e; padding: 4%;">CHECKOUT</i></button>
          </div>
        </div>
        <a style="text-decoration: none; margin-left: 2%; font-size: 20px;" href="clearcart.php?cus_email=<?php echo $getEmail;?>">Clear Cart...</a>
    </div>
    </br>
    <script type="text/javascript">
      function redirectUser(){

          window.location.href='placeOrder.php?total=<?php echo $total; ?>';

        }
    </script>
  <?php }else{ ?>
    <h1 class="ml-5">Empty Cart</h1>
  <?php } ?>

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

