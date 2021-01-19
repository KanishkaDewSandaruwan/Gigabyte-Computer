<?php
    require_once 'connection.php';
    require_once 'user.php';

$email = $_REQUEST['cus_email'];
$query1="DELETE FROM cart where email = '$email'";
mysqli_query($con,$query1);

header('location:cart.php');

 ?>