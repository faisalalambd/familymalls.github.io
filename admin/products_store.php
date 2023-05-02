<?php include("config.php");

echo  $name      = ($_REQUEST['name']);
echo  $price     = ($_REQUEST['price']);
echo  $offer     = ($_REQUEST['offer']);
echo  $stock     = ($_REQUEST['stock']);
echo  $category  = ($_REQUEST['category']);
echo  $details   = ($_REQUEST['details']);

echo  $vendor_name   = ($_REQUEST['vendor_name']);
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

$sql = "INSERT INTO products (image, name, price, offer, category, stock, details,vendor_name) VALUES ('$filename', '$name', '$price', '$offer', '$category', '$stock', '$details','$vendor_name')";

if (mysqli_query($conn, $sql)) {
    header("Location: products_table.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
