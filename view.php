<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 
?>
<!DOCTYPE html>
<html>
<head>
  <title>SEUSL Health Center</title>

  <!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form_new.css">
      <!-- Load Icon -->
  <link rel="icon" type="image/png" href="img/icon/92132887_1057695377947727_5332802222742831104_o.jpg" sizes="300x300" />

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="js/a.js"></script>
    <script src="js/b.js"></script>
    <script src="js/c.js"></script> 

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/npm.js"></script>


</head>
<body>
<div class="container-fluid ">
      <div class="row p-3" style="border-bottom: 3px solid black; background-color: #00394e">
        <div class="col-md-3 ">
          <h3 class=""><a class="text-light" style="text-decoration: none;" href="dashboard.php"><b><i class="fas fa-arrow-left mr-3"></i></b></a></h3>
          <!-- <h3 class=""><a class="text-light" style="text-decoration: none; float: right;" href="dashboard.php"><b>GIGABYETE Customer Details</b></a></h3> -->
        </div>
        <div class="col-md-9 ">
          <!-- <h3 class=""><a class="text-light" style="text-decoration: none;" href="dashboard.php"><b><i class="fas fa-arrow-left mr-3"></i></b></a></h3> -->
          <h3 class=""><a class="text-warning" style="text-decoration: none; float: right;" href="dashboard.php"><b>GIGABYETE Customer Base </b></a></h3>
        </div>
      </div>
    </div><!-- Nav Bar End -->
</body>
</html>


</style>
<?php
require_once 'connection.php';


  $count=1;
  $viewquery = " SELECT * FROM customer";
  $viewresult = mysqli_query($con,$viewquery);

  echo '
  <div class="view_div mt-1 ml-1">
  <h1 class="form_title"> Customer Base</h1></br>


  <table style= "padding :2%; width:99%; margin-left:0.5%;" class="table_new"> 
  <tr>
    <th style="width : 15%"> First Name </th>
    <th style="width : 10%"> Last Name </th>
    <th style="width : 10%"> Date of Birth </th>
    <th style="width : 15%"> Phone Number </th>
    <th style="width : 10%"> Email </th>
    <th style="width : 15%"> Addresss </th>

    <th style="width : 10%"> Delete </th>  
  </tr>';

  while($row = mysqli_fetch_assoc($viewresult))
  {
  echo '
  <tr>
  <td>'.$row['first_name'].'</td>
  <td>'.$row['last_name'].'</td>
  <td>'.$row['date_of_birth'].'</td>
  <td>'.$row['phone'].'</td>
  <td>'.$row['email'].'</td>
  <td>'.$row['address'].'</td>

  <td><a href="delete.php?customer_id='.$row['customer_id'].'">Delete</a></td>
  </tr>
  ';
  $count++;
  }


?>