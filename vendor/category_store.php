<?php include("config.php");

echo  $name      = ($_REQUEST['name']);
echo  $title      = ($_REQUEST['title']);


$sql = "INSERT INTO category (name,title) VALUES ('$name','$title')";

if (mysqli_query($conn, $sql)) {
    header("Location: category_table.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
