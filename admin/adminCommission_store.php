<?php include("config.php");

echo  $commission      = ($_REQUEST['commission']);



$sql = "INSERT INTO admin_commission (commission) VALUES ('$commission')";

if (mysqli_query($conn, $sql)) {
    header("Location: adminCommission_table.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
