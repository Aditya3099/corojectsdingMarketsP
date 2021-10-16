<?php

include'connect.php';

if(isset($_POST['submit'])){


    $name=$_POST['name'];
    $email=$_POST['email1'];
    $mobile= $_POST['mobile1'];
    $password=$_POST['password'];
    $id=4;

    $sql="insert into `aditya` (id,name,email,mobile,password)
     values('$id','$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
         echo "Data insterted successfully";
     header('location:display.php');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>crud operation</title>
  </head>
  <body>
    <div class ="container my -5">
    <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your name" name="name">
    
</div>
<div class="form-group">
    <label >email</label>
    <input type="email" class="form-control" 
     placeholder="Enter Your your email" name="email1">
    
</div>
<div class="form-group">
    <label >mobile No.</label>
    <input type="mobile" class="form-control" 
     placeholder="Enter Your mobile no" name="mobile1">
    
</div>
<div class="form-group">
    <label >password</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your password" name="password">
    
</div>
  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    
  </body>
</html>