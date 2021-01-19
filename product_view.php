<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 
?>
<!DOCTYPE html>
<html>
<head>
  <title>GIGABYTE</title>

  <!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form2.css">
    <link rel="stylesheet" type="text/css" href="css/dash/dash_style1.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/doc.js"></script>

      <!-- Load Icon -->
    <link rel="icon" type="image/png" href="img/icon/92132887_1057695377947727_5332802222742831104_o.jpg" sizes="300x300" />

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">


</head>
<body>
<div class="container-fluid ">
      <div class="row p-3" style="border-bottom: 3px solid black; background-color: #00394e">
        <div class="col-md-3 ">
          <h3 class=""><a class="text-light" style="text-decoration: none;" href="dashboard.php"><b><i class="fas fa-arrow-left mr-3"></i></b></a></h3>
        </div>
        <div class="col-md-9 ">
          <h3 class=""><a class="text-warning" style="text-decoration: none; float: right; font-size: 30px;" href="dashboard.php"><b>GIGABYETE Product Manager </b></a></h3>
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
   <form class="form-inline col-6 mt-5" action="product_view.php" method="POST">
    <input class="form-control form-control-sm ml-3 w-50" style="text-transform: uppercase; font-size: 15px;" name="search_box" type="text" placeholder="Enter Product Code"
      aria-label="Search">
    <button type="submit" name="submit" style="font-size: 15px; " class="btn col-2 btn-rounded btn-info ml-5">Search</button>
    </form>
  <div class="view_div mt-1 ml-1">
  <a href=""><h1 class="form_title"> Product List</h1></a></br><br>

  <?php if (isset($_POST['submit'])) {

        $search = $_REQUEST['search_box'];
      
        $count=1;
        $viewquery = " SELECT * FROM product where code = '".$search."' ";
        $viewresult = mysqli_query($con,$viewquery); ?>



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

            <th style="width : 5%"> Warrenty </th>  
            <th style="width : 5%"> Option </th>  
          </tr>
        <?php
          while($row = mysqli_fetch_assoc($viewresult))
          {
            $viewquery1 = " SELECT * FROM category where cat_id='".$row['cat_id']."'";
            $viewresult1 = mysqli_query($con,$viewquery1);
            $row1 = mysqli_fetch_assoc($viewresult1);
            $image = $row['image'];
            $image_src = "img/upload/product/".$image;

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
          <td><img width="100%" src='.$image_src.'></td>
          <td>'.$row['trn_date'].'</td>
          <td>'.$row['available'].'</td>
          <td>'.$row['warenty'].'</td>

          <td>
          <div class="dropdown show">
          <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="edit.php?qpid='.$row['pid'].'">Quick Edit</a>
            <a class="dropdown-item" href="edit.php?pid='.$row['pid'].'">Edit Details</a>
            <a style="font-size : 12px;" class="dropdown-item" href="change_image.php?pid='.$row['pid'].'">Change Image Galary</a>
            <a class="dropdown-item" href="image_upload.php?pid='.$row['pid'].'">Add Image Galary</a>
            <a class="dropdown-item" href="delete.php?pid='.$row['pid'].'">Delete Product</a>
          </div>
        </div>
          </td>
          </tr>
          ';
          $count++;
          }


      }else{
?>

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

    <th style="width : 5%"> Warrenty </th>  
    <th style="width : 5%"> Option </th>  
  </tr>
<?php
  while($row = mysqli_fetch_assoc($viewresult))
  {
    $viewquery1 = " SELECT * FROM category where cat_id='".$row['cat_id']."'";
    $viewresult1 = mysqli_query($con,$viewquery1);
    $row1 = mysqli_fetch_assoc($viewresult1);
    $image = $row['image'];
    $image_src = "img/upload/product/".$image;

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
  <td>'.$row['warenty'].'</td>

  <td>
      <div class="dropdown show">
  <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a style="font-size : 12px;" class="dropdown-item" href="edit.php?qpid='.$row['pid'].'">Quick Edit</a>
    <a style="font-size : 12px;" class="dropdown-item" href="edit.php?pid='.$row['pid'].'">Edit Details</a>
    <a style="font-size : 12px;" class="dropdown-item" href="galary_change_images.php?pid='.$row['pid'].'">Change Image Galary</a>
    <a style="font-size : 12px;" class="dropdown-item" href="product_galary.php?pid='.$row['pid'].'">Add Image Galary</a>
    <a style="font-size : 12px;" class="dropdown-item" href="delete.php?pid='.$row['pid'].'">Delete Product</a>
  </div>
</div>
  </td>
  </tr>
  ';
  $count++;
  }

}
?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">