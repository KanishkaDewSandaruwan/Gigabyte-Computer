<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="jq/jq.js" type="text/javascript"></script>

  <link rel="icon" type="image/png" href="img/icon/92132887_1057695377947727_5332802222742831104_o.jpg" sizes="300x300" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/dash/dash_style1.css">
<script type="text/javascript" src="js/doc.js"></script>

    <!-- Load Icon -->
<!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form2.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">

    <script type="text/javascript" src="js/home.js"></script>

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">

    <!-- Font awesome link -->
    <link href="fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

    <script src="js/a.js"></script>
    <script src="js/b.js"></script>
    <script src="js/c.js"></script> 

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/npm.js"></script>
  <title>GIGABYTE</title>
</head>
<body style="font-family: \"Times New Roman\",Times, serif;">
  <div class="container-fluid">
    
<!--    <div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div> -->
<div id="wrapper" >
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: #00394e; margin-top: 0%; border-top-right-radius: 2em; margin-left: -1.1%; border-bottom-right-radius: 2em;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-md-12">
        <div class="row justify-content-left mt-4 pl-4">
            <!-- <a style="text-decoration: none; text-transform: uppercase; font-family: \"Times New Roman\",Times, serif;" href="dashboard.php"><h1  class="text-light">Gigabyte Computers</h1></a> -->
          </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <i style="font-size: 30px; color: white;" class="fas fa-bars"></i>
            </button>
                  <img src="img/icon/92132887_1057695377947727_5332802222742831104_o.jpg" width="10%" style="float: left; padding-bottom: 1.5%; ">
        </div>

        
        

        
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav" style="padding-top: 10px; padding-left: 5px;">

              <!-- User name display code -->
              <!-- <?php 

              if (isset($_SESSION['username'])) 
                {
                  $a = $_SESSION['username'];
                  echo '<h2 style="font-size:20PX; margin-left:3%; color:white; margin-top: 10%;"><b>Welcome!<br>  Hello '.$a.'</b></h2>'; 

                } else if (isset($_SESSION['doctor'])) {
                  $a = $_SESSION['doctor'];
                  echo '<h2 style="font-size:20PX; margin-left:3%; color:white; margin-top: 10%;"><b>Welcome!<br>  Hello '.$a.'</b></h2>'; 

                } ?> -->
              <!-- <div class="dropdown-divider"></div> -->
              <a style="text-decoration: none; text-transform: uppercase; font-family: \"Times New Roman\",Times, serif;" href="dashboard.php"><h1  class="text-warning">GIGABYTE <br> Computers </h1></a>
                  <div class="dropdown-divider"></div>

<?php if($a == 'admin'){?>

             <!--   <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php">Admin Area</a>
                </li> -->
                  <!-- <div class="dropdown-divider"></div> -->
                  
           <!-- ................. Customers .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; color: white; margin-left: 10px;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><b> Customers</b></a>
          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="view.php">Customers List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=27">Contact Massages</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Products .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; margin-left: 10px;" data-target="#submenu-1-17" aria-controls="submenu-1-17"><b>Products</b></a>
          <div id="submenu-1-17" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5"href="dashboard.php?id=16">Add Product List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5"href="product_view.php">Product Details</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Product Categories .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;margin-left: 10px;"  data-target="#submenu-1-10" aria-controls="submenu-1-10"><b>Categories</b></a>
          <div id="submenu-1-10" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=17">Add Categories</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=18">View Categories</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

       <!-- ................. Autor .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; margin-left: 10px;"  data-target="#submenu-1-32" aria-controls="submenu-1-32"><b>Promotion</b></a>
          <div id="submenu-1-32" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=1">Add Promotion</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=3">View Promotion</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
       <!-- ................. Oders .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="dashboard.php" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; margin-left: 10px;" data-target="#submenu-1-5s" aria-controls="submenu-1-5s"><b> Oders</b></a>
          <div id="submenu-1-5s" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=2">Pending Oders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=21">Accepted Oders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=7">Shipped Oders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=8">Completed Oders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=26">Completed Oders without Paid</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=22">Rejected Oders</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Book Store .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; margin-left: 10px;" data-target="#submenu-1-6" aria-controls="submenu-1-6"><b> Custome Website</b></a>
          <div id="submenu-1-6" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=20">Slider Galary</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=10">Pramotion Banners</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Payments.................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 20px; margin-left: 10px;" aria-expanded="false" data-target="#submenu-1-7" aria-controls="submenu-1-7"><b>Income</b></a>
          <div id="submenu-1-7" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=13">View Income</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Employee .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 20px; margin-left: 10px;" aria-expanded="false" data-target="#submenu-1-8" aria-controls="submenu-1-8"><b>Employee</b></a>
          <div id="submenu-1-8" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=14">View Employee List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=15">Add Employee</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Settings .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 20px; margin-left: 10px;" aria-expanded="false" data-target="#submenu-1-31" aria-controls="submenu-1-31"><!-- <i class="fas fa-cogs mr-3" style="color:light; margin-left:3px; font-size:35px;"></i> --><b>Settings</b></a>
          <div id="submenu-1-31" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="admin_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
                  

<?php } else{ ?>


                   <!-- ................. Customers .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; color: white; margin-left: 10px;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><b> Customers</b></a>
          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="view.php">Customers List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=27">Contact Massages</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Products .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; margin-left: 10px;" data-target="#submenu-1-17" aria-controls="submenu-1-17"><b>Products</b></a>
          <div id="submenu-1-17" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5"href="dashboard.php?id=16">Add Product List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5"href="product_view.php">Product Details</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Product Categories .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;margin-left: 10px;"  data-target="#submenu-1-10" aria-controls="submenu-1-10"><b>Categories</b></a>
          <div id="submenu-1-10" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=17">Add Categories</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=18">View Categories</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

       <!-- ................. Autor .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; margin-left: 10px;"  data-target="#submenu-1-32" aria-controls="submenu-1-32"><b>Promotion</b></a>
          <div id="submenu-1-32" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=1">Add Promotion</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=3">View Promotion</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
       <!-- ................. Oders .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="dashboard.php" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; margin-left: 10px;" data-target="#submenu-1-5s" aria-controls="submenu-1-5s"><b> Oders</b></a>
          <div id="submenu-1-5s" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=2">Pending Oders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=21">Accepted Oders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=7">Shipped Oders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=8">Completed Oders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=26">Completed Oders without Paid</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=22">Rejected Oders</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Book Store .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px; margin-left: 10px;" data-target="#submenu-1-6" aria-controls="submenu-1-6"><b> Custome Website</b></a>
          <div id="submenu-1-6" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=20">Slider Galary</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="dashboard.php?id=10">Pramotion Banners</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>


      <!-- ................. Settings .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 20px; margin-left: 10px;" aria-expanded="false" data-target="#submenu-1-31" aria-controls="submenu-1-31"><!-- <i class="fas fa-cogs mr-3" style="color:light; margin-left:3px; font-size:35px;"></i> --><b>Settings</b></a>
          <div id="submenu-1-31" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="admin_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="employee_username_change.php">Change Username</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-5" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>


<?php } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content" style="background-color: white; color: black; border: none; width: 100%;">
                    <!-- <div class="row" style="background-color: white;"> -->
            
          
                  <?php

                  if(isset($_REQUEST['id']))
                  {

                  // <!-- **********************Start Product Categories Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==18)
                                {
                                  $count=1;
                                    $viewquery = " SELECT * FROM category";
                                    $viewresult = mysqli_query($con,$viewquery);

                                    echo '
                                    <div class="view_div">
                                    <h1 class="form_title"> Product Categories </h1><br>


                                  <table class="table_new"> 


                                    <table style="width : 40%;" class="table_new"> 
                                      <tr>
                                        <th style="width : 10%"> Categori Name </th>
                                        <th style="width : 10%"> Edit </th>
                                        <th style="width : 5%"> Delete </th>  
                                      </tr>';

                                    while($row = mysqli_fetch_assoc($viewresult))
                                    {
                                      echo '
                                      <tr>
                                      <td>'.$row['cat_name'].'</td>

                                      <td><a href="edit.php?cat_id='.$row['cat_id'].'">Edit</a></td>
                                      <td><a href="delete.php?cat_id='.$row['cat_id'].'">Delete</a></td>
                                      </tr>
                      
                                      ';
                                      $count++;
                                    }
                                    echo '</table></div>';
                                }

                  // <!-- **********************End Product Categories Section Pannel ************************ -->
                  // <!-- **********************End Slider galary Section Pannel ************************ -->
                      $id = $_REQUEST['id'];
                        if($id==20)
                        {
                          echo '<div class="view_div">
                            <h1 class="form_title"> Slider Manager </h1><br><br><br><br>
                            <h4 class="form_title"> Slider Banner size is 1000 X 250</h4><br><br>

                            <button type="submit" onclick="window.location.href=\'image_upload.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px; float:left;">Add Slider</button><br><br><br>

                            <button type="submit" onclick="window.location.href=\'chage_image_slider.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px;float:left;">Edit Slider Images</button><br><br><br>

                            <button type="submit" onclick="window.location.href=\'remove_image.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px; float:left;">Remove Slider</button>

                          </div>';
                          
                        }
                  // <!-- **********************End Slider galary Section Pannel ************************ -->
                  // <!-- **********************End Slider galary Section Pannel ************************ -->
                      $id = $_REQUEST['id'];
                        if($id==10)
                        {
                          echo '<div class="view_div">
                            <h1 class="form_title"> Promotion Banner Manager </h1><br><br><br><br>
                            <h4 class="form_title"> Promotion Banner size is 1000 X 500</h4><br><br>

                            <button type="submit" onclick="window.location.href=\'banner_upload.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px; float:left;">Add Banner</button><br><br><br>

                            <button type="submit" onclick="window.location.href=\'change_banner_image.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px;float:left;">Change Banner Images</button><br><br><br>

                            <button type="submit" onclick="window.location.href=\'remove_banner.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px; float:left;">Remove Banner</button>

                          </div>';
                          
                        }
                  // <!-- **********************End Slider galary Section Pannel ************************ -->

                              
                  // <!-- **********************Start View Employee Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==14)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM employee";
                                  $viewresult = mysqli_query($con,$viewquery);
                        

                                  echo '
                                  <div class="view_div">
                                  <h1 class="form_title"> Employee </h1></br>


                                  <table class="table_new"> 
                                    <tr>
                                      <th style="width : 15%"> Name </th>
                                      <th style="width : 15%"> Address </th>
                                      <th style="width : 11%"> Phone Number </th>
                                      <th style="width : 10%"> Email </th>
                                      <th style="width : 8%"> Gender </th>
                                      <th style="width : 10%"> Regi Date </th>
                                      <th style="width : 5%"> Edit </th>  
                                      <th style="width : 5%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if(!empty($row['full_name']) && $row['username'] != 'admin'){

                                    echo '
                                    <tr>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['address'].'</td>
                                    <td>'.$row['phone_number'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['gender'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td><a href="edit.php?emp_id='.$row['emp_id'].'">Edit</a></td>
                                    <td><a href="delete.php?emp_id='.$row['emp_id'].'">Delete</a></td>
                                    </tr>
                                    ';
                                    $count++;
                                    }
                                  }
                                  echo '</table></div>';
                                }
                  // <!-- **********************End View Employee Section Pannel ************************ -->
                  // <!-- **********************Start View Employee Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==27)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM message";
                                  $viewresult = mysqli_query($con,$viewquery);
                        

                                  echo '
                                  <div class="view_div">
                                  <h1 class="form_title"> Customer Massages </h1></br>


                                  <table class="table_new"> 
                                    <tr>
                                      <th style="width : 15%"> Name </th>
                                      <th style="width : 15%"> Email </th>
                                      <th style="width : 11%"> Subject </th>
                                      <th style="width : 10%"> Message </th>
                                      <th style="width : 10%"> Date </th>
                                      <th style="width : 5%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    

                                    echo '
                                    <tr>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['subject'].'</td>
                                    <td>'.$row['message'].'</td>
                                    <td>'.$row['trn_date'].'</td>
                                    <td><a href="delete.php?m_id='.$row['m_id'].'">Delete</a></td>
                                    </tr>
                                    ';
                                    $count++;
                                    
                                  }
                                  echo '</table></div>';
                                }
                  // <!-- **********************End View Employee Section Pannel ************************ -->

                  // <!-- **********************Start Order Section Pannel ************************ -->
                  // <!-- **********************Start Pending Order Section Pannel ************************ -->


                              $id = $_REQUEST['id'];
                                if($id==2) 
                                {
                                              ?>            
                                              <div class="row">
                                                
                                              <div class="col-md-12 text-left">

                                     <?php   
                                          $count = 0;
                                          $viewquery = " SELECT * FROM getorder";
                                          $viewresult = mysqli_query($con,$viewquery);
                                   ?>
                                
                                    <?php 

                                          while($row1 = mysqli_fetch_assoc($viewresult)) { 

                                        if ($row1['accept'] == 'Pending' && $row1['shipped'] == 'Pending' && $row1['deliver'] == 'Pending') { ?>

                                          <div class="row" style="padding: 2%; font-size: 13px;  margin: 1%; color: #00394e; background-color: #f9f6f7">

                                            <div class="dropdown-divider"></div>
                                            <div class="col-sm-3 justify-content-left">
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
                                                      <p class="ml-5" style="color:red;">Product was Removed </p>
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
                                            <div class="col-sm-2">
                                            <?php $viewquerys = " SELECT * FROM customer where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              if ($row3 = mysqli_fetch_assoc($viewresults)) { ?>

                                              <p><?php echo $row3['first_name'].' '.$row3['last_name']; ?></p>
                                              <p><?php echo $row3['phone']; ?></p>
                                              <p><?php echo $row3['address']; ?></p>

                                            <?php }else{ 

                                              $viewquerys = " SELECT * FROM customer_backup where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              $row5 = mysqli_fetch_assoc($viewresults);


                                              ?>

                                                <p><?php echo $row5['name']; ?></p>
                                                <p><?php echo $row5['phone']; ?></p>
                                                <p><?php echo $row1['address']; ?></p>
                                                <p><?php echo $row5['email']; ?></p>
                                                <p style="color:red;">Customer Account Deleted </p>

                                            <?php } ?>

                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Accepting Order</p>
                                              <p><?php echo $row1['accept']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Shipping Order</p>
                                              <p><?php echo $row1['shipped']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Delivering Order</p>
                                              <p><?php echo $row1['deliver']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Payments Order</p>
                                              <p><?php echo $row1['paid']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p><?php echo $row1['trn_date']; ?></p>
                                            </div>
                                          <div class="col-sm-6 mt-5">
                                                <?php 
                                                echo '
                                                      <h4><a  href="ordermanager.php?accept='.$row1['order_id'].'">Accept this Order</a></h4>
                                                      <h4><a  href="ordermanager.php?acceptshiped='.$row1['order_id'].'">Accept and Shipped this Order</a></h4>
                                                      <p><a  href="ordermanager.php?reject='.$row1['order_id'].'">Reject This Order</a></p>';
                                                 ?>
                                          </div>
                    
                                            </div>
                                          
                                          <?php  $count++;
                                            
                                          
                                        }
                                      }
                                     ?>
                                                        
                                </div>
                                              </div>
                                
                                <?php }
                       // <!-- **********************End Pending Order Section Pannel ************************ -->
                       // <!-- **********************Start Accept Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==21)
                                {
                                  ?>            
                                              <div class="row">
                                                
                                              <div class="col-md-12 text-left">

                                     <?php   
                                          $count = 0;
                                          $viewquery = " SELECT * FROM getorder";
                                          $viewresult = mysqli_query($con,$viewquery);
                                   ?>
                                
                                    <?php 

                                          while($row1 = mysqli_fetch_assoc($viewresult)) { 

                                        if ($row1['accept'] == 'Accepted' && $row1['shipped'] == 'Pending' && $row1['deliver'] == 'Pending') { ?>

                                          <div class="row" style="padding: 2%; font-size: 13px;  margin: 1%; color: #00394e; background-color: #f9f6f7; border:2px solid black;">

                                            <div class="dropdown-divider"></div>
                                            <div class="col-sm-3 justify-content-left">
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
                                                      <p class="ml-5" style="color:red;">Product was Removed </p>
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
                                            <div class="col-sm-2">
                                            <?php $viewquerys = " SELECT * FROM customer where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              if ($row3 = mysqli_fetch_assoc($viewresults)) { ?>

                                              <p><?php echo $row3['first_name'].' '.$row3['last_name']; ?></p>
                                              <p><?php echo $row3['phone']; ?></p>
                                              <p><?php echo $row3['address']; ?></p>

                                            <?php }else{ 

                                              $viewquerys = " SELECT * FROM customer_backup where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              $row5 = mysqli_fetch_assoc($viewresults);


                                              ?>

                                                <p><?php echo $row5['name']; ?></p>
                                                <p><?php echo $row5['phone']; ?></p>
                                                <p><?php echo $row1['address']; ?></p>
                                                <p><?php echo $row5['email']; ?></p>
                                                <p style="color:red;">Customer Account Deleted </p>

                                            <?php } ?>

                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Accepting Order</p>
                                              <p><?php echo $row1['accept']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Shipping Order</p>
                                              <p><?php echo $row1['shipped']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Delivering Order</p>
                                              <p><?php echo $row1['deliver']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Payments Order</p>
                                              <p><?php echo $row1['paid']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p><?php echo $row1['trn_date']; ?></p>
                                            </div>
                                            <div class="col-sm-6 mt-5">
                                                <?php 
                                                echo '
                                                      <h4><a  href="ordermanager.php?shiped='.$row1['order_id'].'">Change to Shipped</a></h4>
                                                      <p><a  href="ordermanager.php?rejectaccept='.$row1['order_id'].'">Reject This Order</a></p>';
                                                 ?>
                                          </div>
                    
                                            </div>

                                          
                                          <?php  $count++;
                                            
                                          
                                        }
                                      }
                                     ?>
                                                        
                                </div>
                                              </div>
                                
                                <?php }
                  // <!-- **********************End Accept Section Pannel ************************ -->

                  // <!-- **********************Start Shipped Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==7)
                                {
                                  ?>            
                                              <div class="row">
                                                
                                              <div class="col-md-12 text-left">

                                     <?php   
                                          $count = 0;
                                          $viewquery = " SELECT * FROM getorder";
                                          $viewresult = mysqli_query($con,$viewquery);
                                   ?>
                                
                                    <?php 

                                          while($row1 = mysqli_fetch_assoc($viewresult)) { 

                                        if ($row1['accept'] == 'Accepted' && $row1['shipped'] == 'Shipped' && $row1['deliver'] == 'Pending') { ?>

                                          <div class="row" style="padding: 2%; font-size: 13px;  margin: 1%; color: #00394e; background-color: #f9f6f7">

                                            <div class="dropdown-divider"></div>
                                            <div class="col-sm-3 justify-content-left">
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
                                                      <p class="ml-5" style="color:red;">Product was Removed </p>
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
                                            <div class="col-sm-2">
                                            <?php $viewquerys = " SELECT * FROM customer where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              if ($row3 = mysqli_fetch_assoc($viewresults)) { ?>

                                              <p><?php echo $row3['first_name'].' '.$row3['last_name']; ?></p>
                                              <p><?php echo $row3['phone']; ?></p>
                                              <p><?php echo $row3['address']; ?></p>

                                            <?php }else{ 

                                              $viewquerys = " SELECT * FROM customer_backup where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              $row5 = mysqli_fetch_assoc($viewresults);


                                              ?>

                                                <p><?php echo $row5['name']; ?></p>
                                                <p><?php echo $row5['phone']; ?></p>
                                                <p><?php echo $row1['address']; ?></p>
                                                <p><?php echo $row5['email']; ?></p>
                                                <p style="color:red;">Customer Account Deleted </p>

                                            <?php } ?>

                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Accepting Order</p>
                                              <p><?php echo $row1['accept']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Shipping Order</p>
                                              <p><?php echo $row1['shipped']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Delivering Order</p>
                                              <p><?php echo $row1['deliver']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Payments Order</p>
                                              <p><?php echo $row1['paid']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p><?php echo $row1['trn_date']; ?></p>
                                            </div>
                                            <div class="col-sm-6 mt-5">
                                                <?php 
                                                echo '
                                                      <h4><a  href="ordermanager.php?paided='.$row1['order_id'].'">Complete Order</a></h4>
                                                      <h4><a  href="ordermanager.php?diliverd='.$row1['order_id'].'">Complete Order without Paid</a></h4>
                                                      <p><a  href="ordermanager.php?rejectshiped='.$row1['order_id'].'">Reject This Order</a></p>';
                                                 ?>
                                          </div>
                    
                                            </div>
                                          
                                          <?php  $count++;
                                            
                                          
                                        }
                                      }
                                     ?>
                                                        
                                </div>
                                              </div>
                                
                                <?php }
                  // <!-- **********************End Shipped Section Pannel ************************ -->
                  // <!-- **********************Start Completed Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==8)
                                {
                                  ?>            
                                              <div class="row">
                                                
                                              <div class="col-md-12 text-left">

                                     <?php   
                                          $count = 0;
                                          $viewquery = " SELECT * FROM getorder";
                                          $viewresult = mysqli_query($con,$viewquery);
                                   ?>
                                
                                    <?php 

                                          while($row1 = mysqli_fetch_assoc($viewresult)) { 

                                        if ($row1['accept'] == 'Accepted' && $row1['shipped'] == 'Shipped' && $row1['deliver'] == 'Diliverd' && $row1['paid'] == 'Paid') { ?>

                                          <div class="row" style="padding: 2%; font-size: 13px;  margin: 1%; color: #00394e; background-color: #f9f6f7">

                                            <div class="dropdown-divider"></div>
                                            <div class="col-sm-3 justify-content-left">
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
                                                      <p class="ml-5" style="color:red;">Product was Removed </p>
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
                                            <div class="col-sm-2">
                                            <?php $viewquerys = " SELECT * FROM customer where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              if ($row3 = mysqli_fetch_assoc($viewresults)) { ?>

                                              <p><?php echo $row3['first_name'].' '.$row3['last_name']; ?></p>
                                              <p><?php echo $row3['phone']; ?></p>
                                              <p><?php echo $row3['address']; ?></p>

                                            <?php }else{ 

                                              $viewquerys = " SELECT * FROM customer_backup where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              $row5 = mysqli_fetch_assoc($viewresults);


                                              ?>

                                                <p><?php echo $row5['name']; ?></p>
                                                <p><?php echo $row5['phone']; ?></p>
                                                <p><?php echo $row1['address']; ?></p>
                                                <p><?php echo $row5['email']; ?></p>
                                                <p style="color:red;">Customer Account Deleted </p>

                                            <?php } ?>

                                           </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Accepting Order</p>
                                              <p><?php echo $row1['accept']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Shipping Order</p>
                                              <p><?php echo $row1['shipped']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Delivering Order</p>
                                              <p><?php echo $row1['deliver']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Payments Order</p>
                                              <p><?php echo $row1['paid']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p><?php echo $row1['trn_date']; ?></p>
                                            </div>
                                            <div class="col-sm-6 mt-5">
                                                <?php 
                                                echo '
                                                      <h4><a  href="ordermanager.php?deletecomplete='.$row1['order_id'].'">Delete This Order</a></h4>';
                                                 ?>
                                          </div>
                    
                                            </div>
                                          
                                          <?php  $count++;
                                            
                                          
                                        }
                                      }
                                     ?>
                                                        
                                </div>
                                              </div>
                                
                                <?php }
                  // <!-- **********************End Completed Section Pannel ************************ -->
                  // <!-- **********************Start Rejected Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==22)
                                {
                                  ?>            
                                              <div class="row">
                                                
                                              <div class="col-md-12 text-left">

                                     <?php   
                                          $count = 0;
                                          $viewquery = " SELECT * FROM getorder";
                                          $viewresult = mysqli_query($con,$viewquery);
                                   ?>
                                
                                    <?php 

                                          while($row1 = mysqli_fetch_assoc($viewresult)) { 

                                        if ($row1['accept'] == 'Reject' || $row1['shipped'] == 'Reject' || $row1['deliver'] == 'Reject') { ?>

                                          <div class="row" style="padding: 2%; font-size: 13px;  margin: 1%; color: #00394e; background-color: #f9f6f7">

                                            <div class="dropdown-divider"></div>
                                            <div class="col-sm-3 justify-content-left">
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
                                                      <p class="ml-5" style="color:red;">Product was Removed </p>
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
                                            <div class="col-sm-2">
                                            <?php $viewquerys = " SELECT * FROM customer where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              if ($row3 = mysqli_fetch_assoc($viewresults)) { ?>

                                              <p><?php echo $row3['first_name'].' '.$row3['last_name']; ?></p>
                                              <p><?php echo $row3['phone']; ?></p>
                                              <p><?php echo $row3['address']; ?></p>

                                            <?php }else{ 

                                              $viewquerys = " SELECT * FROM customer_backup where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              $row5 = mysqli_fetch_assoc($viewresults);


                                              ?>

                                                <p><?php echo $row5['name']; ?></p>
                                                <p><?php echo $row5['phone']; ?></p>
                                                <p><?php echo $row1['address']; ?></p>
                                                <p><?php echo $row5['email']; ?></p>
                                                <p style="color:red;">Customer Account Deleted </p>

                                            <?php } ?>

                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Accepting Order</p>
                                              <p><?php echo $row1['accept']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Shipping Order</p>
                                              <p><?php echo $row1['shipped']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Delivering Order</p>
                                              <p><?php echo $row1['deliver']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Payments Order</p>
                                              <p><?php echo $row1['paid']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p><?php echo $row1['trn_date']; ?></p>
                                            </div>
                                            <div class="col-sm-6 mt-5">
                                                <?php 
                                                echo '
                                                      <p><a  href="ordermanager.php?deletereject='.$row1['order_id'].'">Delete This Order</a></p>';
                                                 ?>
                                          </div>
                    
                                            </div>
                                          
                                          <?php  $count++;
                                            
                                          
                                        }
                                      }
                                     ?>
                                                        
                                </div>
                                              </div>
                                
                                <?php }
                  // <!-- **********************End Rejected Section Pannel ************************ -->
                  // <!-- **********************Start Complete Order Without Paid Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==26)
                                {
                                  ?>            
                                              <div class="row">
                                                
                                              <div class="col-md-12 text-left">

                                     <?php   
                                          $count = 0;
                                          $viewquery = " SELECT * FROM getorder";
                                          $viewresult = mysqli_query($con,$viewquery);
                                   ?>
                                
                                    <?php 

                                          while($row1 = mysqli_fetch_assoc($viewresult)) { 

                                        if ($row1['accept'] == 'Accepted' && $row1['shipped'] == 'Shipped' && $row1['deliver'] == 'Diliverd' && $row1['paid'] == 'Pending') {

                                          
                                            ?>

                                          <div class="row" style="padding: 2%; font-size: 13px;  margin: 1%; color: #00394e; background-color: #f9f6f7">

                                            <div class="dropdown-divider"></div>
                                            <div class="col-sm-3 justify-content-left">
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
                                                    <p class="ml-5" style="color:red;">Product was Removed </p>
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
                                            <div class="col-sm-2">
                                            <?php $viewquerys = " SELECT * FROM customer where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              if ($row3 = mysqli_fetch_assoc($viewresults)) { ?>

                                              <p><?php echo $row3['first_name'].' '.$row3['last_name']; ?></p>
                                              <p><?php echo $row3['phone']; ?></p>
                                              <p><?php echo $row3['address']; ?></p>

                                            <?php }else{ 

                                              $viewquerys = " SELECT * FROM customer_backup where customer_id = '".$row1['customer_id']."'";
                                              $viewresults = mysqli_query($con,$viewquerys);
                                              $row5 = mysqli_fetch_assoc($viewresults);


                                              ?>

                                                <p><?php echo $row5['name']; ?></p>
                                                <p><?php echo $row5['phone']; ?></p>
                                                <p><?php echo $row1['address']; ?></p>
                                                <p><?php echo $row5['email']; ?></p>
                                                <p style="color:red;">Customer Account Deleted </p>

                                            <?php } ?>

                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Accepting Order</p>
                                              <p><?php echo $row1['accept']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Shipping Order</p>
                                              <p><?php echo $row1['shipped']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Delivering Order</p>
                                              <p><?php echo $row1['deliver']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p style="color: maroon">Payments Order</p>
                                              <p><?php echo $row1['paid']; ?></p>
                                            </div>
                                            <div class="col-sm-1">
                                              <p><?php echo $row1['trn_date']; ?></p>
                                            </div>
                                            <div class="col-sm-6 mt-5">
                                                <?php 
                                                echo '
                                                      <h4><a  href="ordermanager.php?paided='.$row1['order_id'].'">Complete Order</a></h4>
                                                      <p><a  href="ordermanager.php?deletereject='.$row1['order_id'].'">Delete This Order</a></p>';
                                                 ?>
                                          </div>
                    
                                            </div>
                                          
                                          <?php  $count++;
                                            
                                          
                                        }
                                      }
                                     ?>
                                                        
                                </div>
                                              </div>
                                
                                <?php }
                  // <!-- **********************End Complete Order Without Paid Section Pannel ************************ -->
                 // <!-- **********************Start Employee Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==23)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM employee";
                                  $viewresult = mysqli_query($con,$viewquery);
                        

                                  echo '
                                  <div class="view_div">
                                  <h1 class="form_title"> Employee </h1></br>


                                  <table class="table_new"> 
                                    <tr>
                                      <th style="width : 15%"> Name </th>
                                      <th style="width : 15%"> Address </th>
                                      <th style="width : 11%"> Phone Number </th>
                                      <th style="width : 10%"> Email </th>
                                      <th style="width : 8%"> Gender </th>
                                      <th style="width : 10%"> Regi Date </th>
                                      <th style="width : 5%"> Edit </th>  
                                      <th style="width : 5%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if(!empty($row['full_name']) && $row['username'] != 'admin'){

                                    echo '
                                    <tr>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['address'].'</td>
                                    <td>'.$row['phone_number'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['gender'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td><a href="edit.php?emp_id='.$row['emp_id'].'">Edit</a></td>
                                    <td><a href="delete.php?emp_id='.$row['emp_id'].'">Delete</a></td>
                                    </tr>
                                    ';
                                    $count++;
                                    }
                                  }
                                  echo '</table></div>';
                                }
                  // <!-- **********************End Employee Section Pannel ************************ -->


                  // <!-- **********************End Order Section Pannel ************************ -->
                  // <!-- **********************End Order Section Pannel ************************ -->




                  // <!-- **********************Start View Promation Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==3)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM pramotion";
                                  $viewresult = mysqli_query($con,$viewquery);
                        

                                  echo '
                                  <div class="view_div">
                                  <h1 class="form_title"> Pramotion Details</h1></br>


                                  <table class="table_new"> 
                                    <tr>
                                      <th style="width : 15%"> Pramotion Code </th>
                                      <th style="width : 15%"> Amount </th>
                                      <th style="width : 11%"> Start Date </th>
                                      <th style="width : 10%"> End Date </th>
                                      <th style="width : 5%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {


                                    echo '
                                    <tr>
                                    <td>'.$row['pramo_code'].'</td>
                                    <td>'.$row['promo_precentage'].'%</td>
                                    <td>'.$row['start_date'].'</td>
                                    <td>'.$row['end_date'].'</td>

                                    <td><a href="delete.php?pramo_id='.$row['pramo_id'].'">Delete</a></td>
                                    </tr>
                                    ';
                                    $count++;
                                    
                                  }
                                  echo '</table></div>';
                                }
                  // <!-- **********************End View Pramotion Section Pannel ************************ -->
                  
                  // <!-- **********************Start Add Employee Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                 if($id==15)
                                 {


                                  echo '<form class="reg_form1" action="dashboard.php?id=15" method="POST">
                                      <h2 class="form_hed">Register Employes </h2> </br>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">

                                          <label for="name" class="a"><b>Full Name</b></label>
                                          <input type="text" class="form-control" name="name" placeholder="Full Name">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label><b>Email</b></label>
                                          <input type="text" class="form-control" name="email" placeholder="Email Address">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="address"><b>Address</b></label>
                                        <input type="text" class="form-control"  name="address" placeholder="Address">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="phone"><b>Phone Number</b></label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputState"><b>Gender</b></label>
                                          <select id="inputState" name="gender" class="form-control">
                                            <option selected></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                        </div>
                                        </div>

                                        <div class="form-row">
                                         <div class="form-group col-md-6">
                                        <label for="phone"><b>Usename</b></label>
                                        <input type="text" style="text-transform: uppercase;" class="form-control" name="uname" placeholder="Password">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="phone"><b>Password</b></label>
                                        <input type="password" class="form-control" name="pass" placeholder="Password">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                      <div class="form-group col-lg-6">
                                        <label for="phone"><b>Confirm Password</b></label>
                                        <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                                      </div>
                                      </div>

                                    <div class="dropdown-divider"></div>
                                     <div class="form-row">
                                     <div class="form-group col-lg-6">
                                     <button type="submit" name="submit" class="btn col-xl-10 btn-info" style="border-radius:20px;">Register</button>
                                     </div>
                                     </div>
                                    ';
                                    if(isset($_POST['submit'])){
                                      $fname = $_REQUEST['name'];
                                      $emails = $_REQUEST['email'];
                                      $address = $_REQUEST['address'];
                                      $phone = $_REQUEST['phone'];
                                      $gender = $_REQUEST['gender'];
                                      $uname = $_REQUEST['uname'];
                                      $pass = $_REQUEST['pass'];
                                      $conf_pass = $_REQUEST['conf_pass'];
                                      $cdate = date("Y/m/d m:H:s");


                                      if(!empty($fname)){
                                        if(!empty($emails)){
                                          if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
                                            if(!empty($address)){
                                              if(!empty($phone)){
                                              if(!empty($gender)){
                                                if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                                  if(!empty($gender)){
                                                    if(!empty($uname)){
                                                          if(!empty($pass)){
                                                            if(!empty($conf_pass)){
                                                              if($pass==$conf_pass){
                                                                  $query2="SELECT * FROM employee WHERE email='$emails'";
                                                                      $sql2=mysqli_query($con,$query2);

                                                                      if(mysqli_num_rows($sql2)>0){
                                                                          echo "<script>alert(\"Email already Exsisted\");</script>";
                                                                      }else{
                                                                          $query3="SELECT * FROM employee WHERE username='$uname'";
                                                                          $sql3=mysqli_query($con,$query3);

                                                                          if(mysqli_num_rows($sql3)>0){
                                                                              echo "<script>alert(\"Username already Exsisted\");</script>";
                                                                          }else{
                                                                                $query3="SELECT * FROM customer WHERE email='$emails'";
                                                                                $sql3=mysqli_query($con,$query3);

                                                                                if(mysqli_num_rows($sql3)>0){
                                                                                    echo "<script>alert(\"Email already Exsisted\");</script>";
                                                                                }else{
                                                                                      $q1="INSERT INTO employee(full_name,address,phone_number,email,gender,password,username,trndate) values('$fname','$address','$phone','$emails','$gender','".md5($pass)."','$uname','$cdate')";
                                                                                            $res1=mysqli_query($con,$q1);
                                                                                            if ( $res1) {

                                                                                                 echo '<script>alert("Medical Officer Registration is Scussessfully.");
                                                                                                 window.location.href="dashboard.php";
                                                                                                              </script>';
                                                                                                
                                                                                            }else{
                                                                                              echo "<script>alert(\"Medical Officer Registration is Not Scussess\");</script>";
                                                                                            }
                                                                                      }
                                                                                }
                                                                            }
                                                              }else{echo "<script>alert(\"Password is Not Match\");</script>";}
                                                            }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";}
                                                          }else{ echo "<script>alert(\"Enter Password\");</script>";}
                                                    }else{ echo "<script>alert(\"Enter Username\");</script>";}
                                                  }else{ echo "<script>alert(\"Select Gender\");</script>";}
                                                }else {echo "<script>alert(\"Enter Valid Phone Number\");</script>";}
                                                }else {echo "<script>alert(\"Select Your Gender\");</script>";}
                                              }else{ echo "<script>alert(\"Enter Phone Number\");</script>";}
                                            }else{ echo "<script>alert(\"Enter Address\");</script>";}
                                          }else {echo "<script>alert(\"Enter Valid Email Address\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Email\");</script>";}
                                      }else{ echo "<script>alert(\"Enter Full Name\");</script>";} 
                                  }echo '</form></div>'; //Register Form Validation

                              }

                  // <!-- **********************End Add employee Section Pannel ************************ -->
                  
                  // <!-- **********************Start Categories Section Pannel ************************ -->

                                $id = $_REQUEST['id'];
                                 if($id==17)
                                 {
                                 echo '<form class="reg_form1" action="dashboard.php?id=17" method="POST">
                                      <h2 class="form_hed">Add Categories </h2> </br>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">

                                          <label for="cat_name" class="a"><b>Categori Name</b></label>
                                          <input type="text" class="form-control" name="cat_name" placeholder="Categori Name">
                                        </div>
                                      </div>

                                    <div class="dropdown-divider"></div>
                                     <button type="submit" name="submit" class="btn col-md-3 btn-info" style="border-radius:20px;">Add Categories</button></br>
                                    ';
                                    if(isset($_POST['submit'])){
                                      $cat_name = $_REQUEST['cat_name'];

                                              if(!empty($cat_name)){
                                                  $q4 = "SELECT * FROM category WHERE cat_name='$cat_name'";
                                                  $res4 = mysqli_query($con,$q4);

                                                  if(mysqli_num_rows($res4)>0)
                                                  {
                                                    echo '<script>alert("Product Categori Alrady Saved.");
                                                    </script>';
                                                  }
                                                  else{
                                                    $q1="INSERT INTO category(cat_name) values('$cat_name')";
                                                          $res1=mysqli_query($con,$q1);
                                                          if ( $res1)
                                                          {

                                                               echo '<script>alert("Product Categori Saved is Scussessfully.");
                                                                </script>';
                                                          }else{
                                                            echo "<script>alert(\"Product Categori Save is Not Scussess\");</script>";
                                                          }
                                                  }
                                              }else{ echo "<script>alert(\"Please Enter Product Categories\");</script>";}
                                  }echo '</form>'; //Register Form Validation

                              }

                  // <!-- **********************End Categories Section Pannel ************************ -->
                  // <!-- **********************Start Categories Section Pannel ************************ -->

                                $id = $_REQUEST['id'];
                                 if($id==13)
                                 {

                                    $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";
                                  $qu = "SELECT * FROM getorder WHERE MONTH(trn_date) = MONTH(CURRENT_DATE()) AND YEAR(trn_date) = YEAR(CURRENT_DATE())";
                                  $viewresult = mysqli_query($con,$qu);


                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if($row['paid'] == 'Paid'){
                                      $total = $total + $row['amount'];
                                    $counts++;
                                    }
                                  }

                                  $qu1 = "SELECT * FROM getorder WHERE YEAR(trn_date) = YEAR(CURRENT_DATE())";
                                  $viewresult1 = mysqli_query($con,$qu1);


                                  while($row1 = mysqli_fetch_assoc($viewresult1))
                                  {
                                    if($row1['paid'] == 'Paid'){
                                      $total1 = $total1 + $row1['amount'];
                                    $count2++;
                                    }
                                  }
                                  echo '
                                  <div class="view_div">
                                  <h1 class="form_title"> Payments Summery </h1></br></br></br>
                                    <h3 class="form_title">Current Monthly Summery</h3></br></br>
                                  <div class="row ml-5">
                                    <h3 class="form_title">This Month Totale Income :   '.$total.' </h3></br>
                                  </div>
                                  <div class="row ml-5">
                                    <h3 class="form_title">This Month Totale Orders :   '.$counts.' </h3></br></br></br></br></br>
                                  </div>
                                    <h3 class="form_title">Year Summery</h3></br></br>
                                  <div class="row ml-5">
                                    <h3 class="form_title">This Year Totale Income :   '.$total1.' </h3></br>
                                  </div>
                                  <div class="row ml-5">
                                    <h3 class="form_title">This Year Totale Orders :   '.$total1.' </h3></br>
                                  </div>


                                  </div></br></br></br>
                                  ';
                          
                                  $viewquery = " SELECT * FROM getorder";
                                  $viewresult = mysqli_query($con,$viewquery);
                                  echo '
                                  <div class="view_div">
                                  <h1 class="form_title"> Payments </h1></br>


                                  <table class="table_new"> 
                                    <tr>
                                      <th style="width : 5%"> Order ID </th>
                                      <th style="width : 10%"> Payment Type </th>
                                      <th style="width : 15%"> Amount </th>
                                      <th style="width : 11%"> Paid </th>
                                      <th style="width : 10%"> Date </th>  

                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if($row['paid'] == 'Paid'){

                                    echo '
                                    <tr>
                                    <td>'.$row['order_id'].'</td>
                                    <td>'.$row['payment_type'].'</td>
                                    <td>Rs. '.$row['amount'].'</td>
                                    <td>'.$row['paid'].'</td>
                                    <td>'.$row['trn_date'].'</td>

                                    </tr>
                                    ';
                                    $count++;
                                    }
                                  }
                                  echo '</table></div>';
                              }

                  // <!-- **********************End Categories Section Pannel ************************ -->
                  // <!-- **********************Start Pramotion Section Pannel ************************ -->

                                $id = $_REQUEST['id'];
                                 if($id==1)
                                 {
                                 echo '<form class="reg_form1" action="dashboard.php?id=1" method="POST">
                                      <h2 class="form_hed">Add Promotion </h2> </br>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="name" class="a"><b>Promotion Code</b></label>
                                          <input type="text" class="form-control" name="code" placeholder="Promo Code">
                                          <label for="name" class="a"><b>don\'t use space</b></label>
                                        </div>
                                      </div>


                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label><b>Discount Precentage</b></label>
                                          <input type="text" class="form-control"  name="dis_precent" placeholder="Discount Precentage">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label><b>Discount Start date</b></label>
                                          <input type="date" name="start_date" id="myDate">
                                        </div>
                                      </div>


                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label><b>Discount Start date</b></label>
                                          <input type="date" name="end_date" id="myDate">
                                        </div>
                                      </div>


                                    <div class="dropdown-divider"></div>
                                     <button type="submit" name="submit" class="btn col-md-3 btn-info" style="border-radius:20px;">Add Pramotion</button></br>
                                    ';
                                    if(isset($_POST['submit'])){

                                      $code = $_REQUEST['code'];
                                      $dis_precent = $_REQUEST['dis_precent'];
                                      $start_date = $_REQUEST['start_date'];
                                      $end_date = $_REQUEST['end_date'];
                                      $cdate = date("Y/m/d m:H:s");


                                      if(!empty($code)){
                                        if(!empty($dis_precent)){
                                          if(preg_match("/[A-Z0-9]/", $code)){
                                                    $query2="SELECT * FROM pramotion WHERE pramo_code='$code'";
                                                        $sql2=mysqli_query($con,$query2);

                                                        if(mysqli_num_rows($sql2)>0){
                                                            echo "<script>alert(\"Pramo Code already Exsisted\");</script>";
                                                        }else{
                                                          

                                                            $q1="INSERT INTO pramotion(pramo_code,promo_precentage,start_date,end_date) values('$code','$dis_precent','$start_date','$end_date')";
                                                                  $res1=mysqli_query($con,$q1);
                                                                  if ( $res1) {

                                                                       echo '<script>alert("Pramotion Adding is Scussessfully.");
                                                                       window.location.href="dashboard.php?id=1";</script>';
                                                                      
                                                                  }else{
                                                                    echo "<script>alert(\"Medical Officer Registration is Not Scussess\");</script>";
                                                                  }
                                                            
                                                                
                                                              }

                                            }else {echo "<script>alert(\"Enter Valid Pramo Code\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Promotion Discount\");</script>";}
                                      }else{ echo "<script>alert(\"Enter Pramo Code\");</script>";} 
                                  }echo '</form></div>'; //Register Form Validation


                              }

                  // <!-- **********************End Pramotion Section Pannel ************************ -->
                  // <!-- **********************Start Product Add Section Pannel ************************ -->

                         $id = $_REQUEST['id'];
                             $cdate = date("Y/m/d");
                           if($id==16)
                           {
                                  $q4 = "SELECT * FROM product WHERE pid=(SELECT max(pid) FROM product);";
                                  $res4 = mysqli_query($con,$q4);
                                  $row2 = mysqli_fetch_assoc($res4);

                                  if (isset($row2['code'])) {
                                    $cat_id = $row2['code'];
                                    $last = substr(trim($cat_id), -1);
                                    $newCode = $last + 1;
                                    $new_last_code = "PC0".$newCode;
                                  }else{
                                    $new_last_code = "PC01";
                                  }

                                   echo '<form class="reg_form1" action="dashboard.php?id=16" method="POST" enctype="multipart/form-data">

                                   <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="code" class="a"><b>Product Code</b></label>
                                        <input type="text" class="form-control" style="text-transform: uppercase;" Value="'.$new_last_code.'" name="get_code" placeholder="Product Code">
                                      </div>
                                    </div>


                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="title" class="a"><b>Product Title</b></label>
                                        <input type="text" class="form-control" name="title" placeholder="Product Title">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="desc"><b>Description </b></label>
                                      <input type="text" class="form-control" name="desc" placeholder="Description ">
                                    </div>
                                    </div>
                                      <div class="form-row">
                                       <div class="form-group col-md-6">
                                      <label for="highlight"><b>Highlights </b></label>
                                      <input type="text" class="form-control" name="highlight" placeholder="Highlights">
                                    </div>
                                    </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputState"><b>Product Categories</b></label>
                                        <select id="inputState" name="cat" class="form-control">
                                        <option selected></option>
                                        ';
                                          $q3 = "SELECT * FROM category";
                                            $res3 = mysqli_query($con,$q3);
                                            $c=1;
                                            while($row=mysqli_fetch_assoc($res3)){
                                              echo "<option>".$row['cat_name']."</option>";
                                              $c++;
                                            }
                                        echo '</select>
                                      </div>
                                      </div>

                                      <div class="dropdown-divider" style="color:red;"></div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="original_price"><b>Original Price</b></label>
                                      <input type="text" class="form-control"  name="original_price" placeholder="Original Price">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="sell_price"><b>Selling Price</b></label>
                                      <input type="text" class="form-control"  name="sell_price" placeholder="Selling Price">
                                    </div>
                                    </div>

                                      <div class="form-row">
                                       <div class="form-group col-md-6">
                                      <label for="qnt"><b>Stock Quantity</b></label>
                                      <input type="text" class="form-control" name="qnt" placeholder="Stock Quantity">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                      <label for="warent"><b>Warrenty</b></label>
                                      <input type="text" class="form-control" name="warent" placeholder="Warrenty">
                                    </div>
                                    </div>

                                    <br>
                                    Select Product Front image to upload:
                                      <input type="file" name="file" /><br>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputState"><b>Availability</b></label>
                                          <select id="inputState" name="available" class="form-control">
                                            <option selected></option>
                                            <option>Yes</option>
                                            <option>No</option>
                                          </select>
                                        </div>
                                        </div>

                                  <div class="dropdown-divider"></div>
                                   <button type="submit" name="submit" class="btn col-md-3 btn-info" style="border-radius:20px; font-size :20px;">Add product</button>
                                  ';

                                 
                                  if(isset($_POST['submit'])){

                                    $code = $_REQUEST['get_code'];
                                    $title = $_REQUEST['title'];
                                    $desc = $_REQUEST['desc'];
                                    $highlight = $_REQUEST['highlight'];
                                    $cat = $_REQUEST['cat'];
                                    $original_price = $_REQUEST['original_price'];
                                    $sell_price = $_REQUEST['sell_price'];
                                    $qnt = $_REQUEST['qnt'];
                                    $warent = $_REQUEST['warent'];
                                    $available = $_REQUEST['available'];

                                    $name = $_FILES['file']['name'];
                                    $target_dir = "img/upload/product/";
                                    $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                    $extensions_arr = array("jpg","jpeg","png","gif");

                                    $cdate = date("Y/m/d m:H:s");

                                        if(!empty($title)){
                                          if(!empty($title)){
                                             if(!empty($desc)){
                                              if(!empty($highlight)){
                                                if(!empty($cat)){
                                                  if(!empty($original_price)){
                                                    if(!empty($sell_price)){
                                                      if(!empty($qnt)){
                                                          // if(!empty($image)){
                                                            if(!empty($available)){
                                                              if(!empty($warent)){

                                                            $q4 = "SELECT * FROM category WHERE cat_name='$cat'";
                                                            $res4 = mysqli_query($con,$q4);
                                                            $row2 = mysqli_fetch_assoc($res4);
                                                            $cat_id = $row2['cat_id'];


                                                                    $query3="SELECT * FROM product WHERE  title='$title'";
                                                                    $sql3=mysqli_query($con,$query3);

                                                                    if(mysqli_num_rows($sql3)>0)
                                                                    {
                                                                      echo '<script>alert("This Product is Alrady Here.");</script>';
                                                                    }else{
                                                                      if (in_array($imageFileType,$extensions_arr)) {

                                                                        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                                                                        $q1="INSERT INTO product(title,description,highlight,cat_id,original_price,sell_price,qnt,image,trn_date,available,code,warenty) values('$title','$desc','$highlight','$cat_id','$original_price','$sell_price','$qnt','$name','$cdate','$available','$code','$warent')";

                                                                            $res =  mysqli_query($con,$q1);
                                                                          if ($res) {
                                                                            echo '<script>alert("Product Stock Adding is Scussessfully.");</script>';
                                                                          }else{
                                                                            echo "<script>alert(\"Product Stock Adding is Not Scussess\");</script>";
                                                                          }

                                                                      }  
                                                                    }

                                                                }else{ echo "<script>alert(\"Please Set Warrenty\");</script>";}
                                                              }else{ echo "<script>alert(\"Please Set Availability\");</script>";}
                                                            // }else{ echo "<script>alert(\"Please Upload Image\");</script>";}
                                                          }else{ echo "<script>alert(\"Please Enter Stock Quntity\");</script>";}
                                                        }else{ echo "<script>alert(\"Please Enter Selling Price\");</script>";}
                                                      }else{ echo "<script>alert(\"Please Enter Original Price\");</script>";}
                                                    }else{ echo "<script>alert(\"Please Select Product Categories\");</script>";}
                                                  }else{ echo "<script>alert(\"Please Enter Highlight\");</script>";}
                                                }else{ echo "<script>alert(\"Please Enter Description\");</script>";}
                                              }else{echo "<script>alert(\"Please Enter Title\");</script>";}
                                            }else{echo "<script>alert(\"Please Enter Product Code\");</script>";}
                                        }

                              }
                  // <!-- **********************End Product Add Section Pannel ************************ -->
                 
                  }else{ 
                  // <!-- **********************Start Pie Chart Section Pannel ************************ -->

                    ?>
                    <div class="row">
                      <div class="col-md-4">
                        <?php  
                          $viewquery3 = "SELECT * FROM category";
                          $viewresult3 = mysqli_query($con,$viewquery3);
                          $stddata = mysqli_num_rows($viewresult3);


                        ?>
                        <h1 style="text-align: center;">Customer Base</h1>
                        <h1 style="font-size: 100px; text-align: center; color: green; padding: 5%;"><?php echo $stddata; ?></h1>

                      </div>
                      <div class="col-md-4">
                        <?php  
                          $viewquery3 = "SELECT * FROM product";
                          $viewresult3 = mysqli_query($con,$viewquery3);
                          $stddata = mysqli_num_rows($viewresult3);


                        ?>
                        <h1 style="text-align: center;">Listed Products</h1>
                        <h1 style="font-size: 100px; text-align: center; color: green; padding: 5%;"><?php echo $stddata; ?></h1>

                      </div>
                      <div class="col-md-4">
                        <?php  
                          $viewquery3 = "SELECT * FROM getorder";
                          $viewresult3 = mysqli_query($con,$viewquery3);
                          $stddata = mysqli_num_rows($viewresult3);


                        ?>
                        <h1 style="text-align: center;">Processing Orders</h1>
                        <h1 style="font-size: 100px; text-align: center; color: green; padding: 5%;"><?php echo $stddata; ?></h1>

                      </div>
              <?php if($a == 'admin'){ ?>      
                      <div class="col-md-5" style="background-color: #dff3ff; padding: 3%; margin-left: 10%; border-radius: 2em;">
                        <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";
                                  $qu = "SELECT * FROM getorder WHERE MONTH(trn_date) = MONTH(CURRENT_DATE()) AND YEAR(trn_date) = YEAR(CURRENT_DATE())";
                                  $viewresult = mysqli_query($con,$qu);


                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if($row['paid'] == 'Paid'){
                                      $total = $total + $row['amount'];
                                    $counts++;
                                    }
                                  }


                        ?>
                        <h1 style="text-align: center;font-size: 40px">This Month Net Income</h1>
                        <h1 style="font-size: 70px; text-align: center; color: green; padding: 5%;">Rs. <?php echo $total; ?></h1>

                      </div>
                      <div class="col-md-5 ml-5" style="background-color: #dff3ff; padding: 3%; border-radius: 2em;">
                        <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";

                                  $qu1 = "SELECT * FROM getorder WHERE YEAR(trn_date) = YEAR(CURRENT_DATE())";
                                  $viewresult1 = mysqli_query($con,$qu1);


                                  while($row1 = mysqli_fetch_assoc($viewresult1))
                                  {
                                    if($row1['paid'] == 'Paid'){
                                      $total1 = $total1 + $row1['amount'];
                                    $count2++;
                                    }
                                  }
                          


                        ?>
                        <h1 style="text-align: center; font-size: 40px">This Year Net Income</h1>
                        <h1 style="font-size: 70px; text-align: center; color: green; padding: 5%;">Rs. <?php echo $total1; ?></h1>

                      </div>

                    </div>
<?php } ?>
                  <?php

                  // $facArray = array("Management & Commerce","Technology", "Applied Sciences", "Engineering","Arts & Culture","Islamic Studies & Arabic Language");
                  $viewquery3 = "SELECT * FROM category";
                  $viewresult3 = mysqli_query($con,$viewquery3);

                   $count = 0;
                   // $arrlength = count($facArray);

                    ?>
                    
                   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                             ['Task', 'Hours per Day'],

                  <?php while($rows = mysqli_fetch_assoc($viewresult3)){
                         $viewquery = " SELECT * FROM product join category on product.cat_id =  category.cat_id where product.cat_id = '".$rows['cat_id']."'";
                        $viewresult = mysqli_query($con,$viewquery);
                        $stddata = mysqli_num_rows($viewresult);

                          echo "
                            ['".$rows['cat_name']."',  ".$stddata."],";

                          $count++;
                      } ?>
                          ]);

                          var options = {
                            title: 'Product Listing Summery'
                          };

                          var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

                          chart.draw(data, options);
                        }
                      </script>
                  <!-- <div class="col-md-12"><h1 style="margin-top: 5%; margin-left: 10%; text-align: center; color: #0f3460">Product Listing Summery</h1></div> -->
                  <div class="col-md-10" id="piechart1" style=" height: 30vw; margin-left: 8%; margin-top: 10%;"></div>

                   <!-- **********************End Pie Chart Section Pannel ************************ -->


                  <!-- where cat_id = '".$row['cat_id']."' -->


                  <?php } ?>

                  <style type="text/css">
                    form.reg_form{
                      width: 100%;
                      margin-top: 2%;
                      background-color: gray;
                      border-radius: 35px;
                      padding: 35px;
                    }
                    form.reg_form label{
                      font-size: 20px;

                    }
                    form.reg_form input{
                      font-size: 20px;
                    }


                  </style>
                  </div>
                          </div>
                        </div>
                      </div>
                   </div>
                  <!-- **********************End Body Content Pannel ************************ -->
                    </body>

                  <style type="text/css">
                    .footer{
                      width: 100%;
                      height: 70px;
                      background-color: #0f3460;
                      text-align: left;
                      padding: 1%;
                    }


                    .view_title{
                      text-decoration: none;

                    }
                  </style>
                </div>
            <!-- </div> -->
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div><!-- /#wrapper -->
    
  </div>
</body>
</html>