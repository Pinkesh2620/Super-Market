<?php
session_start();

echo "<div style='color:green;text-align:center;'>logged out successfuly</div>";
header("location:login.php");
session_destroy();
?>

