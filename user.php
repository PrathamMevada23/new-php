<?php
    include ("connect.php");
    if(isset ($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobileno=$_POST['mobileno'];
        $password=$_POST['password'];
        
        $insert ="insert into crud values(0,'$name','$email','$mobileno','$password')";
        $result =mysqli_query($con,$insert);
        if($result){
            // echo "Data Inserted";
            header('loaction:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>CURD</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" placeholder="Enter your name" name="name">
        </div>

    <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email">
    </div>

    <div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your MobileNo" name="mobileno">
    </div>

    <div class="form-group">
    <label >Password</label>
    <input type="text" class="form-control" placeholder="Enter your Password" name="password">
    </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </body>
</html>