<?php
    require_once 'connection.php';
    require_once 'user.php';
    // session_start();
?>
<?php 
	$id = $_REQUEST['pid'];
	$getEmail = $_SESSION['email'];
	$cdate = date("Y/m/d m:H:s");

	$getDetail_Query = "SELECT * FROM product join category on category.cat_id = product.cat_id where pid = '".$id."'";
	$getResult = mysqli_query($con,$getDetail_Query);

	$getCustomerDetail_Query = "SELECT * FROM customer where email='".$getEmail."'";
	$getResult_Customer = mysqli_query($con,$getCustomerDetail_Query);

	$getCartDetail_Query = "SELECT * FROM cart where product_code = '".$id."'AND email='".$getEmail."'";
	$getResult_Cart = mysqli_query($con,$getCartDetail_Query);

	if(mysqli_num_rows($getResult_Cart)>0){
	      echo "<script type=\"text/javascript\"> alert(\"Your Product Alrady in Cart\"); window.location= \"index.php\";</script>";
	}else{
		if ($row = mysqli_fetch_assoc($getResult)) { 
			if ($row1 = mysqli_fetch_assoc($getResult_Customer)) {
				$cuid = $row1['customer_id'];
				if (isset($_SESSION['email'])) {
					if (isset($_REQUEST['qnt'])) {
						
						$qnty = $_REQUEST['qnt'];

						$q1="INSERT INTO cart(product_code,email,customer_id,trn_date,qty) values('$id','$getEmail','$cuid','$cdate','$qnty')";
		                $res1=mysqli_query($con,$q1);

		                if ($res1) {
		                	echo "<script type=\"text/javascript\"> alert(\"Product Added to Cart\"); window.location= \"index.php\";</script>";
		                }else{
		                	echo "<script type=\"text/javascript\"> alert(\"Cart Adding Fail\"); window.location= \"index.php\";</script>";
		                }

					}else{
						$qnty = 1;
						$q1="INSERT INTO cart(product_code,email,customer_id,trn_date,qty) values('$id','$getEmail','$cuid','$cdate','$qnty')";
		                $res1=mysqli_query($con,$q1);

		                if ($res1) {
		                	echo "<script type=\"text/javascript\"> alert(\"Product Added to Cart\"); window.location= \"index.php\";</script>";
		                }else{
		                	echo "<script type=\"text/javascript\"> alert(\"Cart Adding Fail\"); window.location= \"index.php\";</script>";
		                }
					}
				}
			}
		}
	}
 ?>

