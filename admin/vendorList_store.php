<?php
include 'config.php';

echo $username = ($_REQUEST['username']);

echo $password = ($_REQUEST['password']);

echo $shop_name = ($_REQUEST['shop_name']);

echo $owner_name = ($_REQUEST['owner_name']);

echo $shop_address = ($_REQUEST['shop_address']);

echo $phone = ($_REQUEST['status']);


$sql = "INSERT INTO user (username,password,shop_name,owner_name,shop_address,status) VALUES ('$username','$password','$shop_name','$owner_name','$shop_address','$phone')";
if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>

<?php

// /* Redirect browser */
header("Location:vendorList_table.php");
// exit();
?>