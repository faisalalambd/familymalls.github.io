<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>

<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Return an item</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                <div class="mb-4">
                    <form method="post" action="return_item_confirm.php" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>Order Number</label>
                                    <input type="text" name="order_number" placeholder="" autofocus="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>Reason of return</label>
                                    <textarea name="reason" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>Upload an image (optional)</label>
                                    <input type="file" class="default" value="" name="choosefile">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" name="uploadfile" class="btn mb-3" value="Return Now!">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!--End Body Content-->

<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>