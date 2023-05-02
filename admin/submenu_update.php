<?php include("config.php");

echo  $id               = $_GET['id'];
echo  $menu            = ($_REQUEST['menu']);
echo  $submenu          = ($_REQUEST['submenu']);




$sql = "UPDATE  submenu SET menu='$menu', submenu ='$submenu' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: submenu_table.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

