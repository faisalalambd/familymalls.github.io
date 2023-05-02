<?php include("config.php");

echo  $name      = ($_REQUEST['name']);
echo  $text     = ($_REQUEST['text']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "../vendor/assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;

$sql = "INSERT INTO category (name,image,text) VALUES ('$name','$filename','$text')";

if (mysqli_query($conn, $sql)) {
    header("Location: category_table.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
