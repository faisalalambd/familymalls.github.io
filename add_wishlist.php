<?php 
include 'config.php';

	include('session.php');
	if(!isset($_SESSION['login_user'])){
$url="user_login.php";
	}else
	$url="profile.php";
	
                                    $sql = "SELECT * FROM 	customer  where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                        $name=$row['name'];
                                        $email=$row['username'];
                                         $phone=$row['phone'];
                                           $address=$row['address'];
                                    }} 
	
echo $id=$_GET['id'];
   
                                    $sql = "SELECT * FROM 	products where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                      
                                           $offer=$row['offer'];
                                           
                                      if($offer==0){
                                           $price=$row['price'];
                                      }else{
                                          $price=$row['offer'];
                                      }
                                      $p_name=$row['name'];
                                      $image=$row['image'];
                                      $category=$row['category'];
                                      $vendor_name=$row['vendor_name'];
                                       
                                    }} 
                                    $status="wishlist";
                                    
                                    $sql = "INSERT INTO orderlist (c_name,c_email,c_phone,c_address,p_name,p_price,status,vendor_name,p_image) VALUES ('$name','$email','$phone','$address','$p_name','$price','$status','$vendor_name','$image')";
                                        if (mysqli_query($conn, $sql)) {
                                            header("Location:product_details.php?id=$id");
                                        } else {
                                            $error = mysqli_error($conn);
                                            echo "ERROR: Could not able to execute  $error";
                                        }

                                  
?>