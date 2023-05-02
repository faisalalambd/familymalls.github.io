<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include("config.php");
//error_reporting(0); 
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Table: Order List</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <!-- <div class="text-right">
                                <a href="form.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div> -->


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>ID</th>
                                        <th>C. Name</th>
                                        <th>C. Email</th>
                                        <th>C. Phone</th>
                                        <th>C. Address</th>
                                        <th>P. Image</th>
                                        <th>P. Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <?php
                                        $sql = "SELECT * FROM 	orderlist  order by id desc";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {

                                                $id = $row['id'];
                                    ?>

                                            <tr>

                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['c_name'] ?></td>
                                                <td><?php echo $row['c_email'] ?></td>
                                                <td><?php echo $row['c_phone'] ?></td>
                                                <td><?php echo $row['c_address'] ?></td>
                                                <td><img src="assets/image/<?php echo $row['p_image'] ?>" alt="Girl in a jacket" width="80" height="80"></td>
                                                <td><?php echo $row['p_name'] ?></td>
                                                <td><?php echo $row['p_price'] ?></td>
                                                <form action="update_status.php ? id=<?php echo $id ?>" method="Post">
                                                    <td>
                                                        <select id="cars" name="cars">
                                                            <option value="pending">Pending</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="Shiped">Shiped</option>
                                                            <option value="Delivered">Delivered</option>
                                                        </select>

                                                    </td>
                                                    <td style="display: inline-flex;">
                                                        <div class="card-footer">
                                                            <button type="submit">Update</button>
                                                        </div>
                                                    </td>
                                                </form>

                                            </tr>

                                    <?php }
                                    } ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>