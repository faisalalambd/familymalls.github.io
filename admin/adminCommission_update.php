<?php include("config.php");

echo $id        = $_GET['id'];
echo $commission      = ($_REQUEST['commission']);


$sql = "UPDATE admin_commission SET commission='$commission' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: adminComission_table.php");
} 
// else {
//     echo "Error updating record: " . $conn->error;
// }
