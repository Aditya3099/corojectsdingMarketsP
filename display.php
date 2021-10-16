<?php
include'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <link rel="stylesheet" href="style.css">


</head>
<body>
    

<div class="wrapper hover_collapse">
        <div class="top_navbar">

            <div class="hamburger" style="margin-left: 10px;">
                <i class="fas fa-bars"></i>
              </div>

            <div class="logo" style="float: left !important;">Coding<span>Market</span></div>
          <div class="menu" >
            

            <div class="hamburger" style="margin-left: 10px;">
                
              </div>

            <div class="profile_wrap" >
              <div class="profile">
                <img src="aditya.jpeg" alt="profile_pic">
                <span class="name">Aditya Mishra</span>
                <span class="icon">
                  <i class="fas fa-angle-down"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      

        <div class="sidebar">
            <div class="sidebar_inner">
            <ul>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-home"></i></span>
                  <span class="text">home</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="">	&#xf0d6;</i></span>
                  <span class="text">My dues</span>
                </a>
              </li>
              <li>
                <li>
                  <a href="#">
                    <span class="icon"><i class="fas-fa-cart">	</i></span>
                    <span class="text">Shop</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon"><i class="fas fa-user-tie"></i></span>
                    <span class="text">User</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon"><i class="	fa fa-envelope"></i></span>
                    <span class="text">Message</span>
                  </a>
                </li>
                <br>

                <li>
                <a href="#">
                  <span class="icon"><i class="	far fa-sun"></i></span>
                  <span class="text">Settings</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-wallet"></i></span>
                  <span class="text">My Wallet</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="	fas fa-bell"></i></span>
                  <span class="text">Notification</span>
                </a>
              </li>
              <br>
              <br>

              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-phone-square-alt">	</i></span>
                  <span class="text">Contact us </span>
                </a>
              </li>

            </ul>
            </div>
          </div>
        
          
          
          <div class="main_container">
            <div class="container">
              

              <div class="content">


              <div class="container">
    <button class="btn btn-primary my-5"> <a href="user.php"
        class="text-dark"> add user</a>
        
    </button>
    <table class="table table-bordered table-dark">
<thead>
<tr>
  <th scope="col">id</th>
  <th scope="col">Name</th>
  <th scope="col">email</th>
  <th scope="col">mobile </th>
  <th scope="col">password </th>
 
</tr>
</thead>
<tbody>
  <?php
  $sql="select * from `aditya`";
  $result=mysqli_query($con,$sql);
  if($result){
      
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          $mobile=$row['mobile'];
          $password=$row['password'];
         
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$mobile.'</td>
          <td>'.$password.'</td>
          <td>
              <button class="btn btn-primary"><a href="update.php"  class="text-light">update</a></button>
             
               <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"  class="text-light">Delete</a></button>
            </td>
          </tr>';
        
 }

  }

  ?>






  
</tbody>
</table>

</div>
              </div>

          </div>
        </div>
        



<script src="a.js"></script>

</body>
</html>