<?php
include 'config.php';

echo $name = ($_REQUEST['name']);

echo $email = ($_REQUEST['email']);

echo $phone = ($_REQUEST['phone']);

echo $address = ($_REQUEST['address']);

echo $nid = ($_REQUEST['nid']);

echo $password = ($_REQUEST['password']);




$sql = "INSERT INTO customer (name,username,phone,address,password,nid) VALUES ('$name','$email','$phone','$address','$password','$nid')";
if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>

<?php
if ($error != "") {
    echo $text = "You Have An Account !! Please Login";
} else {
    echo $text = "Registration Successful !! Please Login ";
}



// /* Redirect browser */
header("Location:user_login.php?text='$text'");
// exit();
?>