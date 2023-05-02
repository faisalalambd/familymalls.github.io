<!-- ############################## Header Section ############################## -->
<?php include("header.php"); 
include 'config.php'?>


<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Submenu</h4>
                    </div>

 
                    <!-- ############################## Form ############################## -->
                    <form action="submenu_store.php" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            



                            


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Menu</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="menu">
                                        <option>Select the category of the products</option>
                                        
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
                                    <input type="text"  class="form-control" placeholder="submenu" value="" name="submenu" required>
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