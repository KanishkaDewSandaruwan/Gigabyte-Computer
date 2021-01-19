<?php
require_once 'connection.php';

if(isset($_REQUEST['emp_id']))
{
          $id = $_REQUEST['emp_id'];

          $querygetcode="SELECT  * FROM employee where emp_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['emp_id'];

          $query1="DELETE FROM employee WHERE emp_id='$a '";
          mysqli_query($con,$query1);

          header('location:dashboard.php?id=14');
}
else if(isset($_REQUEST['pramo_id']))
{
          $id = $_REQUEST['pramo_id'];

          $querygetcode="SELECT  * FROM pramotion where pramo_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['pramo_id'];

          $query1="DELETE FROM pramotion WHERE pramo_id='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=3');

}  else if(isset($_REQUEST['m_id'])){
          $id = $_REQUEST['m_id'];

          $querygetcode="SELECT  * FROM message where m_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['m_id'];

          $query1="DELETE FROM message WHERE m_id='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=27');
}

else if(isset($_REQUEST['cat_id'])){
          $id = $_REQUEST['cat_id'];

          $querygetcode="SELECT  * FROM category where cat_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['cat_id'];

          $querygetcode="SELECT  * FROM product where cat_id='".$a."'";
          $catresult=mysqli_query($con,$querygetcode);

          while($result_row=mysqli_fetch_assoc($catresult)){

          $g=$result_row['pid'];

          $cdate = date("Y/m/d m:H:s");

            $viewquery = " SELECT * FROM product where pid='".$g."'";
              $viewresult = mysqli_query($con,$viewquery);
              if ($row = mysqli_fetch_assoc($viewresult)) {

                $title = $row['title'];
                $image = $row['image'];
                $pid = $row['pid'];


                $q1="INSERT INTO product_backup(title,image,trn_date,pid) values('$title','$image','$cdate','$pid')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {


                  $query1="DELETE FROM product WHERE pid='$g '";
                  mysqli_query($con,$query1);

                }
            }

          }
            $query1="DELETE FROM category WHERE cat_id='$a '";
            mysqli_query($con,$query1);
            header('location:dashboard.php?id=18');
          
}

else if(isset($_REQUEST['pid']))
{
          $id = $_REQUEST['pid'];

          $querygetcode="SELECT  * FROM product where pid='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $g=$result_row['pid'];

          $cdate = date("Y/m/d m:H:s");

            $viewquery = " SELECT * FROM product where pid='".$g."'";
              $viewresult = mysqli_query($con,$viewquery);
              if ($row = mysqli_fetch_assoc($viewresult)) {

                $title = $row['title'];
                $image = $row['image'];
                $pid = $row['pid'];


              $q1="INSERT INTO product_backup(title,image,trn_date,pid) values('$title','$image','$cdate','$pid')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {


              $query1="DELETE FROM product WHERE pid='$g '";
                      mysqli_query($con,$query1);

                      header('location:product_view.php');
                }
              }
}
else if(isset($_REQUEST['customer_id']))
{
          $id = $_REQUEST['customer_id'];

          $querygetcode="SELECT  * FROM customer where customer_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['customer_id'];
          $g=$result_row['email'];

          $cdate = date("Y/m/d m:H:s");

            $viewquery = " SELECT * FROM customer where email='".$g."'";
              $viewresult = mysqli_query($con,$viewquery);
              if ($row = mysqli_fetch_assoc($viewresult)) {

                $name = $row['first_name'].' '.$row['last_name'];
                $cus_id = $row['customer_id'];
                $phone = $row['phone'];
                $email = $row['email'];


              $q1="INSERT INTO customer_backup(customer_id,name,phone,email,trn_date) values('$cus_id','$name','$phone','$email','$cdate')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {


              $query1="DELETE FROM customer WHERE email='$g '";
                      mysqli_query($con,$query1);

                      header('location:view.php');
                }
              }
}
else{
  header('location:dashboard.php'); 
}
?>