<?php include("config.php");

echo  $menu    = ($_REQUEST['menu']);
echo  $submenu    = ($_REQUEST['submenu']);


$msg = "";

// check if the user has clicked the button "UPLOAD" 


$sql = "INSERT INTO submenu (menu, submenu) VALUES ('$menu', '$submenu')";

if (mysqli_query($conn, $sql)) {
    header("Location: submenu_table.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
