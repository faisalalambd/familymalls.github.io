<?php include("config.php");

echo  $order_number     = ($_REQUEST['order_number']);
echo  $reason           = ($_REQUEST['reason']);
echo  $offer            = ($_REQUEST['offer']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;

$sql = "INSERT INTO return_item (image, order_number, reason) VALUES ('$filename', '$order_number', '$reason')";

if (mysqli_query($conn, $sql)) {
    header("Location: return_confirm_msg.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
