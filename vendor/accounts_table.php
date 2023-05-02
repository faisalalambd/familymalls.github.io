<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php' ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Table: Accounts</h4>
                    </div>
                    <?php
                    $d_ammount=0;
                                        $sql = "SELECT * FROM 	orderlist where status='delivered'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {

                                               $d_ammount+=$row['p_price'];
                                            }}
                                            ?>

<?php
                    $p_ammount=0;
                                        $sql = "SELECT * FROM 	orderlist where status!='delivered'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {

                                               $p_ammount+=$row['p_price'];
                                            }}
                                            ?>


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

                                        <th>Your Delivered Earnings</th>
                                        <th>Pending Earnings</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <tr>

                                        <td><?php echo $d_ammount?></td>
                                        <td><?php echo $p_ammount?></td>
                                        <td style="display: inline-flex;">
                                            <style>
                                                .custom_btn_info:hover {
                                                    color: white !important;
                                                }
                                            </style>
                                            <a href="#" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                            <form action="#" method="post">
                                                <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                            </form>
                                        </td>

                                    </tr>

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
<?php include 'footer.php' ?>