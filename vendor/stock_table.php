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
                        <h4>Table: Stock</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr style="text-align: center;">

                                        <th>P. Name</th>
                                        <th>Amount</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM 	products  order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>

                                            <tr style="text-align: center;">

                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['stock'] ?></td>
                                                <td style="width: 40%;">
                                                    <a href="stock_add.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-success">Add</a>
                                                    <style>
                                                        .custom_btn_danger {
                                                            margin: 0 5%;
                                                        }

                                                        .custom_btn_danger:hover {
                                                            color: white !important;
                                                        }
                                                    </style>
                                                    <a href="stock_deduct.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-danger custom_btn_danger">Deduct</a>
                                                    <a href="stock_damage.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-warning">Damage</a>
                                                </td>

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
<?php include 'footer.php' ?>