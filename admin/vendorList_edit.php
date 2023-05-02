<!-- ############################## Header Section ############################## -->
<?php include("header.php"); 
include 'config.php'?>


<?php
                                    $sql = "SELECT * FROM 	user where id = $id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                                $email=$row['username'];
                                                $password=$row['password'];
                                                $shop_name=$row['shop_name'];
                                                $owner_name=$row['owner_name'];
                                                $shop_address=$row['shop_address'];
                                                $phone=$row['status'];
                                         }}
                                          ?>
<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Vendor List</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="vendorList_store.php" method="post">

                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Owner Name" value="<?php echo $owner_name?>" name="owner_name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Email</strong></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Customer Email" value="<?php echo $username?>" name="username" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Phone</strong></label>
                                <div class="col-sm-9">
                                    <input type="tel" pattern="[0-9]{11}" class="form-control" placeholder="01XXXXXXXXX" value="<?php echo $status?>" name="status" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Shop Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Owner Name" value="<?php echo $shop_name?>" name="shop_name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Shop Address</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="shop_address" cols="30" rows="10" placeholder="Customer Address" name="shop_address" value="<?php echo $shop_address?>" required></textarea>
                                </div>
                            </div>

                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>