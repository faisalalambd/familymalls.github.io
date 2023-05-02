<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include("config.php");
//error_reporting(0);

$id = $_GET['id'];

$sql = "SELECT * FROM submenu where id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $menu     = $row['menu'];
        $submenu    = $row['submenu'];
      
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
                        <h4>edit: Submenu</h4>
                    </div>

 
                    <!-- ############################## Form ############################## -->
                    <form action="submenu_update.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Menu</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="menu">
                                        <option><?php echo $menu?></option>
                                        
                                    <?php
                                    $sql = "SELECT * FROM 	category  order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                        <option><?php echo $row['name']?></option>


                                        <?php
                                        }
                                    }
                                        ?>
                                        
                                        
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Submenu</strong></label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" placeholder="submenu" value="<?php echo $submenu?>" name="submenu" required>
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