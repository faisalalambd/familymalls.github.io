<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php';
$id = $_GET['id'] ?>
<?php
$sql = "SELECT * FROM 	products where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $current_stock = $row['stock'];
    }
} ?>




<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Deduct Stock</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="deduct_stock.php?id=<?php echo $id ?>" method="post">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Product Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Product Name" value="<?php echo $name ?>" name="name" required readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Current Stock</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="0" value="<?php echo $current_stock ?>" name="stock" required readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Deduct Stock</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" step="1" class="form-control" placeholder="0" value="" name="new_stock" required>
                                </div>
                            </div>

                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger">DEDUCT</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>