<?php
// session_start();
// require 'config.php';

// if (isset($_POST['submit']) && !empty ($_POST['submit'] )) {
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $pass = md5($_POST['password']);
//    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'";
//    $result = mysqli_query($conn, $select);
//    if (mysqli_num_rows($result) > 0) {
//       $row = mysqli_fetch_array($result);
//       // Store user ID in session
//       $_SESSION['userName'] = $row['user_name']; // Assuming 'id' is the column name for user ID in your user_form table
//       if ($row['user_type'] == 'admin') {
//          $_SESSION['admin_name'] = $row['name'];
//          header('location:adminpage.php');
//       } elseif ($row['user_type'] == 'user') {
//          $_SESSION['user_name'] = $row['name'];
//          header('location:userpage.php');
//       }

//    } else {
//       $error[] = 'incorrect email or password!';
//    }
// }


session_start();
require 'config.php';

if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        // Store user ID in session
        $_SESSION['user_id'] = $row['user_id'];

        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location:adminpage.php');
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location:userpage.php');
        }
    } else {
        $error[] = 'incorrect email or password!';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="login.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="registration.php">register now</a></p>
         <p>For Visit<a href="index_guest.php">Dwarkesh Super Market</a></p>
      </form>

   </div>

</body>

</html>