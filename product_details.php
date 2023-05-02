<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php';
$id = $_GET['id'] ?>


<!--Body Content-->
<div id="page-content">
    <!--MainContent-->
    <div id="MainContent" class="main-content" role="main">

        <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
            <!--product-single-->
            <div class="product-single">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img">
                            <div class="product-thumb">
                                <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                    <?php
                                    $sql = "SELECT * FROM 	products where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $category = $row['category'];

                                    ?>
                                            <a data-image="vendor/assets/image/<?php echo $row['product_thumb_1'] ?>" data-zoom-image="vendor/assets/image/<?php echo $row['product_thumb_1'] ?>" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="vendor/assets/image/<?php echo $row['product_thumb_1'] ?>" src="vendor/assets/image/<?php echo $row['product_thumb_1'] ?>" alt="" style="height: 70px;" />
                                            </a>

                                            <a data-image="vendor/assets/image/<?php echo $row['product_thumb_2'] ?>" data-zoom-image="vendor/assets/image/<?php echo $row['product_thumb_2'] ?>" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload mt-2" data-src="vendor/assets/image/<?php echo $row['product_thumb_2'] ?>" src="vendor/assets/image/<?php echo $row['product_thumb_2'] ?>" alt="" style="height: 70px;" />
                                            </a>

                                            <a data-image="vendor/assets/image/<?php echo $row['product_thumb_3'] ?>" data-zoom-image="vendor/assets/image/<?php echo $row['product_thumb_3'] ?>" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload mt-2" data-src="vendor/assets/image/<?php echo $row['product_thumb_3'] ?>" src="vendor/assets/image/<?php echo $row['product_thumb_3'] ?>" alt="" style="height: 70px;" />
                                            </a>

                                            <a data-image="vendor/assets/image/<?php echo $row['image'] ?>" data-zoom-image="vendor/assets/image/<?php echo $row['image'] ?>" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload mt-2" data-src="vendor/assets/image/<?php echo $row['image'] ?>" src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" style="height: 70px;" />
                                            </a>

                                    <?php }
                                    } ?>
                                </div>
                            </div>

                            <div class="zoompro-wrap product-zoom-right pl-20">

                                <?php
                                $sql = "SELECT * FROM 	products where id=$id";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $category = $row['category'];

                                ?>
                                        <div class="zoompro-span">
                                            <img class="blur-up lazyload zoompro" data-zoom-image="vendor/assets/image/<?php echo $row['image'] ?>" alt="" src="vendor/assets/image/<?php echo $row['image'] ?>" style="width: 525px; height:450px" />
                                        </div>

                                <?php }
                                } ?>
                                <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                            </div>

                            <!--<div class="lightboximages">-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big1.jpg" data-size="1462x2048"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big2.jpg" data-size="1462x2048"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big3.jpg" data-size="1462x2048"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible7-big.jpg" data-size="1462x2048"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big4.jpg" data-size="1462x2048"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big5.jpg" data-size="1462x2048"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big6.jpg" data-size="731x1024"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big7.jpg" data-size="731x1024"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big8.jpg" data-size="731x1024"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big9.jpg" data-size="731x1024"></a>-->
                            <!--    <a href="assets/images/product-detail-page/camelia-reversible-big10.jpg" data-size="731x1024"></a>-->
                            <!--</div>-->

                        </div>
                    </div>
                    <?php
                    $sql = "SELECT * FROM 	products where id=$id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                            $offer = $row['offer'];


                            $price = $row['price'];

                    ?>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <!--<h1 class="product-single__title custom_product-single__title_a"><a href="#">Tommy Jeans</a></h1>-->
                                    <h1 class="product-single__title custom_product-single__title_h1"><?php echo $row['name'] ?></h1>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="discount-badge">
                                            <span id="SaveAmount-product-template" class="product-single__save-amount">
                                                <span class="money">45% off</span>
                                            </span>
                                        </span>
                                        <br>
                                        <?php if ($offer == 0) { ?>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">BDT <?php echo $row['price'] ?>/-</span></span>
                                            </span><?php } else { ?>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">BDT <?php echo $row['offer'] ?>/-</span></span>
                                            </span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s id="ComparePrice-product-template"><span class="money">BDT <?php echo $row['price'] ?>/-</span></s> <?php } ?>
                                    </p>
                                    <form method="post" action="#" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                        <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                                <label class="header">Color: <span class="slVariant">Red</span></label>
                                            </div>
                                        </div>
                                        <!--<div class="swatch clearfix swatch-1 option2" data-option-index="1">-->
                                        <!--    <div class="product-form__item">-->
                                        <!--        <label class="header">Size: <span class="slVariant">XS</span></label>-->
                                        <!--        <div data-value="XS" class="swatch-element xs available">-->
                                        <!--            <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">-->
                                        <!--            <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">XS</label>-->
                                        <!--        </div>-->
                                        <!--        <div data-value="S" class="swatch-element s available">-->
                                        <!--            <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">-->
                                        <!--            <label class="swatchLbl medium rectangle" for="swatch-1-s" title="S">S</label>-->
                                        <!--        </div>-->
                                        <!--        <div data-value="M" class="swatch-element m available">-->
                                        <!--            <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">-->
                                        <!--            <label class="swatchLbl medium rectangle" for="swatch-1-m" title="M">M</label>-->
                                        <!--        </div>-->
                                        <!--        <div data-value="L" class="swatch-element l available">-->
                                        <!--            <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">-->
                                        <!--            <label class="swatchLbl medium rectangle" for="swatch-1-l" title="L">L</label>-->
                                        <!--        </div>-->
                                        <!--        <div data-value="XL" class="swatch-element xl available">-->
                                        <!--            <input class="swatchInput" id="swatch-1-xl" type="radio" name="option-1" value="XL">-->
                                        <!--            <label class="swatchLbl medium rectangle" for="swatch-1-xl" title="XL">XL</label>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--Product Feature-->
                                        <!--    <div class="prFeatures">-->
                                        <!--        <div class="row">-->
                                        <!--            <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">-->
                                        <!--                <img src="assets/images/credit-card.png" alt="Safe Payment" title="Safe Payment" />-->
                                        <!--                <div class="details">-->
                                        <!--                    <h3>Safe Payment</h3>Pay with the world's most payment methods.-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">-->
                                        <!--                <img src="assets/images/shield.png" alt="Confidence" title="Confidence" />-->
                                        <!--                <div class="details">-->
                                        <!--                    <h3>Confidence</h3>Protection covers your purchase and personal data.-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">-->
                                        <!--                <img src="assets/images/worldwide.png" alt="Worldwide Delivery" title="Worldwide Delivery" />-->
                                        <!--                <div class="details">-->
                                        <!--                    <h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">-->
                                        <!--                <img src="assets/images/phone-call.png" alt="Hotline" title="Hotline" />-->
                                        <!--                <div class="details">-->
                                        <!--                    <h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--End Product Feature-->
                                        <!--</div>-->
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-9 col-lg-9" style="padding: 0;">
                                                    <div class="product-form__item--submit">
                                                        <a href="add_cart.php?id=<?php echo $row['id'] ?>" class="btn product-form__cart-submit">Add To Bag</a>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                                    <div class="display-table shareRow">
                                                        <div class="display-table-cell medium-up--one-third">
                                                            <div class="wishlist-btn custom_wishlisht_btn">
                                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                </div>
                                <!--Product Tabs-->
                                <div class="tabs-listing">
                                    <div class="tab-container">
                                        <h3 class="acor-ttl active custom_acor_ttl" rel="tab1">Material & care</h3>
                                        <div id="tab1" class="tab-content">
                                            <div class="product-description rte mt-2">
                                                <?php echo $row['materialandcare'] ?>
                                            </div>
                                        </div>
                                        <h3 class="acor-ttl custom_acor_ttl" rel="tab2">Details</h3>
                                        <div id="tab2" class="tab-content">
                                            <div class="product-description rte mt-2">
                                                <?php echo $row['details'] ?>
                                            </div>
                                        </div>

                                        <h3 class="acor-ttl custom_acor_ttl" rel="tab4">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    Carhartt WIP
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-right">
                                                    <a href="#" class="btn"><i class="fa-solid fa-plus"></i> Follow</a>
                                                </div>
                                            </div>
                                        </h3>
                                    </div>
                                </div>
                                <!--End Product Tabs-->
                            </div>
                    <?php }
                    } ?>

                </div>
            </div>
            <!--End-product-single-->

            <!--Similar items-->
            <div class="slideshow mt-5">
                <div class="container">
                    <div class="row custom_slideshow_row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <h3 style="color: black;">Similar items</h3>
                            <h4 style="color: black;">How about these?</h4>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-right custom_see_more">
                            <a href="#">See More <i class="fa-solid fa-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slideshow custom_slideshow" style="background: #ffffff; padding: 2% 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">

                                <?php
                                $sql = "SELECT * FROM 	products where id=$id";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {

                                        $offer = $row['offer'];


                                        $price = $row['price'];

                                ?>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="vendor/assets/image/<?php echo $row['image'] ?>" src="vendor/assets/image/<?php echo $row['image'] ?>" alt="image" title="product">
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
                                                        <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                        <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                        product price
                                                        <div class="product-price"><?php if ($offer == 0) { ?>
                                                                <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                                <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                                <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                        </div>
                                                        <!--End product price -->
                                                    </a>
                                                </div>
                                                <!-- End product name -->
                                            </div>
                                            <!-- End product details -->
                                        </div>

                                <?php }
                                } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Better together-->
            <div class="slideshow mt-5">
                <div class="container">
                    <div class="row custom_slideshow_row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <h3 style="color: black;">Better together</h3>
                            <h4 style="color: black;">Often viewed with each other</h4>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-right custom_see_more">
                            <a href="#">See More <i class="fa-solid fa-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slideshow custom_slideshow" style="background: #ffffff; padding: 2% 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">
                                <?php
                                $sql = "SELECT * FROM 	products order by id desc limit 6";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {

                                        $offer = $row['offer'];


                                        $price = $row['price'];

                                ?>

                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="vendor/assets/image/<?php echo $row['image'] ?>" src="vendor/assets/image/<?php echo $row['image'] ?>" alt="image" title="product">
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
                                                        <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                        <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                        product price
                                                        <div class="product-price"><?php if ($offer == 0) { ?>
                                                                <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                                <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                                <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                        </div>
                                                        <!--End product price -->
                                                    </a>
                                                </div>
                                                <!-- End product name -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                <?php }
                                } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--#ProductSection-product-template-->
    </div>
    <!--MainContent-->
</div>
<!--End Body Content-->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>