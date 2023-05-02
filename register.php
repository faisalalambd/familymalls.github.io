<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>

<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Create an Account</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                <div class="mb-4">
                    <form method="post" action="confirm_registration.php" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="FirstName">Full Name</label>
                                    <input type="text" name="name" placeholder="" id="FullName" autofocus="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="LastName">Email</label>
                                    <input type="email" name="email" placeholder="" id="Email">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Phone</label>
                                    <input type="text" name="phone" placeholder="" id="CustomerPhone" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
                             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Address</label>
                                    <input type="text" name="address" placeholder="" id="CustomerAddress" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
                            
                             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">NID</label>
                                    <input type="text" name="nid" placeholder="" id="CustomerAddress" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Password</label>
                                    <input type="password" value="" name="password" placeholder="" id="CustomerPassword" class="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Register Now!">
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