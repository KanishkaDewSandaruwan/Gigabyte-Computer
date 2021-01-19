<?php
    require_once 'connection.php';
    // require_once 'user.php';
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
                                <?php }?>
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

                      <?php $cat_query = "SELECT * FROM category";
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

<!-- Page Content -->
<div class="container-fluid">
    <div class="row" style="font-family: 'Times New Roman', Times, serif;">
            <?php $id = $_REQUEST['pis']; 
            	$getDetail_Query = "SELECT * FROM product join category on category.cat_id = product.cat_id where pid = '".$id."'";
            	$getResult = mysqli_query($con,$getDetail_Query);

            	if ($row = mysqli_fetch_assoc($getResult)) { 

                $getDetail_image_Query = "SELECT * FROM productgalary where pid = '".$id."'";
                $getRegetImageResultsult = mysqli_query($con,$getDetail_image_Query);

            		$image = $row['image'];
            		$image_src = "img/upload/product/".$image; 

              if($img = mysqli_fetch_assoc($getRegetImageResultsult)){  

                $image1 = $img['image1'];
                $image2 = $img['image2'];
                $image3 = $img['image3'];
                $image4 = $img['image4'];
                $image5 = $img['image5'];
                $image6 = $img['image6'];

                $image_src1 = "img/upload/gallary/".$image1; 
                $image_src2 = "img/upload/gallary/".$image2; 
                $image_src3 = "img/upload/gallary/".$image3; 
                $image_src4 = "img/upload/gallary/".$image4; 
                $image_src5 = "img/upload/gallary/".$image5; 
                $image_src6 = "img/upload/gallary/".$image6; 




                ?>


    			<div style="width: 100%;" class="col-md-4 text-center justify-content-left">
    				<!-- <img src="<?php echo $image_src; ?>"> -->
    				<!-- Container for the image gallery -->
						<div class="container-fluid">

						  <!-- Full-width images with number text -->
						  <div class="mySlides">
						    <!-- <div class="numbertext">1 / 6</div> -->
						      <img src="<?php echo $image_src; ?>" style="width:100%; height: 300px;">
						  </div>

						  <div class="mySlides">
						    <!-- <div class="numbertext">2 / 6</div> -->
						      <img src="<?php echo $image_src1; ?>" style="width:100%; height: 300px;">
						  </div>

						  <div class="mySlides">
						    <!-- <div class="numbertext">3 / 6</div> -->
						      <img src="<?php echo $image_src2; ?>" style="width:100%; height: 300px;">
						  </div>

						  <div class="mySlides">
						    <!-- <div class="numbertext">4 / 6</div> -->
						      <img src="<?php echo $image_src3; ?>" style="width:100%; height: 300px;">
						  </div>

						  <div class="mySlides">
						    <!-- <div class="numbertext">5 / 6</div> -->
						      <img src="<?php echo $image_src4; ?>" style="width:100%; height: 300px;">
						  </div>

						  <div class="mySlides">
						    <!-- <div class="numbertext">6 / 6</div> -->
						      <img src="<?php echo $image_src5; ?>" style="width:100%; height: 300px;">
						  </div>

						  <!-- Next and previous buttons -->
						  <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a> -->
						  <!-- <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

						  <!-- Thumbnail images -->
						  <div class="row">
						    <div class="column">
						      <img class="demo cursor" src="<?php echo $image_src; ?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
						    </div>
						    <div class="column">
						      <img class="demo cursor" src="<?php echo $image_src1; ?>" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
						    </div>
						    <div class="column">
						      <img class="demo cursor" src="<?php echo $image_src2; ?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
						    </div>
						    <div class="column">
						      <img class="demo cursor" src="<?php echo $image_src3; ?>" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
						    </div>
						    <div class="column">
						      <img class="demo cursor" src="<?php echo $image_src4; ?>" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
						    </div>
						    <div class="column">
						      <img class="demo cursor" src="<?php echo $image_src5; ?>" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
						    </div>
						  </div>
						</div>
    				</div>
            <?php }else{ ?>

            <div style="width: 100%;" class="col-md-4 text-center justify-content-left">
            <!-- <img src="<?php echo $image_src; ?>"> -->
            <!-- Container for the image gallery -->
            <div class="container-fluid">

              <!-- Full-width images with number text -->
              <div class="mySlides">
                <!-- <div class="numbertext">1 / 6</div> -->
                  <img src="<?php echo $image_src; ?>" style="width:100%; height: 300px;">
              </div>

              <div class="mySlides">
                <!-- <div class="numbertext">2 / 6</div> -->
                  <img src="<?php echo $image_src; ?>" style="width:100%; height: 300px;">
              </div>

              <div class="mySlides">
                <!-- <div class="numbertext">3 / 6</div> -->
                  <img src="<?php echo $image_src; ?>" style="width:100%; height: 300px;">
              </div>

              <div class="mySlides">
                <!-- <div class="numbertext">4 / 6</div> -->
                  <img src="<?php echo $image_src; ?>" style="width:100%; height: 300px;">
              </div>

              <div class="mySlides">
                <!-- <div class="numbertext">5 / 6</div> -->
                  <img src="<?php echo $image_src; ?>" style="width:100%; height: 300px;">
              </div>

              <div class="mySlides">
                <!-- <div class="numbertext">6 / 6</div> -->
                  <img src="<?php echo $image_src; ?>" style="width:100%; height: 300px;">
              </div>

              <!-- Next and previous buttons -->
              <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a> -->
              <!-- <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

              <!-- Thumbnail images -->
              <div class="row">
                <div class="column">
                  <img class="demo cursor" src="<?php echo $image_src; ?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                </div>
                <div class="column">
                  <img class="demo cursor" src="<?php echo $image_src; ?>" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                </div>
                <div class="column">
                  <img class="demo cursor" src="<?php echo $image_src; ?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                </div>
                <div class="column">
                  <img class="demo cursor" src="<?php echo $image_src; ?>" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                </div>
                <div class="column">
                  <img class="demo cursor" src="<?php echo $image_src; ?>" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                </div>
                <div class="column">
                  <img class="demo cursor" src="<?php echo $image_src; ?>" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                </div>
              </div>
            </div>
            </div>

          <?php } ?>




						<div style="width: 100%; padding: 2%;" class="col-md-5 text-left">
							<div class="row">
								<h1 style="color:black;"><?php echo $row['title']; ?></h1>
							</div>
							<div class="dropdown-divider"></div>
							<div class="row">
								<h2 style="color: tomato">LKR <?php echo $row['sell_price']; ?></h2><br>
							</div>
							<div class="row">
								<p style="color: black; font-size: 18px;"><?php echo $row['highlight']; ?> <br> Warrenty : <?php echo $row['warenty']; ?></p>
							</div>
							<div class="row mt-5">
								<form class="form-inline justify-content-left my-2 my-lg-0" method="POST" action="">
							      <input class="form-control col-10" type="search" placeholder="Enter Qty Here..." id="qnt" style="border: 2px solid #00394e;" aria-label="Search">
							    </form>
							</div>	
							<div class="row mt-5" style="height: 100px;">
								<div class="col-sm-6">
									<button type="button" name="submit" class="btn col-md-12 btn-info"  onclick="window.location.href='add_to_cart.php'" style="border-radius:20px; font-size: 20px;">Buy Now</button>
								</div>
								<div class="col-sm-6">
								<button type="button" name="submit" class="btn col-md-12 btn-info" onclick="redirectUser()" style="border-radius:20px; font-size: 20px;">Add to Cart</button>
								</div>
								<script>

								 function redirectUser(){
								     var qty = document.getElementById('qnt').value;
								     if (qty == "") {

								     	window.location.href='add_to_cart.php?pid=<?php echo $id; ?>';
								     }else{

								     	window.location.href='add_to_cart.php?qnt='+qty+'&pid=<?php echo $id; ?>';
								     }
								    }
								 </script>
							</div>
						</div>

    		</div>
				<div class="row">
					<div class="col-sm-6">
						<h2 style="color: green; font-size: 40px;"><?php echo $row['highlight']; ?></h2><br>
						<p style="font-size: 25px;"><?php echo $row['description']; ?></p>
					</div>
				</div>
            <?php } ?>
    </br>

<style type="text/css">
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
    color:black!important;
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

<style type="text/css">
	* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<script type="text/javascript">
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>