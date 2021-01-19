<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

if ($_REQUEST['pid']) {
	$id = $_REQUEST['pid'];

 if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "img/upload/product/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){   
  
     // Upload file
     
     if (move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)) {

     	$query="UPDATE product SET image='$name' WHERE pid='".$id."'";
     	mysqli_query($con,$query);
     	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";

	}
}
 
}
  
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



    <title>SEUSL Health Center</title>
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


	<div id="content"><br>
	<form method="post" action="" style="padding: 3%;" enctype='multipart/form-data'>
	  <input type='file' name='file' /><br>
	  <input type='submit' value='Upload' name='but_upload'>
	</form>


	<div class="row" style="padding: 2%;">
		<div class="col-6">
			<p>Current Image</p>
				<?php
					if ($_REQUEST['pid']) {
						$id = $_REQUEST['pid'];

						$sql = "select image from product where pid=".$id."";
						$result = mysqli_query($con,$sql);
						$row = mysqli_fetch_array($result);

						$image = $row['image'];
						$image_src = "img/upload/product/".$image;
					}

					?>
		</div>
	</div>
<img src='<?php echo $image_src;  ?>' >
</div>
<?php 
	}else{
	header('location:dashboard.php'); 
}
 ?>
</body>
</html>