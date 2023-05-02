<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include 'config.php' ?>


<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Products</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="products_store.php" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload Product Image</strong></label>
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
                                    <input type="file" class="default" value="" name="choosefile2" >
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
                                    <input type="text" class="form-control" placeholder="Product Name" value="" name="name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Price</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" step="any" class="form-control" placeholder="0" value="" name="price" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Offer Price</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" step="any" class="form-control" placeholder="0" value="" name="offer" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Stock</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" step="1" class="form-control" placeholder="0" value="" name="stock" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Available For</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="available_for" required>
                                        <option>Select the Products Available For</option>
                                        <option value="men">Men</option>
                                        <option value="women">Women</option>
                                        <option value="kids">Kids</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Product Category</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="category" required>
                                        <option>Select the category of the products</option>

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
                                    <select class="form-control selectric" name="submenu" required>
                                        <option>Select the sub-menu of the products</option>

                                        <?php
                                        $sql = "SELECT * FROM submenu order by id desc";
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
                                    <textarea class="summernote" name="details" required></textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Material & Care</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="materialandcare" required></textarea>
                                </div>
                            </div>

                        </div>


                        <div class="card-footer">
                            <button type="Submit" class="btn btn-primary" name="uploadfile">Submit</button>
                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>