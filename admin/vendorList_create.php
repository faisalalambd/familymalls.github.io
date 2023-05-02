<!-- ############################## Header Section ############################## -->
<?php include("header.php"); ?>



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
                                    <input type="text" class="form-control" placeholder="Owner Name" value="" name="owner_name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Email</strong></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Customer Email" value="" name="username" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Phone</strong></label>
                                <div class="col-sm-9">
                                    <input type="tel" pattern="[0-9]{11}" class="form-control" placeholder="01XXXXXXXXX" value="" name="status" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Shop Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Owner Name" value="" name="shop_name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Shop Address</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="shop_address" cols="30" rows="10" placeholder="Customer Address"  required></textarea>
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