
<!DOCTYPE html>
<html>
<head>
  <title>GIGABYTE</title>

  <!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form2.css">
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
          <h3 class=""><a class="text-warning" style="text-decoration: none; float: right;" href="dashboard.php"><b>GIGABYETE Product Manager </b></a></h3>
        </div>
      </div>
    </div><!-- Nav Bar End -->
</body>
</html>


</style>
<?php
require_once 'connection.php';


  $count=1;
  $viewquery = " SELECT * FROM product";
  $viewresult = mysqli_query($con,$viewquery);
?>
  <div class="view_div mt-1 ml-1">
  <h1 class="form_title"> Product List</h1></br>


  <table style= "padding :2%; width:100%; margin-left:0.5%;" class="table_new_large"> 
  <tr>
    <th style="width : 6%"> Product Code </th>
    <th style="width : 9%"> Title </th>
    <th style="width : 18%"> Description </th>
    <th style="width : 10%"> Hightlight </th>
    <th style="width : 8%"> Categories </th>
    <th style="width : 6%"> Original Price </th>
    <th style="width : 5%"> Selling Price </th>
    <th style="width : 5%"> Quntity </th>
    <th style="width : 8%"> Image </th>
    <th style="width : 8%"> Trn date </th>
    <th style="width : 7%"> Available </th>

    <th style="width : 5%"> Edit </th>  
    <th style="width : 5%"> Delete </th>  
  </tr>
<?php
  while($row = mysqli_fetch_assoc($viewresult))
  {
    $viewquery1 = " SELECT * FROM category where cat_id='".$row['cat_id']."'";
    $viewresult1 = mysqli_query($con,$viewquery1);
    $row1 = mysqli_fetch_assoc($viewresult1);
    $image = $row['image'];
    $image_src = "upload/".$image;

  echo '
  <tr>
  <td>'.$row['code'].'</td>
  <td>'.$row['title'].'</td>
  <td>'.$row['description'].'</td>
  <td>'.$row['highlight'].'</td>
  <td>'.$row1['cat_name'].'</td>
  <td>'.$row['original_price'].'</td>
  <td>'.$row['sell_price'].'</td>
  <td>'.$row['qnt'].'</td>
  <td><img width="100%" src='.$image_src.' ></td>
  <td>'.$row['trn_date'].'</td>
  <td>'.$row['available'].'</td>

  <td><a href="edit.php?sid='.$row['pid'].'">Edit</a></td>
  <td><a href="delete.php?sid='.$row['pid'].'">Delete</a></td>
  </tr>
  ';
  $count++;
  }


?>