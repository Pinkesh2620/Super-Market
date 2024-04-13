<?php
    $conn = mysqli_connect("localhost", "root", "", "user_db");
    session_start();  
	
	$ProductId = $_POST['productId'];
	// $quantity =$_POST['quantity'];
	// $productSize=$_POST['product-size'];
	// $priceofone=$_POST['priceofone'];
	// $totalPrice= $priceofone*$quantity;


if($_POST['submit']=="submit"){
	if(isset($ProductId)){
		if (!isset($_SESSION['login'])) {
			header("Location: login.php");
		}
		else{ $resultCheck = mysqli_query($conn, "SELECT * FROM shoppingcart WHERE ProductId = $ProductId AND clientId=$_SESSION[login]");
		
		if ($rowCart = mysqli_fetch_array($resultCheck)){
			mysqli_query($conn, "UPDATE shoppingcart SET Quantity = $rowCart[Quantity]+$quantity ,Price = $rowCart[Price]+$totalPrice WHERE ProductId = $ProductId AND $_SESSION[loggedInUserId]");
		}
		else{
			mysqli_query($conn, "INSERT INTO shoppingcart (ProductId, Price, clientId) values ($ProductId,$totalPrice,$_SESSION[login])");
		}
		header("Location:index.php");
			}
}
}

// elseif($_POST['submit']=="buy"){

// 	$resultCheck = mysqli_query($conn, "SELECT * FROM shoppingcart WHERE ProductId = $ProductId AND $_SESSION[loggedInUserId]");
// 	$rowCart = mysqli_fetch_array($resultCheck);
// 	mysqli_query($conn, "INSERT INTO shoppingcart (ProductId, Quantity, Price, clientId) values ($ProductId,$quantity,$totalPrice,$_SESSION[loggedInUserId])");

// 	header("Location:checkout.php?ProductId=$ProductId");

// }
// ?>