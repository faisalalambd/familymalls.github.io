<?php include("config.php");

echo $id        = $_GET['id'];
echo $cars      = ($_REQUEST['cars']);


$sql = "UPDATE orderlist SET status='$cars' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: orderList_table.php");
} else {
    echo "Error updating record: " . $conn->error;
}
