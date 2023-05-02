<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include("config.php");
//error_reporting(0);

$id = $_GET['id'];

$sql = "SELECT * FROM category where id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $name       = $row['name'];
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
                        <h4>Edit: Category</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="category_update.php?id=<?php echo $id ?>" method="post"  enctype="multipart/form-data">

                        <div class="card-body">
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Category Name" value="<?php echo $name ?>" name="name" required>
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