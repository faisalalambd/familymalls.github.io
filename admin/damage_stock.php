<?php
include 'config.php';
echo $id = $_GET['id'];
echo  $new_stock      = ($_REQUEST['new_stock']);

$sql = "SELECT * FROM 	products  where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $current_stock = $row['stock'];
    }
}

$new_stock = $current_stock - $new_stock;

$sql = "UPDATE products SET  stock='$new_stock' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: stock_table.php");
} else {
    echo "Error updating record: " . $conn->error;
}
