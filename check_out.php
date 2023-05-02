<?php
	include('session.php');
	if(!isset($_SESSION['login_user'])){
	header("location: user_login.php"); // Redirecting To Home Page
	}
	?>

<?php

include 'config.php';

echo "$login_session";

$sql = "UPDATE orderlist SET status='pending' WHERE ((c_email='$login_session')&&(status='cart'))";

if ($conn->query($sql) === TRUE) {
    header("Location: confirm.php");
} else {
    echo "Error updating record: " . $conn->error;
}

?>