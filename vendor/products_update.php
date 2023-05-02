<?php include("config.php");

echo $id                = $_GET['id'];
echo  $name             = ($_REQUEST['name']);
echo  $price            = ($_REQUEST['price']);
echo  $offer            = ($_REQUEST['offer']);
echo  $stock            = ($_REQUEST['stock']);
echo  $category         = ($_REQUEST['category']);
echo  $submenu          = ($_REQUEST['submenu']);
echo  $details          = ($_REQUEST['details']);
echo  $available_for    = ($_REQUEST['available_for']);
echo  $materialandcare  = ($_REQUEST['materialandcare']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        echo  $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;




// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename1 = $_FILES["choosefile1"]["name"];

    $tempname1 = $_FILES["choosefile1"]["tmp_name"];

    $folder1 = "assets/image/" . $filename1;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname1, $folder1)) {

        echo  $msg = "Image uploaded successfully";
    } else {

        echo $msg = "Failed to upload image";
    }
}

echo $filename1;


// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename2 = $_FILES["choosefile2"]["name"];

    $tempname = $_FILES["choosefile2"]["tmp_name"];

    $folder2 = "assets/image/" . $filename2;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder2)) {

        echo  $msg = "Image uploaded successfully";
    } else {

        echo $msg = "Failed to upload image";
    }
}

echo $filename2;

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename3 = $_FILES["choosefile3"]["name"];

    $tempname = $_FILES["choosefile3"]["tmp_name"];

    $folder3 = "assets/image/" . $filename3;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder3)) {

        echo  $msg = "Image uploaded successfully";
    } else {

        echo $msg = "Failed to upload image";
    }
}

echo $filename3;



// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename4 = $_FILES["choosefile4"]["name"];

    $tempname = $_FILES["choosefile4"]["tmp_name"];

    $folder4 = "assets/image/" . $filename4;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder4)) {

        echo  $msg = "Image uploaded successfully";
    } else {

        echo $msg = "Failed to upload image";
    }
}

echo $filename4;

$sql = "UPDATE products SET image='$filename', name='$name', price='$price', offer='$offer', category='$category', submenu='$submenu', stock='$stock', details='$details', available_for='$available_for', product_thumb_1='$filename1', product_thumb_2='$filename2', product_thumb_3='$filename3' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: products_table.php");
} else {
    echo "Error updating record: " . $conn->error;
}
