<?php
  require_once 'connection.php';

?>
<!doctype html>
<html lang="en">
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
          <h3 class=""><a class="text-light" style="text-decoration: none;" href="dashboard.php"><b><i class="fas fa-arrow-left mr-3"></i></b></a></h3>

        </div>
        <div class="col-md-9 ">
          <h3 class=""><a class="text-warning" style="text-decoration: none; float: right; font-size: 30px;" href="dashboard.php"><b>GIGABYETE Product Manager </b></a></h3>
        </div>
      </div>
    </div><!-- Nav Bar End -->


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 bg-light" style="padding-bottom: 2%;">
<?php
if(isset($_REQUEST['pid']))
{
            $id = $_REQUEST['pid'];
            $q2 = "SELECT * FROM product WHERE pid='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['pid'];

              if($id==$row1['pid'])
               {
                echo '<form class="form_edit" action="edit.php?pid='.$id.'" method="POST">
                    

                     <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="title" class="a"><b>Product Title</b></label>
                                        <input type="text" class="form-control" name="title" placeholder="Product Title">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="desc"><b>Description </b></label>
                                      <input type="text" class="form-control" name="desc" placeholder="Description ">
                                    </div>
                                    </div>
                                      <div class="form-row">
                                       <div class="form-group col-md-6">
                                      <label for="highlight"><b>Highlights </b></label>
                                      <input type="text" class="form-control" name="highlight" placeholder="Highlights">
                                    </div>
                                    </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputState"><b>Product Categories</b></label>
                                        <select id="inputState" name="cat" class="form-control">
                                        <option selected></option>
                                        ';
                                          $q3 = "SELECT * FROM category";
                                            $res3 = mysqli_query($con,$q3);
                                            $c=1;
                                            while($row=mysqli_fetch_assoc($res3)){
                                              echo "<option>".$row['cat_name']."</option>";
                                              $c++;
                                            }
                                        echo '</select>
                                      </div>
                                      </div>

                                      <div class="dropdown-divider" style="color:red;"></div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="original_price"><b>Original Price</b></label>
                                      <input type="text" class="form-control"  name="original_price" placeholder="Original Price">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="sell_price"><b>Selling Price</b></label>
                                      <input type="text" class="form-control"  name="sell_price" placeholder="Selling Price">
                                    </div>
                                    </div>

                                      <div class="form-row">
                                       <div class="form-group col-md-6">
                                      <label for="qnt"><b>Stock Quantity</b></label>
                                      <input type="text" class="form-control" name="qnt" placeholder="Stock Quantity">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                      <label for="warent"><b>Warrenty</b></label>
                                      <input type="text" class="form-control" name="warent" placeholder="Warrenty">
                                    </div>
                                    </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputState"><b>Availability</b></label>
                                          <select id="inputState" name="available" class="form-control">
                                            <option selected></option>
                                            <option>Yes</option>
                                            <option>No</option>
                                          </select>
                                        </div>
                                        </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-info" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 ml-5 btn-info"  onclick="window.location.href=\'product_view.php\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){

                    $title = $_REQUEST['title'];
                    $desc = $_REQUEST['desc'];
                    $highlight = $_REQUEST['highlight'];
                    $cat = $_REQUEST['cat'];
                    $original_price = $_REQUEST['original_price'];
                    $sell_price = $_REQUEST['sell_price'];
                    $qnt = $_REQUEST['qnt'];
                    $warent = $_REQUEST['warent'];
                    $available = $_REQUEST['available'];
                    

                    $q4 = "SELECT * FROM category WHERE cat_name='$cat'";
                    $res4 = mysqli_query($con,$q4);
                    $row2 = mysqli_fetch_assoc($res4);


                      if(!empty($title))
                      {

                        $query3="UPDATE product SET title='$title' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }



                       if(!empty($desc))
                      {
                        $query3="UPDATE product SET description='$desc' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }


                       if(!empty($highlight))
                      {
                        $query3="UPDATE product SET highlight='$highlight' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }

                      if(!empty($cat))
                      {
                        if ($row2['cat_id']) {
                          $cat_id = $row2['cat_id'];

                          $query3="UPDATE product SET cat_id='$cat_id' WHERE pid='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                        }
                      }

                      if(!empty($original_price))
                      {
                        $query3="UPDATE product SET original_price='$original_price' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }

                      if(!empty($sell_price))
                      {
                        $query3="UPDATE product SET sell_price='$sell_price' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }

                      if(!empty($qnt))
                      {
                        $query3="UPDATE product SET qnt='$qnt' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }

                      if(!empty($warent))
                      {
                        $query3="UPDATE product SET warenty='$warent' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }

                      if(!empty($available))
                      {
                        $query3="UPDATE product SET available='$available' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }


                }echo '</form>'; //Register Form Validation

            }   

}  
else if(isset($_REQUEST['qpid']))
{
            $id = $_REQUEST['qpid'];
            $q2 = "SELECT * FROM product WHERE pid='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['pid'];

              if($id==$row1['pid'])
               {
                echo '<form class="form_edit" action="edit.php?qpid='.$id.'" method="POST">

                        <div class="dropdown-divider" style="color:red;"></div>

                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="original_price"><b>Original Price</b></label>
                        <input type="text" class="form-control"  name="original_price" placeholder="Original Price">
                      </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="sell_price"><b>Selling Price</b></label>
                        <input type="text" class="form-control"  name="sell_price" placeholder="Selling Price">
                      </div>
                      </div>

                        <div class="form-row">
                         <div class="form-group col-md-6">
                        <label for="qnt"><b>Stock Quantity</b></label>
                        <input type="text" class="form-control" name="qnt" placeholder="Stock Quantity">
                      </div>
                      </div>

                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputState"><b>Availability</b></label>
                            <select id="inputState" name="available" class="form-control">
                              <option selected></option>
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                          </div>
                          </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-info" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 ml-5 btn-info"  onclick="window.location.href=\'product_view.php\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){


                    $original_price = $_REQUEST['original_price'];
                    $sell_price = $_REQUEST['sell_price'];
                    $qnt = $_REQUEST['qnt'];
                    $available = $_REQUEST['available'];


                      if(!empty($original_price))
                      {
                        $query3="UPDATE product SET original_price='$original_price' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }

                      if(!empty($sell_price))
                      {
                        $query3="UPDATE product SET sell_price='$sell_price' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }

                      if(!empty($qnt))
                      {
                        $query3="UPDATE product SET qnt='$qnt' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }

                      if(!empty($available))
                      {
                        $query3="UPDATE product SET available='$available' WHERE pid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"product_view.php\";</script>";
                      }


                }echo '</form>'; //Register Form Validation

               
              }

}  
else if(isset($_REQUEST['emp_id']))
{
            $id = $_REQUEST['emp_id'];
            $q2 = "SELECT * FROM employee WHERE emp_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['emp_id'];

              if($id==$row1['emp_id'])
               {
                echo '<form class="form_edit" action="edit.php?emp_id='.$id.'" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="name"><b>Full Name</b></label>
                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                      </div>
                      </div>


                      <div class="form-row">
                      <div class="form-group col-md-4">
                        <label><b>Email</b></label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                      </div>
                    </div>

                    
                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="address"><b>Address</b></label>
                      <input type="text" class="form-control"  name="address" placeholder="Address">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="phone"><b>Phone Number</b></label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="phone"><b>Enter Gender</b></label>
                      <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
                    </div>
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-info" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 ml-5 btn-info"  onclick="window.location.href=\'dashboard.php?id=14\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){
                    $fname = $_REQUEST['name'];
                    $emails = $_REQUEST['email'];
                    $address = $_REQUEST['address'];
                    $phone = $_REQUEST['phone'];
                    $gender = $_REQUEST['gender'];


                    if(!empty($fname))
                      {
                        $query3="UPDATE employee SET full_name='$fname' WHERE emp_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";
                      }
                      if(!empty($emails))
                      {
                        if(filter_var($emails, FILTER_VALIDATE_EMAIL)){

                          $query1="SELECT * FROM employee WHERE email='$emails'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                            }
                            else
                              {
                                $query3="UPDATE employee SET email='$emails' WHERE emp_id='".$id."'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='dashboard.php?id=14';</script>";
                              }
                        }
                      }
                      if(!empty($address))
                      {
                        $query3="UPDATE employee SET address='$address' WHERE emp_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";
                      }
                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE employee SET phone_number='$phone' WHERE emp_id='".$id."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";

                          }else{echo "Enter Valid Phone Number";}
                      }
                      if(!empty($gender))
                      {
                        $loginsql="SELECT * FROM employee WHERE emp_id='".$id."'";
                          $result=mysqli_query($con,$loginsql);
                          $rows=mysqli_fetch_assoc($result);
                          $a = $rows['gender'];

                          if($a==$gender)
                          {
                              echo "<script type=\"text/javascript\"> alert(\"Gender already Here\");</script>";
                            }else{ 
                              $query3="UPDATE employee SET gender='$gender' WHERE emp_id='".$id."'";
                              $sql3=mysqli_query($con,$query3);
                              echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";
                        }
                      }
                }echo '</form>'; //Register Form Validation

            }   
}
else if(isset($_REQUEST['cat_id']))
{
            $id = $_REQUEST['cat_id'];
            $q2 = "SELECT * FROM category WHERE cat_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['cat_id'];

              if($id==$row1['cat_id'])
               {
                echo '<form class="form_edit" action="edit.php?cat_id='.$id.'" method="POST">

                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="name"><b>Categori Name</b></label>
                        <input type="text" class="form-control" name="cat" placeholder="Categori Name">
                      </div>
                      </div>

                      
                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-info" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 ml-5 btn-info"  onclick="window.location.href=\'dashboard.php?id=18\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){
                    $cat = $_REQUEST['cat'];


                      if(!empty($cat))
                      {

                          $query1="SELECT * FROM category WHERE cat_id='$cat'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Categori is already Exsisted\");</script>";
                            }
                            else
                            {
                              $query3="UPDATE category SET cat_name='$cat' WHERE cat_id='".$id."'";
                              $sql3=mysqli_query($con,$query3);
                              echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='dashboard.php?id=18';</script>";
                            } 
                      }
                }echo '</form>'; //Register Form Validation

            }   
}

else{
  header('location:dashboard.php'); 
}
?>

<style type="text/css">
  form.reg_form{
    width: 100%;
    margin-top: 2%;
    background-color: gray;
    border-radius: 30px;
    padding: 30px;
  }
  form.reg_form label{
    font-size: 20px;

  }
  form.reg_form input{
    font-size: 20px;
  }


</style>

        </div>
      </div>
    </div>

  </body>
</html>