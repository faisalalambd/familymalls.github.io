<?php include("config.php");

echo $id       = $_GET['id'];
echo $name     = ($_REQUEST['name']);
echo $email    = ($_REQUEST['email']);
echo $phone    = ($_REQUEST['phone']);
echo $address  = ($_REQUEST['address']);
$msg = "";


$sql = "UPDATE customer SET name='$name', email='$email', phone='$phone', address='$address' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: customer_table.php");
} else {
    echo "Error updating record: " . $conn->error;
}
