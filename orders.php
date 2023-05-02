<?php
include 'session.php';
include('login.php'); // Includes Login Script
if(!isset($_SESSION['login_user'])){
header("location: user_login.php"); // Redirecting To Profile Page
}

?>
<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Orders</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="container">
            <div class="row billing-fields">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4">Your Order</h2>

                            <div class="table-responsive-sm order-table">
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Order ID</th>
                                            <th class="text-left">Product Name</th>
                                            <th>Price</th>
                                            
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
            $sql = "SELECT * FROM 	orderlist  where((status!='cart')&&(c_email='$login_session')) order by id desc";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $category = $row['name'];
            ?>
                                        <tr>
                                            <td class="text-left"><?php echo $row['id']?></td>
                                            <td class="text-left"><?php echo $row['p_name']?></td>
                                            <td>BDT :<?php echo $row['p_price']?>/-</td>
                                            
                                            <td><?php echo $row['status']?></td>
                                        </tr>
                                        <?php }}?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--End Body Content-->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>