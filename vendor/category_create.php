<!-- ############################## Header Section ############################## -->
<?php include("header.php"); ?>


<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Category</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="category_store.php" method="post">

                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Category Name" value="" name="name" required>
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Category Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Category Title" value="" name="title" required>
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