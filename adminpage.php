<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="adminpage.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login.php" class="btn">login</a>
      <a href="registration.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="index.php" class="btn">Dwarkesh Super Market</a>
      <a href="database.php" class="btn">Customer register</a>
      <a href="product.php" class="btn">Vegetable Stock</a>
      <a href="product1.php" class="btn">Fruits Stock</a>
      <a href="product2.php" class="btn">Dairy Stock</a>
      <a href="payment.php" class="btn">Payment</a>
   </div>

</div>

</body>
</html>