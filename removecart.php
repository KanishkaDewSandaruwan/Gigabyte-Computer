<?php
    require_once 'connection.php';
    require_once 'user.php';

$id = $_REQUEST['cat_id'];

$querygetcode="SELECT  * FROM cart where cart_id='".$id."'";
$catresult=mysqli_query($con,$querygetcode);
$result_row=mysqli_fetch_assoc($catresult);
$a=$result_row['cart_id'];

$query1="DELETE FROM cart WHERE cart_id='$a '";
mysqli_query($con,$query1);

header('location:cart.php');

 ?>