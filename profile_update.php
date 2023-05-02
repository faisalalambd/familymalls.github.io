<?php include("config.php");

echo  $id           = $_GET['id'];
echo  $name         = ($_REQUEST['name']);
echo  $email        = ($_REQUEST['email']);
echo  $password     = ($_REQUEST['password']);
echo  $phone        = ($_REQUEST['phone']);
echo  $address      = ($_REQUEST['address']);


$sql = "UPDATE customer SET name='$name', username='$email', password='$password', phone='$phone', address='$address' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: profile.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
