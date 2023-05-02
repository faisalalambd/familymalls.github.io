<?php include("config.php");

echo $id        = $_GET['id'];
echo $name      = ($_REQUEST['name']);
echo $price     = ($_REQUEST['price']);
echo $offer     = ($_REQUEST['offer']);
echo $stock     = ($_REQUEST['stock']);
echo $category  = ($_REQUEST['category']);
echo $details   = ($_REQUEST['details']);
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

$sql = "UPDATE products SET image='$filename', name='$name', price='$price', offer='$offer', category='$category', stock='$stock', details='$details' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: products_table.php");
} else {
    echo "Error updating record: " . $conn->error;
}
