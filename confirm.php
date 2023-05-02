<?php
	include('session.php');
	if(!isset($_SESSION['login_user'])){
	header("location: user_login.php"); // Redirecting To Home Page
	}
	?>

<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>
<?php
include('login.php'); // Includes Login Script
if(!isset($_SESSION['login_user'])){
header("location: user_login.php"); // Redirecting To Profile Page
}

?>


<h1 style="text-align:center">Your order Has Successfully Placed</h1>

<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>