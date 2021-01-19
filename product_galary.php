<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 


  $id = $_REQUEST['pid'];
  $viewquery = " SELECT * FROM productgalary where pid='".$id."'";
  $viewresult = mysqli_query($con,$viewquery);

  if(mysqli_num_rows($viewresult) > 0){

    echo '<script>alert("Galary Alrady Addedd. You can Only Change Image"); window.location.href="product_view.php";</script>'; 
  }

 if(isset($_POST['but_upload'])){

  $id = $_REQUEST['pid'];
 
  $name1 = $_FILES['file1']['name'];
  $name2 = $_FILES['file2']['name'];
  $name3 = $_FILES['file3']['name'];
  $name4 = $_FILES['file4']['name'];
  $name5 = $_FILES['file5']['name'];
  $name6 = $_FILES['file6']['name'];


  // $target_dir = "upload/";
  $target_dir = "img/upload/gallary/";
  $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);
  $target_file2 = $target_dir . basename($_FILES["file2"]["name"]);
  $target_file3 = $target_dir . basename($_FILES["file3"]["name"]);
  $target_file4 = $target_dir . basename($_FILES["file4"]["name"]);
  $target_file5 = $target_dir . basename($_FILES["file5"]["name"]);
  $target_file6 = $target_dir . basename($_FILES["file6"]["name"]);


  // Select file type
  $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
  $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
  $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
  $imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
  $imageFileType5 = strtolower(pathinfo($target_file5,PATHINFO_EXTENSION));
  $imageFileType6 = strtolower(pathinfo($target_file6,PATHINFO_EXTENSION));


  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  $viewquery = " SELECT * FROM productgalary where pid='".$id."'";
  $viewresult = mysqli_query($con,$viewquery);

  if(mysqli_num_rows($viewresult)>0){
      echo '<script>alert("Galary Alrady Addedd. You can Only Change Image"); window.location.href="product_view.php";</script>';
  }else{

      // Check extension
      if( in_array($imageFileType1,$extensions_arr) ){
        if( in_array($imageFileType2,$extensions_arr) ){
          if( in_array($imageFileType3,$extensions_arr) ){
            if( in_array($imageFileType4,$extensions_arr) ){
              if( in_array($imageFileType5,$extensions_arr) ){
                if( in_array($imageFileType6,$extensions_arr) ){

     
                 $query = "INSERT into productgalary(pid,image1,image2,image3,image4,image5,image6) values('".$id."','".$name1."','".$name2."','".$name3."','".$name4."','".$name5."','".$name6."')";
                 mysqli_query($con,$query);
              
                 // Upload file
                 move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
                 move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name2);
                 move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$name3);
                 move_uploaded_file($_FILES['file4']['tmp_name'],$target_dir.$name4);
                 move_uploaded_file($_FILES['file5']['tmp_name'],$target_dir.$name5);
                 move_uploaded_file($_FILES['file6']['tmp_name'],$target_dir.$name6);

                  echo '<script>alert("Slide Show Inserted Success"); window.location.href="product_view.php";</script>';
             }
            }
          }
        }
       }
      }
 
  }
}
  
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
  
</head> 
<body><?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>

<!DOCTYPE html>
<html>
<head>
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

     <style type="text/css">
       .form_edit{
          width: 80%;
          padding: 3%;
          color:  #00394e;
          margin-top: 3%;
          font-family: \"Times New Roman\", Times, serif;
          margin-left: 10%;
        }
     </style>



    <title>GIGABYTE</title>
  </head>
  <body class="a bg-light">
    <div class="container-fluid ">
      <div class="row p-3" style="border-bottom: 3px solid black; background-color: #00394e">
        <div class="col-md-3 ">
          <h3 class=""><a class="text-light" style="text-decoration: none;" href="product_view.php"><b><i class="fas fa-arrow-left mr-3"></i></b></a></h3>

        </div>
        <div class="col-md-9 ">
          <h3 class=""><a class="text-warning" style="text-decoration: none; float: right; font-size: 30px;" href="dashboard.php"><b>GIGABYETE Product Manager </b></a></h3>
        </div>
      </div>
    </div><!-- Nav Bar End -->

    <h3 class=""><a class="text-info ml-5" style="text-decoration: none; float: left; font-size: 30px;" href="product_galary.php?pid=<?php echo $id; ?>"><b>Add Product Galary </b></a></h3>

  <div id="content"><br>
  <form method="post" action="" style="padding: 3%;" enctype='multipart/form-data'>
    <p style="font-size: 20px; color: red">Slider Image 01</p>
    <input type='file' name='file1' /><br>

    <p style="font-size: 20px; color: red">Slider Image 02</p>
    <input type='file' name='file2' /><br>

    <p style="font-size: 20px; color: red">Slider Image 03</p>
    <input type='file' name='file3' /><br>

    <p style="font-size: 20px; color: red">Slider Image 04</p>
    <input type='file' name='file4' /><br>

    <p style="font-size: 20px; color: red">Slider Image 05</p>
    <input type='file' name='file5' /><br>

    <p style="font-size: 20px; color: red">Slider Image 06</p>
    <input type='file' name='file6' /><br>

    <input class="btn btn-info col-sm-2" type='submit' value='Upload' name='but_upload'><br><br>
  </form>
</body>
</html>