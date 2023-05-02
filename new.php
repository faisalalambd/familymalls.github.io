

<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!--Body Content-->
<div id="page-content">

    <div class="container">
        <div class="row">
            <!--Sidebar-->
            
            <!--End Sidebar-->
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                <div class="productList">
                    <!--Toolbar-->
                    <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    <div class="toolbar">
                        <div class="filters-toolbar-wrapper">
                            <div class="row">
                                <div class="col-6 col-md-6 col-lg-6 text-left filters-toolbar__item filters-toolbar__item--count d-flex justify-content-left align-items-center">
                                    <span class="filters-toolbar__product-count">Showing: 22</span>
                                </div>
                                <div class="col-6 col-md-6 col-lg-6 text-right">
                                    <div class="filters-toolbar__item">
                                        <label for="SortBy" class="hidden">Sort</label>
                                        <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                            <option value="title-ascending" selected="selected">Sort</option>
                                            <option>Best Selling</option>
                                            <option>Alphabetically, A-Z</option>
                                            <option>Alphabetically, Z-A</option>
                                            <option>Price, low to high</option>
                                            <option>Price, high to low</option>
                                            <option>Date, new to old</option>
                                            <option>Date, old to new</option>
                                        </select>
                                        <input class="collection-header__default-sort" type="hidden" value="manual">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Toolbar-->
                    <div class="grid-products grid--view-items custom_grid-products">
                        <div class="row">
                            
                            
                             <?php
                                    $sql = "SELECT * FROM products order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                      
                                           $offer=$row['offer'];
                                           
                                      
                                           $price=$row['price'];
                                       
                                    ?> 
                                  
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product_details.php?id=<?php echo $row['id']?>" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="vendor/assets/image/<?php echo $row['image']?>" src="vendor/assets/image/<?php echo $row['image']?>" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="button-set">
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-left">
                                <!-- product name -->
                                <div class="product-name custom_product_name">
                                    <a href="product-layout-1.html">
                                        <h5 style="color: black;"><?php echo $row['name']?></h5>
                                        <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                         product price 
                                        <div class="product-price"><?php if($offer==0){?>
                                            <span class="price" style="color: black;">BDT <?php echo $row['price']?>/-</span><?php }else{?>
                                             <span class="price" style="color: black;">BDT <?php echo $row['offer']?>/-</span>
                                            <span class="old-price" style="color: black;">BDT <?php echo $row['price']?>/-</span><?php }?>
                                           
                                        </div>
                                         <!--End product price -->
                                    </a>
                                </div>
                                <!-- End product name -->
                            </div>
                            <!-- End product details -->
                        </div>
                        
                        <?php }}?>

                            
                        </div>
                    </div>
                </div>
                <hr class="clear">
                <div class="pagination">
                    <ul>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="next"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--End Main Content-->
        </div>
    </div>

</div>
<!--End Body Content-->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>
