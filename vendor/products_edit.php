<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include("config.php");
//error_reporting(0);

$id = $_GET['id'];

$sql = "SELECT * FROM products where id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image              = $row['image'];
        $product_thumb_1    = $row['product_thumb_1'];
        $product_thumb_2    = $row['product_thumb_2'];
        $product_thumb_3    = $row['product_thumb_3'];
        $name               = $row['name'];
        $price              = $row['price'];
        $offer              = $row['offer'];
        $category           = $row['category'];
        $submenu            = $row['submenu'];
        $stock              = $row['stock'];
        $details            = $row['details'];
        $available_for      = $row['available_for'];
    }
}
?>


<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Edit: Products</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="products_update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload Product Thumb 1</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile1">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload Product Thumb 2</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile2">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload Product Thumb 3</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile3">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Product Name" value="<?php echo $name ?>" name="name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Price</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" step="any" class="form-control" placeholder="0" value="<?php echo $price ?>" name="price" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Offer Price</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" step="any" class="form-control" placeholder="0" value="<?php echo $offer ?>" name="offer" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Stock</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" step="1" class="form-control" placeholder="0" value="<?php echo $stock ?>" name="stock" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Product Category</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="category">
                                        <option value="<?php echo $category ?>"><?php echo $category ?></option>
                                        <?php
                                        $sql = "SELECT * FROM 	category  order by id desc";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {

                                        ?>
                                                <option><?php echo $row['name'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Sub-Menu</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="submenu">
                                        <option value="<?php echo $submenu ?>"><?php echo $submenu ?></option>
                                        <?php
                                        $sql = "SELECT * FROM 	submenu  order by id desc";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {

                                        ?>
                                                <option><?php echo $row['submenu'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="details" value="<?php echo $details ?>"><?php echo $details ?></textarea>
                                </div>
                            </div>

                        </div>


                        <div class="card-footer">
                            <button type="submit" name="uploadfile">submit</button>
                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>