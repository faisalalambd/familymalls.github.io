
<?php
echo $name = $_GET['name'];
?>

<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!--Body Content-->
<div id="page-content">

    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <div class="sidebar_widget categories filter-widget">
                        <div class="widget-title">
                            <h2>Categories</h2>
                        </div>
                        <div class="widget-content">
                            <ul class="sidebar_categories">
                                 <?php
                                    $sql = "SELECT * FROM submenu where menu='$name' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                      
                                          
                                       
                                    ?> 
                                <li class="level1 sub-level"><a href="#;" class="site-nav"><?php echo $row['submenu']?></a>
                                    <!--<ul class="sublinks">-->
                                    <!--    <li class="level2"><a href="#;" class="site-nav">Men</a></li>-->
                                    <!--    <li class="level2"><a href="#;" class="site-nav">Women</a></li>-->
                                    <!--    <li class="level2"><a href="#;" class="site-nav">Child</a></li>-->
                                    <!--    <li class="level2"><a href="#;" class="site-nav">View All Clothing</a></li>-->
                                    <!--</ul>-->
                                </li>
                                
                                <?php }}?>
                                
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Price</h2>
                        </div>
                        <form action="#" method="post" class="price-filter">
                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="no-margin"><input id="amount" type="text"></p>
                                </div>
                                <div class="col-6 text-right margin-25px-top">
                                    <button class="btn btn-secondary btn--small">filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Size Swatches-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes">
                        <div class="widget-title">
                            <h2>Size</h2>
                        </div>
                        <div class="filter-color swacth-list">
                            <ul>
                                <li><span class="swacth-btn checked">X</span></li>
                                <li><span class="swacth-btn">XL</span></li>
                                <li><span class="swacth-btn">XLL</span></li>
                                <li><span class="swacth-btn">M</span></li>
                                <li><span class="swacth-btn">L</span></li>
                                <li><span class="swacth-btn">S</span></li>
                                <li><span class="swacth-btn">XXXL</span></li>
                                <li><span class="swacth-btn">XXL</span></li>
                                <li><span class="swacth-btn">XS</span></span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Color Swatches-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Color</h2>
                        </div>
                        <div class="filter-color swacth-list clearfix">
                            <span class="swacth-btn black"></span>
                            <span class="swacth-btn white checked"></span>
                            <span class="swacth-btn red"></span>
                            <span class="swacth-btn blue"></span>
                            <span class="swacth-btn pink"></span>
                            <span class="swacth-btn gray"></span>
                            <span class="swacth-btn green"></span>
                            <span class="swacth-btn orange"></span>
                            <span class="swacth-btn yellow"></span>
                            <span class="swacth-btn blueviolet"></span>
                            <span class="swacth-btn brown"></span>
                            <span class="swacth-btn darkGoldenRod"></span>
                            <span class="swacth-btn darkGreen"></span>
                            <span class="swacth-btn darkRed"></span>
                            <span class="swacth-btn dimGrey"></span>
                            <span class="swacth-btn khaki"></span>
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Brand-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Brands</h2>
                        </div>
                        <ul>
                            <li>
                                <input type="checkbox" value="allen-vela" id="check1">
                                <label for="check1"><span><span></span></span>Allen Vela</label>
                            </li>
                            <li>
                                <input type="checkbox" value="oxymat" id="check3">
                                <label for="check3"><span><span></span></span>Oxymat</label>
                            </li>
                            <li>
                                <input type="checkbox" value="vanelas" id="check4">
                                <label for="check4"><span><span></span></span>Vanelas</label>
                            </li>
                            <li>
                                <input type="checkbox" value="pagini" id="check5">
                                <label for="check5"><span><span></span></span>Pagini</label>
                            </li>
                            <li>
                                <input type="checkbox" value="monark" id="check6">
                                <label for="check6"><span><span></span></span>Monark</label>
                            </li>
                        </ul>
                    </div>
                    <!--End Brand-->
                </div>
            </div>
            <!--End Sidebar-->
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
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
                                    $sql = "SELECT * FROM 	products where category='$name' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                      
                                           $offer=$row['offer'];
                                           
                                      
                                           $price=$row['price'];
                                       
                                    ?> 
                                  
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
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
