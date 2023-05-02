<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include("config.php");
//error_reporting(0);

$id = $_GET['id'];

$sql = "SELECT * FROM customer where id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $name      = $row['name'];
        $email     = $row['email'];
        $phone     = $row['phone'];
        $address   = $row['address'];
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
                        <h4>Edit: Customer</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="customer_update.php ? id=<?php echo $id ?>" method="post">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Customer Name" value="<?php echo $name ?>" name="name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Email</strong></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Customer Email" value="<?php echo $email ?>" name="email" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Phone</strong></label>
                                <div class="col-sm-9">
                                    <input type="tel" pattern="[0-9]{11}" class="form-control" placeholder="01XXXXXXXXX" value="<?php echo $phone ?>" name="phone" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Address</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="address" cols="30" rows="10" placeholder="Customer Address" name="address" value="<?php echo $address ?>" required><?php echo $address ?></textarea>
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




