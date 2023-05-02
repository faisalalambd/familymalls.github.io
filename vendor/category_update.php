<?php include("config.php");

echo $id        = $_GET['id'];
echo $name      = ($_REQUEST['name']);
echo $title      = ($_REQUEST['title']);

$sql = "UPDATE category SET name='$name',title='$title' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: category_table.php");
} else {
    echo "Error updating record: " . $conn->error;
}
