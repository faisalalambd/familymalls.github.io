<?php include("config.php");

echo  $name      = ($_REQUEST['name']);
echo  $email     = ($_REQUEST['email']);
echo  $phone     = ($_REQUEST['phone']);
echo  $address   = ($_REQUEST['address']);
$msg = "";


$sql = "INSERT INTO customer (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

if (mysqli_query($conn, $sql)) {
    header("Location: customer_table.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
