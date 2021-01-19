<?php
	require_once 'connection.php';
	session_start();
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
					  	<form class="form-inline justify-content-left my-2 my-lg-0" method="POST" action="">
					      <input class="form-control col-10" type="search" name="search" placeholder="Search Here..." style="border: 2px solid #00394e;" aria-label="Search">
					      <button class="btn my-2 my-sm-0 ml-1" type="submit" name="sub" style="background-color: #00394e;"><i style="color: white;" class="fas fa-search"></i></button>
					    </form>
					    <?php 
					    if (isset($_POST['sub'])) {
					    	$search = $_REQUEST['search'];
					    	echo "<script type=\"text/javascript\">window.location.href='search.php?key=$search'; </script>"; 
					    }
					     ?>
					</div>
					<div class="col-md-2" style="margin-top: 5%; float: right;">
				  		<div class="navbar-collapse" id="">
						    <ul class="navbar-nav mr-auto">
						      
						      <li class="nav-item dropdown ml-5">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="color: black; font-size: 45px;" class="fas fa-users"></i></a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: -30%;">
					        	<?php if(isset($_SESSION['email'])){ ?>
								    
						          <a class="dropdown-item" href="myaccount.php">My Account</a>
						          <a class="dropdown-item" href="vieworder.php">View Orders</a>
						          <div class="dropdown-divider"></div>
						          <a class="dropdown-item" href="user_logout.php">Logout</a>
								<?php } else{ ?>
						          <a class="dropdown-item" href="signin.php">Sign In</a>
						          <div class="dropdown-divider"></div>
						          <a class="dropdown-item" href="signup.php">Sign Up</a>
								<?php } ?>
						        </div>
						      </li>

						      <li class="nav-item">
						        <a class="nav-link text-light ml-3" href="cart.php"><i style="color: black; font-size: 45px;" class="fas fa-cart-arrow-down"></i></a>
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
			      <li class="nav-item dropdown ml-3">
			        <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories <i style="font-size: 18px; color: white;" class="fas fa-bars"></i></a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

			        <?php	$cat_query = "SELECT * FROM category";
					$cat_query_result = mysqli_query($con,$cat_query);

					while($row = mysqli_fetch_assoc($cat_query_result)){ 
						$count = 1;
						$product_query = "SELECT * FROM product where cat_id='".$row['cat_id']."'";
						$product_query_result = mysqli_query($con,$product_query); 

						if (mysqli_num_rows($product_query_result)>0) { ?>

				          <a class="dropdown-item" href="more.php?cat=<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></a>
				          <div class="dropdown-divider"></div>

				     <?php } } ?>
			        </div>
			      </li>
			      
			      <li class="nav-item ml-3">
			        <a class="nav-link text-light" href="contact.php">Contact Us</a>
			      </li>
			    </ul>
			  </div>
			</nav>
<!--/.Navbar -->
	</div>
	<div class="row" style="width: 102.2%; margin-top: -1.2%;">
		
		<!-- Slideshow container -->
		<?php 
		$slider_query = "SELECT * FROM slider_banner";
		$slider_query_result = mysqli_query($con,$slider_query);
		if(mysqli_num_rows($slider_query_result)>0){

	      	$row = mysqli_fetch_assoc($slider_query_result);
	      	$slider_banner_01 = $row['slider_banner_01'];
	      	$slider_banner_02 = $row['slider_banner_02'];
	      	$slider_banner_03 = $row['slider_banner_03'];

       		$image_src1 = "img/upload/slider/".$slider_banner_01;
       		$image_src2 = "img/upload/slider/".$slider_banner_02;
       		$image_src3 = "img/upload/slider/".$slider_banner_03;

		 ?>
			<!-- <div class="container-fluid" >  -->
				  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 105%;">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				      <div class="item active">
				        <img src="<?php echo $image_src1; ?>" alt="Banner 01" style="width:100%; height: 250px;">
				      </div>

				      <div class="item">
				        <img src="<?php echo $image_src2; ?>" alt="Banner 02" style="width:100%; height: 250px;">
				      </div>
				    
				      <div class="item">
				        <img src="<?php echo $image_src3; ?>" alt="Banner 03" style="width:100%; height: 250px;">
				      </div>
				    </div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
				<!-- </div> -->
			<?php } ?>
	</div>
	<div class="row">
		<div class="col-sm-2 mt-5">
			<div style="width: 100%; color: white">
				<div style="width: 100%;  border:3px solid white; padding: 2%; margin-top: 2%; ">
					<h3 style="text-align: center;">Categories</h3>
				     <div class="dropdown-divider"></div>
					 <?php	$cat_query = "SELECT * FROM category";
					$cat_query_result = mysqli_query($con,$cat_query);

					while($row = mysqli_fetch_assoc($cat_query_result)){ 
						$count = 1;
						$product_query = "SELECT * FROM product where cat_id='".$row['cat_id']."'";
						$product_query_result = mysqli_query($con,$product_query); 

						if (mysqli_num_rows($product_query_result)>0) { ?>

				          <a class="dropdown-item text-light mt-2" href="index.php#<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?></a>

				     <?php } } ?>
				</div>
			</div>
			<div style="width: 100%;">
				<div style="width: 100%; margin-top: 2%; ">

					<!-- <img class="mt-5" src="img/banner/46290eae2a655e80cc17acc93edafeb6.jpg" width="100%"> -->
				</div>
			</div>
			<!-- <img class="mt-5" src="img/banner/46290eae2a655e80cc17acc93edafeb6.jpg" width="100%"> -->
		</div>
		<div class="col-sm-10">
			
						<div class="row cat_row mt-5 mr-1 mb-5" id="<?php echo $row['cat_name']; ?>" >
			<?php 
				$cat = $_REQUEST['key'];
				$cat_query = "SELECT * FROM category join product on category.cat_id = product.cat_id where cat_name LIKE '%$cat%' ";
				$cat_query_result = mysqli_query($con,$cat_query);

				$product_query = "SELECT * FROM product  where title LIKE '%$cat%' ";
				$product_query_result = mysqli_query($con,$product_query);

				if($row = mysqli_fetch_assoc($cat_query_result)){ 
					$count = 1;
					$product_query = "SELECT * FROM product where cat_id='".$row['cat_id']."'";
					$product_query_result = mysqli_query($con,$product_query); 

					if (mysqli_num_rows($product_query_result)>0) { ?>
							
						<?php while($row1 = mysqli_fetch_assoc($product_query_result)){ 
							if ($row1['available'] == 'Yes' && $row1['qnt'] > 0) {
								
								$image = $row1['image'];
			            		$image_src = "img/upload/product/".$image; ?>

					            	<a href="product_detail.php?pis=<?php echo $row1['pid']; ?>">	
										<div class="product_col col-sm-3 mt-3 justify-content-center" >
											<img style="width: 100%; height: 200px" src="<?php echo $image_src;?>">
											<a style="text-decoration: none; color: #00394e;" href="product_detail.php?pis=<?php echo $row1['pid']; ?>"><h3><?php echo $row1['title']; ?></h3></a>
											<a style="text-decoration: none; color: #00394e;" href="product_detail.php?pis=<?php echo $row1['pid']; ?>"><h5><?php echo $row1['highlight']; ?></h5></a>
											<h4 style="color: #a30001;">LKR <?php echo $row1['sell_price']; ?></h4>
										</div>
					            	</a>
							
						<?php
							$count++;
								} 
							}
						} 
				}else if(mysqli_fetch_assoc($product_query_result)){ 
						$product_query = "SELECT * FROM product  where title LIKE '%$cat%' ";
						$product_query_result = mysqli_query($con,$product_query);

						while($row = mysqli_fetch_assoc($product_query_result)){ 
							if ($row['available'] == 'Yes' && $row['qnt'] > 0) {
								
								$image = $row['image'];
			            		$image_src = "img/upload/product/".$image; ?>

					            	<a href="product_detail.php?pis=<?php echo $row['pid']; ?>">	
										<div class="product_col col-sm-3 mt-3 justify-content-center" >
											<img style="width: 100%; height: 200px" src="<?php echo $image_src;?>">
											<a style="text-decoration: none; color: #00394e;" href="product_detail.php?pis=<?php echo $row['pid']; ?>"><h3><?php echo $row['title']; ?></h3></a>
											<a style="text-decoration: none; color: #00394e;" href="product_detail.php?pis=<?php echo $row['pid']; ?>"><h5><?php echo $row['highlight']; ?></h5></a>
											<h4 style="color: #a30001;">LKR <?php echo $row['sell_price']; ?></h4>
										</div>
					            	</a>
							
						<?php
							$count++;
								} 
							}
						
				}else{ ?>

			<h1 class="text-dark m-5">No Result Found</h1>
		<?php } ?>
						</div>
		<div class="row">
		<?php 
		$slider_query = "SELECT * FROM banner";
		$slider_query_result = mysqli_query($con,$slider_query);
		if(mysqli_num_rows($slider_query_result)>0){

	      	$row = mysqli_fetch_assoc($slider_query_result);
	      	$banner = $row['image'];

       		$image_src_banner = "img/upload/banner/".$banner;

		 ?>
			<img src="<?php echo $image_src_banner; ?>" width="100%" height="500px;">
		<?php } ?>
		</div>
		</div>
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